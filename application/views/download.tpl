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
	  	<div class="span9">
			Downloads
		</div>
	  	<div class="span3">
			<a href="#" class="btn btn-primary btn-large btn-download">
				<h2>Download</h2>
				<p>MooTools 1.4.5 Core</p>
			</a>
		</div>
	</div>
	<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
</div>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
</body>
</html>