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
			<h1>Learn MooTools</h1>
			<p>Welcome to the Learning Section</p>
			<div class="alert alert-info">
	  			<h4>What is this?</h4>
	  			It would be nice to have a 'learning' section - demos, tutorials, approved blog posts, books.
	  		</div>
		</div>
	  	<div class="span3">
	  		<?php require($this->config('views_folder') . '/shared/quick-download.tpl');?>
		</div>
	</div>
	<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
</div>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
</body>
</html>