<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<?php require($this->config('views_folder') . '/shared/meta.tpl');?>
	<?php require($this->config('views_folder') . '/shared/css.tpl');?>
</head>
<body onload="prettyPrint()">	
<?php require($this->config('views_folder') . '/shared/header.tpl');?>
<div class="container">
    <div class="row">
	  	<div class="span9">
			<div class="page-header">
				<h1>Search Results</h1>
			</div>
			<ul class="search-results">
				<li>
					<h3><a href="#">Search Result 1</a></h3>
					<p>This is the description. This is the description.</p>
				</li>
				<li>
					<h3><a href="#">Search Result 2</a></h3>
					<p>This is the description. This is the description.</p>
				</li>
				<li>
					<h3><a href="#">Search Result 3</a></h3>
					<p>This is the description. This is the description.</p>
				</li>
				<li>
					<h3><a href="#">Search Result 4</a></h3>
					<p>This is the description. This is the description.</p>
				</li>
				<li>
					<h3><a href="#">Search Result 5</a></h3>
					<p>This is the description. This is the description.</p>
				</li>
				<li>
					<h3><a href="#">Search Result 6</a></h3>
					<p>This is the description. This is the description.</p>
				</li>
				<li>
					<h3><a href="#">Search Result 7</a></h3>
					<p>This is the description. This is the description.</p>
				</li>
				<li>
					<h3><a href="#">Search Result 8</a></h3>
					<p>This is the description. This is the description.</p>
				</li>
				<li>
					<h3><a href="#">Search Result 9</a></h3>
					<p>This is the description. This is the description.</p>
				</li>
				<li>
					<h3><a href="#">Search Result 10</a></h3>
					<p>This is the description. This is the description.</p>
				</li>
			</ul>
			<ul class="pagination">
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">6</a></li>
			</ul>
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