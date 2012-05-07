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
	<div class="alert alert-info">This would be on more.mootools.net and then each item would get its own folder, eg more.mootools.net/forge, more.mootools.net/official, more.mootools.net/art, more.mootools.net/powertools</div>
	<div class="row">
	  	<div class="hero-unit">
  			<h1>Welcome to MooTools More</h1>
			<p>MooTools More is a collection of plugins, extensions and micro-frameworks, built on MooTools Core.</p>
  		</div>
  	</div>
  	<div class="row">
  		<div class="span9">
  			<div class="row">
		  		<ul class="thumbnails">
				  	<li class="span3">
				    	<div class="thumbnail">
							<a href="<?=$moreURL?>/official">
				    			<img src="http://placehold.it/260x180" />
				    			<h1>Official Plugins</h1>
				    			<p>Official plugins by the MooTools Dev Team</p>
							</a>
				      	</div>
				  	</li>
				  	<li class="span3">
				    	<div class="thumbnail">
							<a href="/forge">
					    		<img src="http://placehold.it/260x180" />
					    		<h1>The Forge</h1>
					    		<p>User-submitted plugins repository</p>
							</a>
				    	</div>
				  	</li>
				  	<li class="span3">
				    	<div class="thumbnail">
				    		<img src="http://placehold.it/260x180&text=random" />
				    		<h1>Something</h1>
				    		<p>(this would be a random extension)</p>
				    	</div>
				  	</li>
				</ul>
  			</div>
  			<div class="row">
  				<div class="span4">
	  				<h2>Latest Plugins</h2>
	  				<ul>
	  					<li><a href="#">Awesome plugin</a></li>
	  					<li><a href="#">Awesome plugin</a></li>
	  					<li><a href="#">Awesome plugin</a></li>
	  					<li><a href="#">Awesome plugin</a></li>
	  					<li><a href="#">Awesome plugin</a></li>
	  				</ul>
  				</div>
  				<div class="span4">
	  				<h2>Top Plugins by Rating</h2>
	  				<ul>
	  					<li><a href="#">Awesome plugin</a></li>
	  					<li><a href="#">Awesome plugin</a></li>
	  					<li><a href="#">Awesome plugin</a></li>
	  					<li><a href="#">Awesome plugin</a></li>
	  					<li><a href="#">Awesome plugin</a></li>
	  				</ul>
  				</div>
  			</div>
  			<br /><br />
  			<div class="row">
  				<div class="well">
  					<h3>Find out more (about More LOL)</h3>
  					<ul>
  						<li><a href="#">How to download and use a plugin</a></li>
  						<li><a href="#">How to contribute to More</a></li>
  					</ul>
  				</div>	
  			</div>
  		</div>
  		<div class="span3">
  			<form class="well form-search">
				<input type="text" class="input-medium search-query span1"/>
				<button type="submit" class="btn">Search More</button>
			</form>
  			<ul class="nav nav-list">
				<li class="nav-header">Categories</li>
				<li><a href="#">UI</a></li>
				<li><a href="#">Forms</a></li>
				<li><a href="#">Things</a></li>
				<li><a href="#">Stuff</a></li>
				<li><a href="#">Galleries</a></li>
				<li><a href="#">Accordions</a></li>
				<li><a href="#">UI</a></li>
				<li><a href="#">Forms</a></li>
				<li><a href="#">Things</a></li>
				<li><a href="#">Stuff</a></li>
				<li><a href="#">Galleries</a></li>
				<li><a href="#">Accordions</a></li>
			</ul>
  		</div>
	</div>
</div>
<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
</body>
</html>