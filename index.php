<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);

$currentversion = '2.0';

include("application/lib/control.php");
include("application/lib/markdown.php");

Control::config("controllers_folder", "application/controllers");
Control::config("views_folder", "application/views");

Control::config("version", isset($_GET['version']) ? $_GET['version'] : $currentversion);

Control::route("/^[0-9.]+?\/?docs/", "docs");
Control::route("/^[0-9.]+?\/?learn/", "learn");
Control::route("/^[0-9.]+?\/?download/", "download");
Control::route("/^[0-9.]+?\/?plugins/", "plugins");
Control::route("/^[0-9.]+?\/?blog/", "blog");
Control::route("/^[0-9.]+?\/?community/", "community");

new Control();
?>