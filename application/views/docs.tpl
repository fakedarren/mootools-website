<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo $this->title;?></title>
	<meta name="description" content="" />
	<?php require($this->config('views_folder') . '/shared/css.tpl');?>
	<?php require($this->config('views_folder') . '/shared/meta.tpl');?>
	<link href="/assets/css/docs.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php require($this->config('views_folder') . '/shared/header.tpl');?>
<div class="content">
	<?php echo $this->menu; ?>
	<?php
	if ($this->api === true){
		?><ul class="sidemenu"><?
		foreach ($this->submenu as $item){
			echo "<li>$item</li>";
		}
		?></ul><?php
	}
	?>
	<div class="main <?php if ($this->api === true) echo 'api'; ?>">
		<?php echo $this->html; ?>
	</div>
</div>
<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>
</body>
</html>