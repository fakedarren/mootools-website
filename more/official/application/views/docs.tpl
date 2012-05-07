<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MooTools More - official plugins</title>
	<?=$baseCSS?>
	<?php require($serverroot . 'application/views/shared/css.tpl');?>
</head>
<body class="<?=$mode?>" onload="prettyPrint()">
<?php require($serverroot . 'application/views/shared/header.tpl');?>
<div class="container">
	<div class="row">
	    <div class="span3">
			<?=$menu?>
	    </div>
	    <div class="span9">
			<?=$breadcrumb?>
			<?=$content?>
			<?=$related?>
			<?php require($this->config('views_folder') . '/shared/comments.tpl');?>
	    </div>
	  </div>
</div>
<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
<script src="/assets/mootools/docs.js"></script>
</body>
</html>