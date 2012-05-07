# New MooTools website

This is an attempt to build a new MooTools website.

All this work is currently unofficial and to be treated as such. Just ideas.


## Requirements

* PHP 5.2.13+
* [SOLR](http://lucene.apache.org/solr/)
* [The MooTools Forge](https://github.com/fakedarren/mootools-forge)
* A symlink in the main site directory routing /forge to [*forge domain*]/web


## Setup

* You'll need two domains:
  * Main site (eg mootools-website.local)
  * 'more' site (eg mootools-more.local)
* Forge database (called forge_mooforge, or change the configuration)
  * There is a script to create the tables in the forge repo (Install folder)
* SOLR running
* You will need to run the /SOLR/loader scripts to populate the SOLR index


### Examples, for the nosy:

* [The test site](http://mootools.fakedarren.com/)
* [An example of a docs page](http://mootools.fakedarren.com/docs/Prime/Types/Array/forEach)
* [An example of versioning through URL, with support for legacy markdown docs](http://mootools.fakedarren.com/1.4/docs/Element/Element)
* [A microsite running off the same codebase, but with different structure / CSS etc](http://mootoolsmore.fakedarren.com/official/) (and the [microsite code](https://github.com/fakedarren/mootools-website/tree/master/more/example-plugin))
* [An example tutorial (and how to create one)](http://mootools.fakedarren.com/tutorial/creating-tutorials)