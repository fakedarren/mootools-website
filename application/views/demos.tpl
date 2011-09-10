<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>MooTools Documentation</title>
	<?php require($this->config('views_folder') . '/shared/css.tpl');?>
	<link href="/assets/css/demos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php require($this->config('views_folder') . '/shared/header.tpl');?>
<div class="content">
	<?=$this->data['details'];?>
	<div class="inline-demo">
		<h2>HTML</h2>
		<textarea class='demo html'><?=$this->data['html'];?></textarea>
		<h2>JavaScript</h2>
		<textarea class='demo script'><?=$this->data['js'];?></textarea>
		<h2>CSS</h2>
		<textarea class='demo css'><?=$this->data['css'];?></textarea>
	</div>
</div>
<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
</body>
</html>