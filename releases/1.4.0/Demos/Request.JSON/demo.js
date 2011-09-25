
// This is our JSON data which the server will return
// We will send this data to the server which our demo runner and jsfiddle will return
var data = {"previews":[
	{"name":"Blue Earth", "src":"earth-blue.jpg", "description":"A blue version of Earth.", "views":200},
	{"name":"User Profile", "src":"user.jpg", "description":"A chubby user guy.", "views":0},
	{"name":"Mouse", "src":"mouse.jpg", "description":"Standard mouse icon.", "views":99},
	{"name":"Gold Earth", "src":"earth-gold.jpg", "description":"A gold version of Earth.", "views":7855},
	{"name":"Page and Pencil", "src":"edit.jpg", "description":"A piece of paper and a pencil.", "views":5},
	{"name":"Speaker", "src":"speaker.jpg", "description":"A speaker.", "views":16},
	{"name":"Orange Monitor", "src":"monitor.jpg", "description":"A yellow, glowing monitor.", "views":355},
	{"name":"Software Box", "src":"package.jpg", "description":"A nice wrapped package in a box.", "views":23452},
	{"name":"FIRE!!!!", "src":"fire.jpg", "description":"Orange flame.", "views":395},
	{"name":"Screwdriver Paper", "src":"setting.jpg", "description":"An always useful screwdriver.", "views":42}
]};

window.addEvent('domready', function() {

	var images_path = 'demos/Request.JSON/images/';
	var gallery = $('gallery');

	var addImages = function(images){
		images.each(function(image){
			var el = new Element('div.preview'),
				name = new Element('h3', {'html': image.name}).inject(el),
				desc = new Element('span', {'html': image.description}).inject(name, 'after'),
				img = new Element('img', {'src': images_path + image.src}).inject(desc, 'after'),
				footer = new Element('span').inject(img, 'after');

			if (image.views > 50 && image.views < 250) footer.set({'html': 'popular', 'class': 'popular'});
			else if (image.views > 250) footer.set({'html': 'SUPERpopular', 'class': 'SUPERpopular'});
			else footer.set({'html': 'normal', 'class': 'normal'});

			el.inject(gallery);
		});
	};

	$('loadJSON').addEvent('click', function(e){
		e.stop();

		var request = new Request.JSON({

			url: '/echo/json/',

			onRequest: function(){
				gallery.set('text', 'Loading...');
			},

			onComplete: function(jsonObj) {
				gallery.empty();
				addImages(jsonObj.previews);
			},

			data: { // our demo runner and jsfiddle will return this exact data as a JSON string
				json: JSON.encode(data)
			}

		}).send();
	});

	$('clearJSON').addEvent('click', function(e){
		e.stop();
		gallery.empty();
	});

});





