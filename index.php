<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);

$version = '1.4.0';

include("application/lib/control.php");
include("application/lib/markdown.php");

Control::config("controllers_folder", "application/controllers");
Control::config("views_folder", "application/views");

Control::route("/^docs/", "docs");
Control::route("/^learn/", "learn");
Control::route("/^download/", "download");
Control::route("/^plugins/", "plugins");
Control::route("/^blog/", "blog");
Control::route("/^community/", "community");

new Control();
?>