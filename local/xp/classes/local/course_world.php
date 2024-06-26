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
 * Course World.
 *
 * @package    local_xp
 * @copyright  2017 Frédéric Massart
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_xp\local;
defined('MOODLE_INTERNAL') || die();

use context;
use moodle_database;
use block_xp\local\config\config;
use block_xp\local\factory\badge_url_resolver_course_world_factory;
use local_xp\local\strategy\course_world_collection_strategy;
use local_xp\local\strategy\collection_target_resolver_from_event;

/**
 * Course World.
 *
 * @package    local_xp
 * @copyright  2017 Frédéric Massart
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class course_world extends \block_xp\local\course_world {

    protected $strategy;
    protected $logger;
    private $usercolletiontargetresolver;

    /**
     * Constructor.
     *
     * @param config $config The course config.
     * @param moodle_database $db The DB.
     * @param int $courseid The course ID.
     */
    public function __construct(config $config, moodle_database $db, $courseid,
            collection_target_resolver_from_event $usercolletiontargetresolver,
            badge_url_resolver_course_world_factory $urlresolverfactory) {

        parent::__construct($config, $db, $courseid, $urlresolverfactory);
        $this->usercolletiontargetresolver = $usercolletiontargetresolver;
    }

    /**
     * Return the collection strategy.
     *
     * @return block_xp\local\strategy\collection_strategy
     */
    public function get_collection_strategy() {
        if (!$this->strategy) {
            $fm = $this->get_filter_manager();
            $this->strategy = new \local_xp\local\strategy\course_world_collection_strategy(
                $this->context,
                $this->get_config(),
                $this->get_store(),
                new \local_xp\local\rule\filters_calculator($fm->get_filters()),
                $this->get_collection_logger(),
                $this->get_collection_logger(),
                $this->get_collection_logger(),
                new \block_xp\local\notification\course_level_up_notification_service($this->courseid),
                $this->usercolletiontargetresolver
            );
        }
        return $this->strategy;
    }

    /**
     * Get the state store.
     *
     * @return state_store
     */
    public function get_store() {
        if (!$this->store) {
            $this->store = new \block_xp\local\xp\course_user_state_store(
                $this->db,
                $this->get_levels_info(),
                $this->get_courseid(),
                $this->get_collection_logger()
            );
        }
        return $this->store;
    }

    private function get_collection_logger() {
        if (!$this->logger) {
            $this->logger = new \local_xp\local\logger\context_collection_logger(
                $this->db,
                $this->get_context(),
                new \local_xp\local\reason\maker_from_type_and_signature()
            );
        }
        return $this->logger;
    }


    /**
     * Get the user recent activity repository.
     *
     * @return user_recent_activity_repository
     */
    public function get_user_recent_activity_repository() {
        return $this->get_collection_logger();
    }

}
