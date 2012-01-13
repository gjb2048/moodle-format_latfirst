<?php
/**
 * Latest First Information
 *
 * A week based format that solves the issue of the 'Scroll of Death' when a course has many weeks.  The
 * latest week is shown at the top and preceding weeks are shown below with forthcoming weeks hidden from
 * the user.  When placed in 'editing' mode week order is shown chronologically and all weeks are available.
 * The weeks have a toggle that displays that week. The current week is displayed by default.  One or more
 * weeks can be displayed at any given time.  Toggles are persistent on a per browser session per course
 * basis but can be made to persist longer by a small code change.  Full installation instructions, code
 * adaptions and credits are included in the 'Readme.txt' file.
 *
 * @package    course/format
 * @subpackage latfirst
 * @version    See the value of '$plugin->version' in version.php.
 * @copyright  &copy; 2012-onwards G J Barnard in respect to modifications of standard weeks format.
 * @author     G J Barnard - gjbarnard at gmail dot com and {@link http://moodle.org/user/profile.php?id=442195}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

//
// Optional course format configuration file
//
// This file contains any specific configuration settings for the 
// format.
//
// The default blocks layout for this course format:
    $format['defaultblocks'] = ':search_forums,news_items,calendar_upcoming,recent_activity';
//
?>