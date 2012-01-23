Introduction
------------
A week based format that solves the issue of the 'Scroll of Death' when a course has many weeks.  The
latest week is shown at the top and preceding weeks are shown below with forthcoming weeks hidden from
the user.  When placed in 'editing' mode week order is shown chronologically and all weeks are available.

NOTE: This is a 'beta' test version and should NOT be used in production environments.

This version works with Moodle 2.2.x.

Installation
------------
1. Copy 'latfirst' to /course/formats/
2. If using a Unix based system, chmod 755 on config.php - I have not tested this but have been told that it needs to be done.
3. If desired, edit the colours of the latfirst.css - which contains instructions on how to have per theme colours.
4. To change the arrow graphic you need to replace arrow_up.png and arrow_down.png.  Reuse the graphics
   if you want.  Created in Paint.Net.

Upgrade Instructions
--------------------
1. Put Moodle in Maintenance Mode so that there are no users using it bar you as the adminstrator.
2. In /course/formats/ move old 'latfirst' directory to a backup folder outside of Moodle.
3. Follow installation instructions above.
4. Put Moodle out of Maintenance Mode.


Remembered Toggle State Instructions
------------------------------------
To have the state of the toggles be remembered beyond the session for a user (stored as a cookie in the user's 
web browser local storage area), edit format.php and find the following at the towards the top...

    $PAGE->requires->js_function_call('latfirst_init',
                                      array($CFG->wwwroot,
                                            preg_replace("/[^A-Za-z0-9]/", "", $SITE->shortname),
                                            $course->id,
                                            null)); // Expiring Cookie Initialisation - replace 'null' with your chosen duration.

Millisecond values for standard durations are:
a Second = 1000
a Minute = 60000
an Hour = 3600000
a Day = 86400000
a Week = 604800000 is 7 Days.
a Month = 2419200000 is 4 Weeks.
a Year = 31536000000 is 365 Days.

The word to change is 'null' which says to create a 'session cookie' for the toggle state.  Set the time in milliseconds in the
future.  For example a remembered state of a week would be:

    $PAGE->requires->js_function_call('latfirst_init',
                                      array($CFG->wwwroot,
                                            preg_replace("/[^A-Za-z0-9]/", "", $SITE->shortname),
                                            $course->id,
                                            604800000)); // Expiring Cookie Initialisation - replace 'null' with your chosen duration.

You can combine the durations together and perform mathematical operations, for example, to have a
duration in the future of one day 38 minutes and 30 seconds you would have:

    $PAGE->requires->js_function_call('latfirst_init',
                                      array($CFG->wwwroot,
                                            preg_replace("/[^A-Za-z0-9]/", "", $SITE->shortname),
                                            $course->id,
                                            88710000)); // Expiring Cookie Initialisation - replace 'null' with your chosen duration.

Calculated by 'a Day' + ('a Minute' * 38) + ('a Second' * 30) = 86400000 + (60000 * 38) + (1000 * 30) = 88710000

To revert back to session cookies, simply put back the word 'null'.

NOTE: The client's browser must support the persistent storage of cookies in the user's profile for this to work.  I realise that
      some configured systems do not allow this and therefore this mechanism will not work.  However, I anticipate that setting
      an expiring cookie will be fine as it will simply be deleted in environments where they are removed on log out, but will have
      use when the user is at home and remotely logs in.

Known Issues
------------

1.  If you get toggle text issues in languages other than English please ensure you have the latest version of Moodle installed.  More
    information on http://moodle.org/mod/forum/discuss.php?d=184150.
2.  AJAX drag and drop appears not to be working in IE 9 for me, but is in compatibility mode (IE 7) and same issue with the standard
    topics format too.  Hence I consider it to be either an issue with my system or Moodle Core.  If you experience it and wish to use
    the up and down arrows, edit lib.php and remove "'MSIE' => 6.0," from:
    "$ajaxsupport->testedbrowsers = array('MSIE' => 6.0, 'Gecko' => 20061111, 'Opera' => 9.0, 'Safari' => 531, 'Chrome' => 6.0);"
    And if possible, please let me know, my Moodle.org profile is 'http://moodle.org/user/profile.php?id=442195'.

Version Information
-------------------
13th January 2012 - Version 2.2.0.1
  1. Based upon version 2.3.1.1.2 of weekcoll.
  2. This is a 'beta' test version and should NOT be used in production environments.
  3. There is a known bug that if you set a week in the future to be the 'Show only week' 
     in editing mode and then come out, then no weeks are displayed and the drop down selection
     box does not allow another week to be selected.  You need to go back into editing mode to
     recover.

23rd January 2012 - Version 2.2.0.2
  1. Sorted out UTF-8 BOM issue, see MDL-31343.
  2. Slight change for MDL-31006 to support PHP 5.4.
  
Thanks
------
I would like to thank Anthony Borrow - arborrow@jesuits.net & anthony@moodle.org - for his invaluable input.

Craig Grannell of Snub Communications who wrote the article on Collapsed Tables in .Net Magazine Issue 186 from whom
the original code is based and concept used with his permission.

For the Peristence upgrade I would like to thank all those who contributed to the developer forum -
http://moodle.org/mod/forum/discuss.php?d=124264 - Frank Ralf, Matt Gibson, Howard Miller and Tim Hunt.  And
indeed all those who have worked on the developer documentation - http://docs.moodle.org/en/Javascript_FAQ.

Michael de Raadt for CONTRIB-1945 & 1946 which sparked fixes in CONTRIB-1952 & CONTRIB-1954

Amanda Doughty (http://moodle.org/user/profile.php?id=1062329) for her contribution in solving the AJAX move problem.

Mark Ward (http://moodle.org/user/profile.php?id=489101) for his contribution solving the IE8- display problem.

Pieter Wolters (http://moodle.org/user/profile.php?id=537037) - for the Dutch translation.

Tarcísio Nunes (http://moodle.org/user/profile.php?id=1149633) - for the Brazilian translation.

References
----------
.Net Magazine Issue 186 - Article on Collapsed Tables by Craig Grannell -
 http://www.netmag.co.uk/zine/latest-issue/issue-186

Craig Grannell - http://www.snubcommunications.com/

Accordion Format - Initiated the thought - http://moodle.org/mod/forum/discuss.php?d=44773 & 
                                           http://www.moodleman.net/archives/47

Paint.Net - http://www.getpaint.net/

JavaScript: The Definitive Guide - David Flanagan - O'Reilly - ISBN: 978-0-596-10199-2

Desired Enhancements
--------------------

1. Smoother animated toggle action.
2. Use ordered lists / divs instead of tables to fall in line with current web design theory.  Older versions of
   'certain' browsers causing issues in making this happen.

G J Barnard - MSc, BSc(Hons)(Sndw), PGCE, MBCS, CEng, CITP - 23rd January 2012.