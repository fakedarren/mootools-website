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
				<li><span class="divider">/</span>Other Sites</li>
			</ul>
			<div class="page-header">
				<h1>Other great sites to learn MooTools and JavaScript</h1>
				<p>Here are some great websites, with lots of tips and information on how to use MooTools, JavaScript and other frameworks<p>
			</div>
			<ul>
				<li>
					<h2><a href="#">David Walsh's Blog</a></h2>
					<p>MooTools, jQuery and Dojo tips and tricks</p>
				</li>
				<li>
					<h2><a href="#">Mark Obcena's Blog</a></h2>
					<p>Advanced MooTools tips &amp; tricks</p>
				</li>
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