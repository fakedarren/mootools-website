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
	    	<ul class="nav nav-list">
			  	<li class="nav-header">Documentation</li>
			  	<li class="active"><a href="../docs/">Home</a></li>
				<li class="divider"></li>
			  	<li><a href="../docs/typeOf.html">typeOf</a></li>
				<li class="divider"></li>
				<li><a href="../docs/element.html">Element</a></li>
				<li class="divider"></li>
				<li><a href="../docs/each.html">each</a></li>
				<li class="divider"></li>
				<li><a href="../docs/setStyle.html">setStyle</a></li>
				<li class="divider"></li>
				<li><a href="../docs/request.html">Request</a></li>
			</ul>
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