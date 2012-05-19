<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand" href="/">MooTools</a>
			<div class="nav-collapse">
				<ul class="nav">
					<li class="<?php if ($page == 'Docs') echo 'active '?>tabbed"><a href="/docs/">Documentation</a></li>
					<li class="<?php if ($page == 'Learn') echo 'active '?>tabbed"><a href="/learn/">Learn More</a></li>
					<li class="<?php if ($page == 'Plugins') echo 'active '?>tabbed"><a href="/">Plugins</a></li>	
					<li class="<?php if ($page == 'Download') echo 'active '?>tabbed"><a href="/download/">Download</a></li>
				</ul>
			</div>
			<form class="navbar-search pull-right" action="/search/">
				<input type="text" class="search-query span2" placeholder="Search" name="q" />
			</form>
			<ul class="nav pull-right">
			
			
				<li class="<?php if ($page == 'History') echo 'active'?>"><a href="/plugins/">History</a></li>				
				<li class="divider-vertical"></li>
				<li class="<?php if ($page == 'Community') echo 'active'?>"><a href="/community/">Community</a></li>
				<li class="divider-vertical"></li>
				<li class="<?php if ($page == 'Developers') echo 'active'?>"><a href="/developers/">Developers</a></li>
				<li class="divider-vertical"></li>
				<li class="<?php if ($page == 'Blog') echo 'active'?>"><a href="/blog/">Blog</a></li>

			</ul>
		</div>
	</div>
</div>