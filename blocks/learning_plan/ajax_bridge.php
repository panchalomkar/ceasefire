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
 * This plugin serves as a database and plan for all learning activities in the organization,
 * where such activities are organized for a more structured learning program.
 * @package    block_learning_plan
 * @copyright  3i Logic<lms@3ilogic.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @author     Azmat Ullah <azmat@3ilogic.com>
 */
require_once('../../config.php');
require_once('learning_plan_form.php');
require_once("lib.php");
global $DB;
$attributes = array();
$lp_id = required_param('id', PARAM_INT);
$u_id = optional_param('u_id', null, PARAM_INT);
$t = optional_param('t', null, PARAM_INT);
$t_id = optional_param('t_id', null, PARAM_INT);
$status = optional_param('status', null, PARAM_INT);
$hidetraining = optional_param('hidetraining', null, PARAM_INT);
$hideusers = optional_param('hideusers', null, PARAM_INT);
$t_type_id = optional_param('t_type_id', null, PARAM_INT);
$g_id = optional_param('g_id', null, PARAM_INT);
if (!isloggedin()) {
    redirect($CFG->wwwroot);
}
require_login(null, false);
$PAGE->set_context(context_system::instance());
$PAGE->set_url('/blocks/learning_plan/ajax_bridge.php');

if ($lp_id && $t_id) {
    $form = new search();
    $table = $form->display_list($lp_id, $t_id, $status);
    $a = html_writer::table($table);
    echo $a;
} else {
    // Change training on the base of learning plan and user.
    if ($lp_id && $u_id) {
        $attributes = $DB->get_records_sql_menu('select lpt.t_id as id, (select training_name from  {learning_training} where id =lpt.t_id) as name from {learning_plan_training}
                                                 lpt inner join {learning_user_trainingplan} lut on lut.lpt_id=lpt.id  where lpt.lp_id=? AND lut.u_id=?', array($lp_id, $u_id), $limitfrom = 0, $limitnum = 0);
    }
    // Find training on the base of lp Id.
    else if ($lp_id && $t) {
        $attributes = $DB->get_records_sql_menu('SELECT t_id as id,(select training_name from  {learning_training} where id =t_id) as name FROM {learning_plan_training}
                                                 where lp_id= ?', array($lp_id), $limitfrom = 0, $limitnum = 0);
    }

    // Change users on the base of Learning plan.
    else if ($lp_id && $hidetraining) {
        $attributes1 = $DB->get_records_sql_menu('SELECT id, training_name as name from {learning_training} where type_id=?', array($t_type_id), $limitfrom = 0, $limitnum = 0);
        $attributes2 = $DB->get_records_sql_menu('SELECT  t_id as id, (SELECT training_name from {learning_training} where id =t_id) as name from {learning_plan_training}
                                                  where lp_id=?', array($lp_id), $limitfrom = 0, $limitnum = 0);
        $attributes = array_diff($attributes1, $attributes2);
    } else if ($lp_id && $hideusers) {

        if ($g_id != 0) {
            $attributes3 = $DB->get_records_sql_menu('SELECT u.id, CONCAT(firstname," ", lastname) as name FROM {user} as u inner join  {groups_members} gm on u.id= gm.userid
                                                   where u.firstname != "Guest User" AND u.suspended <> 1 AND u.deleted <> 1  AND  gm.groupid=?', array($g_id), $limitfrom = 0, $limitnum = 0);
        } else {
            $attributes3 = $DB->get_records_sql_menu('SELECT id, CONCAT(firstname," ", lastname) as name FROM {user} where firstname != "Guest User" AND suspended <> 1 AND deleted <> 1 ', null, $limitfrom = 0, $limitnum = 0);
        }


        $attributes4 = $DB->get_records_sql_menu('SELECT u_id as id, (SELECT concat(firstname," ", lastname) FROM {user} WHERE id = u_id  ) as name FROM {learning_user_learningplan}
                                                   where lp_id = ?', array($lp_id), $limitfrom = 0, $limitnum = 0);
        $attributes = array_diff($attributes3, $attributes4);
    } else if ($lp_id) {
        $attributes = $DB->get_records_sql_menu('SELECT lu.u_id as id , CONCAT(firstname," ", lastname) as name '
                . 'FROM {user} as u, {learning_user_learningplan} as lu '
                . 'where u.username!="guest" AND u.suspended <> 1 AND u.deleted <> 1  AND u.id = lu.u_id AND lu.lp_id= ?', array($lp_id), $limitfrom = 0, $limitnum = 0);
    }
    $data = "";
    foreach ($attributes as $key => $attrib) {
        $data .= $key . '~' . $attrib . '^';
    }
    return print_r($data);
}


/*
SELECT u.u_id as id, (SELECT CONCAT(firstname, " ", lastname)FROM {
    user
} where username != "guest" AND suspended <> 1 AND deleted <> 1 AND id = u. u_id) as name FROM {
    learning_user_learningplan
} as u where lp_id= ?
 * 
 * 
 */