<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<?php require($this->config('views_folder') . '/shared/meta.tpl');?>
	<?php require($this->config('views_folder') . '/shared/css.tpl');?>
	<link href="/assets/css/docs.css" rel="stylesheet"/>
</head>
<body class="<?=$mode?>" onload="prettyPrint()">
<?php require($this->config('views_folder') . '/shared/header.tpl');?>
<div class="container">
	<div class="row">
	    <div class="span3">
			<?=$menu?>
	    </div>
	    <div class="span9">
			<?=$breadcrumb?>
			<?=$content?>
			<?=$related?>
	    </div>
	  </div>
</div>
<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
<script src="/assets/mootools/docs.js"></script>
</body>
</html>