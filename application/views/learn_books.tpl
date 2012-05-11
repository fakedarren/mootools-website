<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<?php require($this->config('views_folder') . '/shared/meta.tpl');?>
	<?php require($this->config('views_folder') . '/shared/css.tpl');?>
	<link href="/assets/css/learn_books.css" rel="stylesheet" />
</head>
<body>	
<?php require($this->config('views_folder') . '/shared/header.tpl');?>
<div class="container">
	<div class="row">
	    <div class="span9">
			<ul class="breadcrumb">
				<li><a href="/learn">Learn</a></li>
				<li><span class="divider">/</span>Books</li>
			</ul>
			<div class="page-header">
				<h1>MooTools Books</h1>
			</div>
			<div class="row" id="book1">
				<div class="span9">
					<a href="http://www.amazon.com/Pro-JavaScript-MooTools-Mark-Obcena/dp/1430230541/" class="book">
						<span>Buy Pro JavaScript with MooTools on Amazon</span>
					</a>
					<h3>Pro JavaScript with MooTools out now!</h3>
					<p>Ready to take your MooTools knowledge to a new level? Then <a href="http://www.amazon.com/Pro-JavaScript-MooTools-Mark-Obcena/dp/1430230541/">grab a copy</a> of <a href="http://projswithmootools.com/">Pro JavaScript with MooTools</a> by <a href="http://keetology.com">Mark Obcena</a>, with a Foreword by MooTools Founder and Lead Developer <a href="http://mad4milk.net">Valerio Proietti</a>. Geared towards intermediate and advanced users, Pro JavaScript with MooTools explores advanced features of the JavaScript language as well as the internals of MooTools 1.3. So if you're hungry for milk, <a href="http://www.amazon.com/Pro-JavaScript-MooTools-Mark-Obcena/dp/1430230541/">get your copy today</a>.</p>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="span4" id="book2">
					<a href="http://www.amazon.com/MooTools-Essentials-JavaScript-Development-Firstpress/dp/1430209836" class="book">
						<span>Buy MooTools Essentials on Amazon</span>
					</a>
					<h3>MooTools Essentials</h3>
					<p>Pick up a copy of <a href="http://www.amazon.com/MooTools-Essentials-JavaScript-Development-Firstpress/dp/1430209836">MooTools Essentials</a> from <a href="http://clientside.cnet.com">Aaron Newton</a>, published by <a href="http://apress.com">Apress</a></p>
				</div>
				<div class="span1 divider">&nbsp;</div>
				<div class="span4" id="book3">
					<a href="https://www.packtpub.com/mootools-1-2-beginners-guide/book" class="book">
						<span>Buy MooTools 1.2 Beginner's Guide on Packt</span>
					</a>
					<h3>MooTools 1.2 Beginner's Guide</h3>
					<p>Pick up a copy of <a href="https://www.packtpub.com/mootools-1-2-beginners-guide/book">MooTools 1.2 Beginner's Guide</a> from Jacob Gube and Garrick Cheung, published by <a href="http://www.packtpub.com">Packt</a></p>
				</div>
			</div>
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