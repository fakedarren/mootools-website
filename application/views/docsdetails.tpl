<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo $this->title;?></title>
	<meta name="description" content="" />
	<?php require($this->config('views_folder') . '/shared/css.tpl');?>
	<?php require($this->config('views_folder') . '/shared/meta.tpl');?>
	<link href="/assets/css/docs.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php require($this->config('views_folder') . '/shared/header.tpl');?>
<div class="content">
	<?php echo $this->menu ?>
	<div class="main">
		<?php echo $this->html ?>
		<?php require($this->config('views_folder') . '/shared/comments.tpl');?>
	</div>
</div>
<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
</body>
</html>