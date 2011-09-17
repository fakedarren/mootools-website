<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>MooTools Documentation</title>
	<meta name="description" content="" />
	<?php require($this->config('views_folder') . '/shared/css.tpl');?>
	<?php require($this->config('views_folder') . '/shared/meta.tpl');?>
	<link href="/assets/css/demos.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php require($this->config('views_folder') . '/shared/header.tpl');?>
<div class="content">
	<?php echo $this->data['details']; ?>
	<div class="inline-demo">
		<h2 class="selected">HTML</h2>
		<div class="selected content">
			<textarea class='demo html'><?php $this->data['html']; ?></textarea>
		</div>
		<h2>JavaScript</h2>
		<div class="content">
			<textarea class='demo script'><?php $this->data['js']; ?></textarea>
		</div>
		<h2>CSS</h2>
		<div class="content">
			<textarea class='demo css'><?php $this->data['css']; ?></textarea>
		</div>
	</div>
</div>
<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
</body>
</html>