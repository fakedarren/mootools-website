Getting Started with MooTools
=============================

Starting to use MooTools is super-simple. In this tutorial, we'll run through how to include MooTools on the page ready for you to write some code.

Getting a copy of MooTools
--------------------------

There are actually a few ways to do this, but the easiest way is link to the Google CDN version. Google host a copy of MooTools on their servers that anyone can link to.

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Hello World</title>
        <!-- Here is where we include MooTools -->
        <script src="http://google/ajax/libs/whatever the link is"></script>
    </head>

Awesome! We now have a copy of MooTools loaded on our page and can begin coding right away.

> ### Why linking to the Google version is a Good Thing™
> 
> Because lots of people link to this version, there is a chance that a visitor to your site has already visited another website that includes MooTools in the same way.
> If they have, then they will already have a copy of MooTools in their browser's cache, and they will not have to download another copy.
>
> You can find out more about the Google CDN here. (LINK TO DOCUMENTATION ABOUT THIS)

Start coding!
-------------

Now you have a copy of MooTools included on the page, you can start coding. Most of the time, you should wrap your code in something called the *domready* event. This makes sure the page is loaded and everything is ready for the code to run.

	<!DOCTYPE html>
	<html lang="en">
	<head>
    	<meta charset="utf-8">
    	<title>Hello World</title>
    	<!-- Here is where we include MooTools -->
    	<script src="http://google/ajax/libs/whatever the link is"></script>
		<!-- Here is your code -->
		<script>
			window.addEvent('domready', function(){
				alert('MooTools FTW!');
			});
		</script>
	</head>

Easy!

-------------------------

-------------------------

Downloading your own copy of MooTools
-------------------------------------

If you want to have your own copy of MooTools on your own server, that's easy too.

### Grab the whole thing

If you want to download the whole thing, then all you have to do is visit [our download page](http://mootools.net/download) and choose the version you want. There are two flavours - one which is compressed, so your site loads quicker, and an uncompressed version, which will help you to debug.

There are usually versions with compatibility layers in too - so if you want to upgrade your old MooTools 1.2 site but still use the latest version, then you can find these versions here.

### Build your own version

One of the awesome things about MooTools is that it is modular - made of little pieces - which means if you want, you can choose just the bits you need, to end up with a really tiny download, or to use it as a plugin with other frameworks.

To do this takes a little bit more effort but is still super-easy. Go to [the download builder page](http://mootools.net/download/core) and you'll see our builder.

IMAGE OF BUILDER

All you need to do is check the boxes for the bits you want. If you need to include extra things that the bits you want depend upon (for instance, you need to have Class to use Fx) it will know and automatically select them for you.

> ### How do I know what modules my copy of MooTools includes?
> 
> At the top of every custom build, there will be a comment. Included is a link back to this page with a unique key, that tells the builder what components are included.

### See also

* [Google-hosted MooTools best practices](http://foo.com) (LINK TO DOCUMENTATION ABOUT THIS)
* [Building MooTools with RequireJS](http://foo.com) (LINK TO DOCUMENTATION ABOUT THIS)
* [MooTools Packager](http://foo.com) (LINK TO DOCUMENTATION ABOUT THIS)