<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="/">MooTools More</a>
			<div class="nav-collapse">
				<ul class="nav">
					<li class="<?php if ($page == 'Home') echo 'active '?>tabbed"><a href="/official/">Home</a></li>
					<li class="<?php if ($page == 'Docs') echo 'active '?>tabbed"><a href="/official/docs/">Documentation</a></li>
					<li class="<?php if ($page == 'Download') echo 'active '?>tabbed"><a href="/official/download/">Download</a></li>
				</ul>
			</div>
			<form class="navbar-search pull-right" action="/search/">
				<input type="text" class="search-query span2" placeholder="Search" name="q" />
			</form>
			<ul class="nav pull-right">
				<li><a href="<?=$mainURL?>/plugins">Back to main site</a></li>
				<li class="divider-vertical"></li>
			</ul>
		</div>
	</div>
</div>