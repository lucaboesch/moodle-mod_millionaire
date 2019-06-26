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
 * English strings for millionaire
 *
 * @package    mod_millionaire
 * @copyright  2019 Benedikt Kulmann <b@kulmann.biz>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/* system */
$string['modulename'] = 'Millionaire Quiz';
$string['modulenameplural'] = 'Millionaire Quizzes';
$string['modulename_help'] = 'This is a "who wants to be a millionaire" style quiz game. Course participants get ranked in a leader board by their high scores.';
$string['pluginadministration'] = 'Millionaire Administration';
$string['pluginname'] = 'Millionaire';
$string['millionaire'] = 'Millionaire';
$string['millionaire:addinstance'] = 'Add a new Millionaire quiz';
$string['millionaire:submit'] = 'Submit Millionaire quiz';
$string['millionaire:manage'] = 'Manage Millionaire quiz';
$string['millionaire:view'] = 'View Millionaire quiz';
$string['millionairename'] = 'Name';
$string['millionairename_help'] = 'Please provide a name for your millionaire quiz.';
$string['introduction'] = 'Description';

/* main admin form: game options */
$string['game_options_fieldset'] = 'Game options';
$string['currency_for_levels'] = 'Score currency';
$string['currency_for_levels_help'] = 'Symbol / Text will be appended after each level score.';
$string['continue_on_failure'] = 'Continue Game?';
$string['continue_on_failure_help'] = 'If enabled, the user will continue the game although a wrong answer has been given.';
$string['question_repeatable'] = 'Questions repeatable?';
$string['question_repeatable_help'] = 'If enabled, questions might be repeated on consecutive runs of the game by te same user. This feature makes use of the individual setting of a question about whether or not its answers may be shuffled.';
$string['question_shuffle_answers'] = 'Shuffle answers?';
$string['question_shuffle_answers_help'] = 'If enabled, the answers of questions will be shuffled.';
$string['highscore_count'] = 'Highscore entries';
$string['highscore_count_help'] = 'Please decide how many rows the highscore table will show (default: 5). If you select 0, no highscores will be shown at all.';
$string['completionrounds'] = 'Student has to play a number of rounds';
$string['completionroundslabel'] = 'Played rounds';
$string['completionpoints'] = 'Student has to achieve a certain highscore';
$string['completionpointslabel'] = 'Achieved highscore';
$string['highscore_mode'] = 'Highscore mode';
$string['highscore_mode_best'] = 'Best score';
$string['highscore_mode_last'] = 'Most recent score';
$string['highscore_mode_average'] = 'Average score';
$string['highscore_mode_help'] = 'Please select which scoring mode you want to use for the highscore calculation of a user.';
$string['highscore_teachers'] = 'Teachers appear in highscore list?';
$string['highscore_teachers_help'] = 'If enabled teachers scores will appear in highscore list.';

/* activity edit page: control */
$string['control_edit'] = 'Control';
$string['control_edit_title'] = 'Control Options';
$string['reset_progress_heading'] = 'Reset Progress';
$string['reset_progress_button'] = 'Reset Progress';
$string['reset_progress_confirm_title'] = 'Confirm Reset Progress';
$string['reset_progress_confirm_question'] = 'Are you sure you want to reset the progress? this will delete all the results and is irreversible';

/* course reset */
$string['course_reset_include_progress'] = 'Reset progress (Highscores etc.)';
$string['course_reset_include_topics'] = 'Reset topics etc. (Everything will be deleted!)';

/* admin screen in vue app */
$string['admin_screen_title'] = 'Edit game content';
$string['admin_not_allowed'] = 'You have insufficient permissions to view this page.';
$string['admin_levels_title'] = 'Edit levels';
$string['admin_levels_none'] = 'You didn\'t add any levels, yet.';
$string['admin_levels_intro'] = 'You have already created the following levels for this game. You may edit their data and order, or even delete them. Please note, that editing levels for an already started game is limited.';
$string['admin_btn_add'] = 'Add';
$string['admin_btn_confirm_delete'] = 'Confirm Delete';
$string['admin_level_delete_confirm'] = 'Do you really want to delete the level »{$a}«?';
$string['admin_level_title_add'] = 'Create level';
$string['admin_level_title_edit'] = 'Edit level';
$string['admin_level_lbl_name'] = 'Name';
$string['admin_level_lbl_score'] = 'Score';
$string['admin_level_lbl_safe_spot'] = 'Safe level';
$string['admin_level_lbl_safe_spot_help'] = 'When the game option &quot;Continue Game?&quot; is inactive, the player falls back to the nearest safe level when giving an incorrect answer.';

/* game gui */
$string['game_screen_title'] = 'Play »Who wants to be a millionaire«';
$string['game_qtype_not_supported'] = 'The question type »{$a}« is not supported.';
$string['game_loading_question'] = 'Loading question details';
$string['game_loading_stats'] = 'Loading leader board';
$string['game_loading_stats_failed'] = 'An error occurred while loading the leader board.';
$string['game_btn_restart'] = 'New Game';
$string['game_btn_continue'] = 'Next Question';
$string['game_btn_stats'] = 'Leader Board';
$string['game_btn_quit'] = 'Quit';
$string['game_btn_start'] = 'Start Game';
$string['game_btn_game'] = 'Show Game';
$string['game_question_headline'] = 'Question {$a->number}: {$a->level}';
$string['game_won_headline'] = 'You won!';
$string['game_lost_headline'] = 'Sorry, you lost.';
$string['game_intro_message'] = 'We need to place a logo, text, etc, here.';
$string['game_help_headline'] = 'Game introduction';
$string['game_help_message'] = '<ul><li>You can start a new game at any time by clicking »New Game«.</li><li>You can switch between the Leader Board and the actual Game at any time.</li><li>You can end the game with your current score by clicking »Quit« (button below the question).</li><li>Each game provides you with three jokers (top right). 1: Get a hint. 2: Ask the audience. 3: Eliminate two wrong answers.</li></ul>';
$string['game_joker_feedback_unavailable'] = 'Unfortunately there is no hint available for this question.';
$string['game_joker_feedback_title'] = 'Hint:';
$string['game_joker_audience_title'] = 'Audience lifeline:';
$string['game_stats_empty'] = 'No one is on the leader board, yet.';
$string['game_stats_rank'] = 'Rank';
$string['game_stats_user'] = 'User';
$string['game_stats_score'] = 'Score';
$string['game_stats_sessions'] = 'Attempts';
