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
	  		<div class="alert alert-info">
	  			<h4>What is this?</h4>
	  			<p>This is just a prototype, some HTML mockups for us to use when discussing what we're going to do for the new MooTools website, if anything. It's unofficial and to be taken with a pinch of salt.</p>
	  		</div>
	  		<div class="well">
	  			<h3>MooTools is a compact, modular, Object-Oriented JavaScript framework designed for the intermediate to advanced JavaScript developer. It allows you to write powerful, flexible, and cross-browser code with its elegant, well documented, and coherent API.</h3>
	  		</div>
	  		<div class="well" style="height: 140px;">
	  			<p>(some kind of demo)</p>
	  		</div>
			<ul class="thumbnails">
			  	<li class="span3">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/260x180" />
			      		<h2>Thumbnail label</h2>
			      		<p>Thumbnail caption right here...</p>
			    	</div>
			  	</li>
			  	<li class="span3">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/260x180" />
			      		<h2>Thumbnail label</h2>
			      		<p>Thumbnail caption right here...</p>
			    	</div>
			  	</li>
			  	<li class="span3">
			    	<div class="thumbnail">
			      		<img src="http://placehold.it/260x180" />
			      		<h2>Thumbnail label</h2>
			      		<p>Thumbnail caption right here...</p>
			    	</div>
			  	</li>
			</ul>
		</div>
	  	<div class="span3">
	  		<?php require($this->config('views_folder') . '/shared/quick-download.tpl');?>
			<h4>Top Plugins</h4>
			<ul>
				<li><a href="#">Awesome plugin</a></li>
				<li><a href="#">Awesome plugin</a></li>
				<li><a href="#">Awesome plugin</a></li>
				<li><a href="#">Awesome plugin</a></li>
				<li><a href="#">Awesome plugin</a></li>
			</ul>
			<hr />
			<h4>Get Help</h4>
			<ul>
				<li><a href="#">Our Google Group</a></li>
				<li><a href="#">Find out about IRC</a></li>
			</ul>
		</div>
	</div>
</div>
<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
</body>
</html>