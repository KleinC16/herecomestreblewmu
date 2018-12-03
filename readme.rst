###################
CS 3500_100 - Final Project: Image Sharing Site
Noah Jahn and Chandler Klein
Website: A capella group Here Comes Treble
###################

For this project, we continued development of the website that was made
for the midterm. The site is being hosted through Google Cloud. Technologies
used include HTML5, CSS and Bootstrap Framework, JavaScript, jQuery,
PHP, MySQL Database, and the CodeIgniter Framework. The CodeIgniter 
framework was implemented in order to expedite the coding process and 
add an extra layer of features that wouldn't normally be achievable in the 
same amount of time by coding from scratch.

*******************
Finding Code
*******************

Because we used the CodeIgniter framework, it might be a bit more
difficult to find code that needs to be examined. The important 
subfolders of "herecomestreblewmu" will be explained next. 

*******************
/application
*******************

This is the folder that most of our own code is in. It contains a config
folder with files that are mostly used to load the database and create
website link routes (autoload.php, config.php, routes.php). There is also
a controllers folder which contains simply class files that are named 
in a way that can be associated with a URI. Next is a models folder that
contains files designed to insert, update, and retrieve data for our pages.
Lastly, there is a views folder which is simply our web pages that are 
loaded by the controllers. 

*******************
/assets
*******************

Here is the folder that contains mostly CSS and images. The Bootstrap
framework was used, and there is a CSS file for each important web page.
In /assets/images, there are gallery, icon, and user profile images. There
is a single JavaScript file used to smooth scroll through the landing page.

*******************
/db
*******************

This is where we keep the SQL file that holds the database used 
and all of its tables.

*******************
Summary
******************* 

All of the previous folders where were the most important code can be found.
The folders not mentioned mostly contain drivers, libraries, and other information
used to support the CodeIgniter framework. A more in-deth explanation
of CodeIgniter and all of its features can be found below.

###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
