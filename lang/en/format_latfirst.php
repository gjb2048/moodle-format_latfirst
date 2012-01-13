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

// Used by the Moodle Core for identifing the format and displaying in the list of formats for a course in its settings.
// Possibly legacy to be removed after Moodle 2.0 is stable.
$string['namelatfirst']='Latest First';
$string['formatlatfirst']='Latest First';

// Used in format.php
$string['latfirsttoggle']='Toggle';
$string['latfirsttogglewidth']='width: 28px;';

$string['latfirstall']='all toggles.';
$string['latfirstopened']='Open';
$string['latfirstclosed']='Close';

// Moodle 2.0 Enhancement - Moodle Tracker MDL-15252, MDL-21693 & MDL-22056 - http://docs.moodle.org/en/Development:Languages
$string['sectionname'] = 'Week';
$string['pluginname'] = 'Latest First';
$string['section0name'] = 'General';
?>
