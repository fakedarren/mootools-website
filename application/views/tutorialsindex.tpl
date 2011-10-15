<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>MooTools</title>
	<meta name="description" content="" />
	<?php require($this->config('views_folder') . '/shared/css.tpl');?>
	<?php require($this->config('views_folder') . '/shared/meta.tpl');?>
</head>
<body>
<?php require($this->config('views_folder') . '/shared/header.tpl');?>

<div class="todo underconstruction">
	<h3>Under Construction</h3>
	<p>We're still building this bit of the new site, and if you want to know what's left to do and help out, take a look <a href="https://github.com/fakedarren/mootools-website/issues?milestone=4">here</a>.</p>
</div>

<div class="content">
	<h2>TUTORIALS (<?php echo $this->quantity?>)</h2>
	<?php echo $this->tutoriallist; ?>
</div>
<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
</body>
</html>