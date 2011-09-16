<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>MooTools Documentation</title>
	<meta name="description" content="" />
	<?php require($this->config('views_folder') . '/shared/css.tpl');?>
	<link href="/assets/css/docs.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php require($this->config('views_folder') . '/shared/header.tpl');?>
<div class="content">
	<h2>DEMOS HOME PAGE</h2>
	<?php echo $this->demoslist ?>
</div>
<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
</body>
</html>