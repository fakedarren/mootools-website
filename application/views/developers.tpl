<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>MooTools Documentation</title>
	<meta name="description" content="" />
	<?php require($this->config('views_folder') . '/shared/css.tpl');?>
	<?php require($this->config('views_folder') . '/shared/meta.tpl');?>
</head>
<body>
<?php require($this->config('views_folder') . '/shared/header.tpl');?>

	<div class="content">	
		
		<h2>The MooTools Dev Team</h2>
		<p>This is a brief list of the people involved in the MooTools production.</p>
		<p>Some day we'll write something insightful under people names.</p>

		<ul class="developers">
			<li>
				<div class="icon"><img src="<?php echo $super['avatar']; ?>" height="65" width="65" /></div>
				<h2 class="dev"><?php echo $this->data['super-dev']['name']; ?> <span>(<?php echo $this->data['super-dev']['nick']; ?>)</span></h2>
				<p><em>web</em>: <?php echo $this->data['super-dev']['web']; ?>, follow on <a href="http://twitter.com/<?php echo $super['twitter']; ?>">twitter</a>, fork on <a href="http://github.com/<?php echo $super['github']; ?>">github</a> </p>
				<p><em>location</em>: <?php echo $this->data['super-dev']['location']; ?></p>
			</li>
			<?php foreach ($this->data['devs'] as $dev){?>
			<li>
				<div class="icon"><img src="<?php echo $dev['avatar']; ?>" height="65" width="65" /></div>
				<h2 class="dev"><?php echo $dev['name']; ?> <span>(<?php echo $dev['nick']; ?>)</span></h2>
				<p><em>web</em>: <?php echo $dev['web']; ?><?php if (!empty($dev['twitter'])) echo ', follow on <a href="http://twitter.com/'.$dev['twitter'].'">twitter</a>'; if (!empty($dev['github'])) echo ', fork on <a href="http://github.com/'.$dev['github'].'">github</a>';?></p>
				<p><em>location</em>: <?php echo $dev['location']; ?></p>			
			</li>
			<?php }?>
		</ul>
	
		<h2>Alumni</h2>
		
		<ul class="alumni">
			<?php foreach ($this->data['past-devs'] as $dev){?>
			<li>
				<div class="icon"><img src="<?php echo $dev['avatar']; ?>" height="65" width="65" /></div>
				<h2 class="dev"><?php echo $dev['name']; ?> <span>(<?php echo $dev['nick']; ?>)</span></h2>
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