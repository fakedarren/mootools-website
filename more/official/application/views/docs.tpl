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
			<?php require($serverroot . 'application/views/shared/comments.tpl');?>
	    </div>
	  </div>
</div>
<?php require($serverroot . 'application/views/shared/footer.tpl');?>
<?=$baseJS?>
</body>
</html>