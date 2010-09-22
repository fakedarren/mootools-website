<?
error_reporting(E_ALL); 
ini_set("display_errors", 1); 
include('application/control.php');

Control::route("/people/", 'developers');

new Control();
?>