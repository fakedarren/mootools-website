<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>MooTools</title>
	<?php require($this->config('views_folder') . '/shared/css.tpl');?>
	<link href="/assets/css/docs.css" rel="stylesheet" type="text/css" />
</head>
<body>
	
<?php require($this->config('views_folder') . '/shared/header.tpl');?>

<div class="content">
	<?php if ($this->previouspage){ ?>
		<a href="/tutorials/<?php echo str_replace(' ', '-', $this->route); ?>/<?php echo $this->previouspage; ?>">Previous</a>
	<?php } ?>
	<?php if ($this->nextpage){ ?>
		<a href="/tutorials/<?php echo str_replace(' ', '-', $this->route); ?>/<?php echo $this->nextpage; ?>">Next</a>
	<?php } ?>
	
	<?php echo $this->html; ?>
	
	<?php if ($this->previouspage){ ?>
		<a href="/tutorials/<?php echo str_replace(' ', '-', $this->route); ?>/<?php echo $this->previouspage; ?>">Previous</a>
	<?php } ?>
	<?php if ($this->nextpage){ ?>
		<a href="/tutorials/<?php echo str_replace(' ', '-', $this->route); ?>/<?php echo $this->nextpage; ?>">Next</a>
	<?php } ?>
</div>

<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
	
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>

<?php require($this->config('views_folder') . '/shared/comments.tpl');?>

</body>
</html>