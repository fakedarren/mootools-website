<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1);

include("application/lib/control.php");
include("application/lib/demo-parser.php");
include("application/lib/markdown.php");
include('application/lib/Solarium/Autoloader.php');
include('application/lib/search.php');

/*
versioning
*/
$currentversion = '2.0';
$isLatest = empty($_GET['version']) || $_GET['version'] == $currentversion;
$thisVersion = $isLatest ? $currentversion : $_GET['version'];

Control::config("is_latest", $isLatest);
Control::config("version", $thisVersion);
Control::config("major_version", substr($thisVersion, 0, 3));

/*
configuration
*/
Control::config("more_url", 'http://mootools-website-more.local');

Control::config("controllers_folder", "application/controllers");
Control::config("views_folder", "application/views");

Control::route("/^docs/", "docs");
Control::route("/^[0-9.]+?\/?docs/", "docs");
Control::route("/^api/", "docs");
Control::route("/^[0-9.]+?\/?api/", "docs");

Control::route("/^[0-9.]+?\/?learn/", "learn");
Control::route("/^demo/", "demo");
Control::route("/^tutorial/", "tutorial");

Control::route("/^[0-9.]+?\/?download/", "download");
Control::route("/^[0-9.]+?\/?plugins/", "plugins");
Control::route("/^[0-9.]+?\/?blog/", "blog");
Control::route("/^[0-9.]+?\/?community/", "community");

Control::route("/^search/", "search");

/*
go
*/
new Control();
?>