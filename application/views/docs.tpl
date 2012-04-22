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
	<div class="row">:<?=$version?>:
	    <div class="span3">
			<?=$menu?>
	    </div>
	    <div class="span9">
	    	<ul class="breadcrumb">
			  	<li class="active">Docs</li>
			</ul>
			<div class="alert alert-info">
				<h4>What is this?</h4>
				Some rough ideas for documentation 'styles'. I think that different components of MooTools needs different styles
				specific to what it is. These are just ideas!
			</div>
	    </div>
	  </div>
	<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
</div>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
</body>
</html>