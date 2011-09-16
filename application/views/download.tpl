<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Download MooTools</title>
	<meta name="description" content="" />
	<?php require($this->config('views_folder') . '/shared/css.tpl');?>
	<?php require($this->config('views_folder') . '/shared/meta.tpl');?>
	<link href="/assets/css/download.css" rel="stylesheet" type="text/css" />
</head>
<body>
	
<?php require($this->config('views_folder') . '/shared/header.tpl');?>

<div class="content">
	
	<h1>Download MooTools</h1>
	<p>There are many ways to grab MooTools for your website!</h2>
	
	<h2>MooTools on Google CDN</h2>
	<p>The best way to use MooTools is from Google CDN.  Copy and paste the following <code>SCRIPT</code> tag into your page:</p>
	
	<pre>&lt;script src="https://ajax.googleapis.com/ajax/libs/mootools/1.4.0/mootools-yui-compressed.js" type="text/javascript">&lt;/script&gt;</pre>
	
	<p>Google provides the MooTools build on CDN within a day or two of official release.</p>
	
	<h2>MooTools Builds</h2>
	<p>MooTools is available on this website with and without compatibility for previous versions:</p>
	
	<table class="download-table"><tbody> 
			<tr> 
				<th class="name">Download</th> 
				<th class="compression">Compression type</th> 
				<th class="size">Size</th> 
				<th class="last sha1">SHA1</th> 
			</tr> 
			<tr> 
				<td><strong><a href="/download/get/mootools-core-1.4.0-full-nocompat.js">MooTools Core 1.4.0 without compatibility</a></strong></td> 
				<td>Uncompressed</td> 
				<td class="size">142 kb</td> 
				<td class="last sha1">8f85285ad0e679c4d543bcdc45b47e61c059a708</td> 
			</tr> 
			<tr> 
				<td><a href="/download/get/mootools-core-1.4.0-full-compat.js">MooTools Core 1.4.0 with compatibility</a></td> 
				<td>Uncompressed</td> 
				<td class="size">151 kb</td> 
				<td class="last sha1">f5083d9e5b968a0c0cc1b945a58ed7f6ae390a0d</td> 
			</tr> 
			<tr class="last"> 
				<td><strong><a href="/download/get/mootools-core-1.4.0-full-nocompat-yc.js">MooTools Core 1.4.0 without compatibility</a></strong></td> 
				<td><a href="http://www.julienlecomte.net/yuicompressor/">YUI Compressor</a></td> 
				<td class="size">85 kb</td> 
				<td class="last sha1">0ce88a31a365a253b1d507d691bbf7ee58b1070d</td> 
			</tr> 
			<tr> 
				<td><a href="/download/get/mootools-core-1.4.0-full-compat-yc.js">MooTools Core 1.4.0 with compatibility</a></td> 
				<td><a href="http://www.julienlecomte.net/yuicompressor/">YUI Compressor</a></td> 
				<td class="size">91 kb</td> 
				<td class="last sha1">86f0df8662b511142dfc4e0ce9c81d805c8d7a7e</td> 
			</tr> 
		</tbody></table>
		
		<p>Want to create a custom build of the MooTools packages?  <a href="">Visit the Core Builder</a>.</p>
	
	<h2>Server-Side Download</h2>
	<p>This is a customized MooTools build without any component relative to browsers. Includes Class, Core and Native Extensions. It's specifically made for server-side environments such as <a href="http://nodejs.org/" rel="nofollow">node.js</a>, <a href="http://code.google.com/p/v8cgi/" rel="nofollow">v8cgi</a>, <a href="http://www.mozilla.org/rhino/" rel="nofollow">Rhino</a> or <a href="http://www.mozilla.org/js/spidermonkey/" rel="nofollow">SpiderMonkey</a>.</p> 
	
	<table class="download-table"><tbody> 
		<tr> 
			<th class="name">Download</th> 
			<th class="compression">Compression type</th> 
			<th class="size">Size</th> 
			<th class="last sha1">SHA1</th> 
		</tr> 
		<tr> 
			<td><a href="/download/get/mootools-core-1.4.0-server.js">MooTools 1.4.0 Server</a></td> 
			<td>Uncompressed</td> 
			<td class="size">26 kb</td> 
			<td class="last sha1">0df7ae2778554af3cc609169a4e874d63a267063</td> 
		</tr> 
	</tbody></table>
	
	<h2>MooTools on GitHub</h2>
	<p>
		All MooTools source code is available on GitHub, including existing releases and in-progress code.
	</p>
	<p><a href="https://github.com/mootools/mootools-core" class="button" rel="nofollow">MooTools on GitHub</a></p><br />
	
	<h2>Edge Build</h2>
	<p>If you want to get involved in testing and development, you can <a href="/nightly/build/mootools-core.js">download the edge version of the MooTools core</a>. This version is built after each commit from our git repository. Always include <code>MooTools.build</code> if you wish to <a href="https://github.com/mootools/mootools-core/issues" rel="nofollow">open up a ticket</a>.</p> 

	<p>You can also download an edge build of <a href="/nightly/build/mootools-more.js">MooTools More</a>. This file includes all plugins of MooTools More, which is usually not a good idea, so only use it for testing purposes.</p>
	
</div>

<?php require($this->config('views_folder') . '/shared/footer.tpl');?>
	
<?php require($this->config('views_folder') . '/shared/javascript.tpl');?>

</body>
</html>