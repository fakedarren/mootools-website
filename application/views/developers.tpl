<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>MooTools Documentation</title>
	<meta name="description" content="" />
	<?php require($this->config('views_folder') . '/shared/css.tpl');?>
	<?php require($this->config('views_folder') . '/shared/meta.tpl');?>
	<link href="/assets/css/developers.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php require($this->config('views_folder') . '/shared/header.tpl');?>

	<div class="content">	
		
		<h1>The MooTools Dev Team</h1>
		<p>The MooTools development team is comprised of JavaScript developers from around the world.  </p>

		<ul class="developers">
			<li>
				<img src="<?php echo $super['avatar']; ?>" height="65" width="65" class="icon" />
				<h3 class="dev"><?php echo $this->data['super-dev']['name']; ?> <code>(<?php echo $this->data['super-dev']['nick']; ?>)</code></h3>
				<p><em>web</em>: <?php echo $this->data['super-dev']['web']; ?>, follow on <a href="http://twitter.com/<?php echo $super['twitter']; ?>">twitter</a>, fork on <a href="http://github.com/<?php echo $super['github']; ?>">github</a> </p>
				<p><em>location</em>: <?php echo $this->data['super-dev']['location']; ?></p>
			</li>
			<?php foreach ($this->data['devs'] as $dev){?>
			<li>
				<img src="<?php echo $dev['avatar']; ?>" height="65" width="65" class="icon" />
				<h3 class="dev"><?php echo $dev['name']; ?> <code>(<?php echo $dev['nick']; ?>)</code></h3>
				<p><em>web</em>: <?php echo $dev['web']; ?><?php if (!empty($dev['twitter'])) echo ', follow on <a href="http://twitter.com/'.$dev['twitter'].'">twitter</a>'; if (!empty($dev['github'])) echo ', fork on <a href="http://github.com/'.$dev['github'].'">github</a>';?></p>
				<p><em>location</em>: <?php echo $dev['location']; ?></p>			
			</li>
			<?php }?>
		</ul>
	
		<h3>Alumni</h3>
		
		<ul class="alumni">
			<?php foreach ($this->data['past-devs'] as $dev){?>
			<li>
				<div class="icon"><img src="<?php echo $dev['avatar']; ?>" height="65" width="65" /></div>
				<h3 class="dev"><?php echo $dev['name']; ?> <span>(<?php echo $dev['nick']; ?>)</span></h3>
				<p><em>web</em>: <?php echo $dev['web']; ?><?php if (!empty($dev['twitter'])) echo ', follow on <a href="http://twitter.com/'.$dev['twitter'].'">twitter</a>'; if (!empty($dev['github'])) echo ', fork on <a href="http://github.com/'.$dev['github'].'">github</a>';?></p>
				<p><em>location</em>: <?php echo $dev['location']; ?></p>			
			</li>
			<?php }?>
		</ul>
		
	</div>

<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
</body>
</html>