<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);

$version = '1.4.0';

include("application/lib/control.php");
include("application/lib/markdown.php");

Control::config("controllers_folder", "application/controllers");
Control::config("views_folder", "application/views");

new Control();
?>