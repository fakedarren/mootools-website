<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<?php require($this->config('views_folder') . '/shared/meta.tpl');?>
	<?php require($this->config('views_folder') . '/shared/css.tpl');?>
</head>
<body>	
<?php require($this->config('views_folder') . '/shared/header.tpl');?>
<div class="container">
	<div class="row">
	    <div class="span3">
			<?=$menu?>
	    </div>
	    <div class="span9">
			<?=$breadcrumb?>
			<?=$content?>
	    </div>
	  </div>
	<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
</div>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
</body>
</html>