<?
error_reporting(E_ALL); 
ini_set("display_errors", 1); 
include("application/lib/control.php");
include("application/lib/markdown.php");
include("application/lib/demorunner.php");
include("application/lib/geshi/geshi.php");

Control::config("controllers_folder", "application/controllers");
Control::config("views_folder", "application/views");

Control::route("/docs/", "docs");
Control::route("/people/", "developers");

new Control();
?>