<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);

include("application/lib/control.php");
include("application/lib/markdown.php");
include("application/lib/demorunner.php");
include("application/lib/docsparser.php");
include("application/lib/packagemenu.php");
include("application/lib/geshi/geshi.php");

Control::config("controllers_folder", "application/controllers");
Control::config("views_folder", "application/views");

Control::route("/^learn/", "learn");
Control::route("/^api/", "docs");
Control::route("/^docs/", "docs");
Control::route("/^demos/", "demos");
Control::route("/^people/", "developers");
Control::route("/^tutorials/", "tutorials");

new Control();
?>