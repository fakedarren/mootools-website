<?
error_reporting(E_ALL); 
ini_set("display_errors", 1); 
include("application/control.php");

Control::config("controllers_folder", "application/controllers");
Control::config("views_folder", "application/views");

Control::route("/people/", "developers");

new Control();
?>