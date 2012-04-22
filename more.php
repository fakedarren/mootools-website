<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);

include("application/lib/control.php");
include("application/lib/markdown.php");

include("application/lib/plugins/docs-base.php");
/*
plugin
*/
Control::config("plugin", $_GET['plugin']);

/*
configuration
*/
$serverRoot = $_SERVER['DOCUMENT_ROOT'] . "/more/" . Control::config("plugin") . "/";

Control::config("webroot", "/more/" . Control::config("plugin") . "/");
Control::config("serverroot", $serverRoot);

Control::config("controllers_folder", $serverRoot . "application/controllers");
Control::config("views_folder", $serverRoot . "application/views");

include($serverRoot . 'application/init.php');

/*
go
*/
new Control();
?>