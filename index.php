<?php
require "load.php";
$ObjLayouts->heading();
$ObjMenus->main_menu();
$ObjHeadings->main_banner();
$ObjCont->main_content();
$ObjCont->side_bar();
$ObjLayouts->footer();





ini_set('session.cookie_secure', 1); // Ensures cookies are only sent over HTTPS
ini_set('session.cookie_httponly', 1); // Prevents JavaScript from accessing session cookies
