<!DOCTYPE html>
<?php
if (isset($_GET['tutorial'])){
	$path = '/learning/tutorials/' . $_GET['tutorial'] . '/demos/' . $_GET['demo'];
} else {
	$path = '/learning/demos/' . $_GET['demo'];
}
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
	<link href="<?=$path?>/demo.css" rel="stylesheet"/>
</head>
<body>
<?=file_get_contents($_SERVER['DOCUMENT_ROOT'] . $path . '/demo.html')?>

</body>
<script src="/assets/mootools/mootools-2-alpha.js"></script>
<script src="<?=$path?>/demo.js"></script>
</html>