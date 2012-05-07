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
			<?php if (count($results) == 0):?>
			<div class="alert alert-error">
				<h4>No results found</h4>
			</div>
			<?php else:?>
			<p>Searching for '<?=$searchterm?>', showing results <?=$start?>-<?=$end?> of <?=$count?>.</p>
			<ul class="search-results">
				<?php
				foreach ($results as $document):
				echo '<li>' .
						'<h3><a href="' . $document['url'] . '">' . $document['name'] . '</a></h3>' .
					'</li>';
				endforeach
				?>
			</ul>			
			<?php endif?>
			<?=$pagination?>
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