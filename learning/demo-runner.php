<!DOCTYPE html>
<?php
$demo = $_GET['demo'];
?>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Demo</title>
	<style>
		html, body {
			font: 12px/1 Helvetica, Arial, sans-serif;
			height: 0;
			padding: 0;
		}
	</style>
	<link href="/learning/demos/<?=$demo?>/demo.css" rel="stylesheet"/>
</head>
<body>
<?=file_get_contents($_SERVER['DOCUMENT_ROOT'] . '/learning/demos/' . $demo . '/demo.html')?>

</body>
<script src="/assets/mootools/mootools-2-alpha.js"></script>
<script src="/learning/demos/<?=$demo?>/demo.js"></script>
</html>