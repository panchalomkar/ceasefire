<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Anonymised cleaderboard.
 *
 * @package    block_xp
 * @copyright  2018 Frédéric Massart
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_xp\local\cleaderboard;
defined('MOODLE_INTERNAL') || die();

use block_xp\local\iterator\map_iterator;
use block_xp\local\sql\limit;
use block_xp\local\xp\anonymised_state;
use block_xp\local\xp\anonymised_user_state;
use block_xp\local\xp\levels_info;
use block_xp\local\xp\rank;
use block_xp\local\xp\state_rank;
use block_xp\local\xp\state_with_subject;
use block_xp\local\xp\user_state;

/**
 * Anonymised cleaderboard.
 *
 * This currenly only handles user_state, and state_with_subject.
 *
 * @package    block_xp
 * @copyright  2018 Frédéric Massart
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class anonymised_cleaderboard implements cleaderboard {

    /** @var cleaderboard The cleaderboard to anonymise. */
    protected $cleaderboard;
    /** @var levels_info The levels info. */
    protected $levelsinfo;
    /** @var int[] The object IDs not to anonymise. */
    protected $exceptids;
    /** @var stdClass The user to replace with. */
    protected $anonymous;
    /** @var string The name to user. */
    protected $name;

    /**
     * Constructor.
     *
     * @param cleaderboard $cleaderboard The cleaderboard.
     * @param levels_info $levelsinfo The levels info.
     * @param object $anonymous The anonymous object to use instead.
     * @param array $exceptids The IDs not to anonymise.
     * @param string $name The name to use when anonymising non-user_state states.
     */
    public function __construct(cleaderboard $cleaderboard, levels_info $levelsinfo, $anonymous, $exceptids = [], $name = '?') {
        $this->cleaderboard = $cleaderboard;
        $this->anonymous = $anonymous;
        $this->exceptids = $exceptids;
        $this->levelsinfo = $levelsinfo;
        $this->name = $name;
    }

    /**
     * Anonymise the state rank.
     *
     * @param rank $staterank The state rank.
     * @return rank
     */
    protected function anonymise_rank(rank $rank) {
        $state = $rank->get_state();

        $keepasis = in_array($state->get_id(), $this->exceptids);
        if ($keepasis) {
            return $rank;
        }

        if ($state instanceof user_state) {
            $rank = new state_rank(
                $rank->get_rank(),
                new anonymised_user_state($state, $this->anonymous)
            );

        } else if ($state instanceof state_with_subject) {
            $rank = new state_rank(
                $rank->get_rank(),
                new anonymised_state($state, $this->name)
            );
        }

        return $rank;
    }

    /**
     * Get the cleaderboard columns.
     *
     * @return array Where keys are column identifiers and values are lang_string objects.
     */
    public function get_columns() {
        return $this->cleaderboard->get_columns();
    }

    /**
     * Get the number of rows in the cleaderboard.
     *
     * @return int
     */
    public function get_count() {
        return $this->cleaderboard->get_count();
    }

    /**
     * Get the number of rows in the cleaderboard.
     *
     * @param int $id The object ID.
     * @return int
     */
    public function get_position($id) {
        return $this->cleaderboard->get_position($id);
    }


    /**
     * Get the rank of an object.
     *
     * @param int $id The object ID.
     * @return rank|null
     */
    public function get_rank($id) {
        $staterank = $this->cleaderboard->get_rank($id);
        return $staterank === null ? null : $this->anonymise_rank($staterank);
    }


    /**
     * Get the ranking.
     *
     * @param limit $limit The limit.
     * @return Traversable
     */
    public function get_ranking(limit $limit) {
        $ranking = $this->cleaderboard->get_ranking($limit);
        return new map_iterator($ranking, function($state) {
            return $this->anonymise_rank($state);
        });
    }

}
