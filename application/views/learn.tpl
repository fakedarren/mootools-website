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
			<div class="row">
				<div class="span3">Demos</div>
				<div class="span3">Tutorials</div>
				<div class="span3">
					<h3>Other ways to learn</h3>
					<ul>
						<li><a href="/learn/sites">Sites</a></li>
						<li><a href="/learn/books">Books</a></li>
					</ul>
				</div>
			</div>
			<hr />
			<p><a href="/demo/example">An Example Demo</a></p>
			<p><a href="/tutorial/example">An Example Tutorial</a></p>
		</div>
	  	<div class="span3">
	  		<?php require($this->config('views_folder') . '/shared/quick-download.tpl');?>
		</div>
	</div>
</div>
<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
</body>
</html>