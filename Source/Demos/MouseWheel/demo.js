
window.addEvent('domready', function(){


	var up = $('up'),
		down = $('down'),
		arrows = $$(up, down),
		log;

	arrows.setStyle('opacity', 0.1);

	document.addEvent('mousewheel', function(event){

		/* Mousewheel UP */
		if (event.wheel > 0){
			up.setStyle('opacity', 1);
			down.setStyle('opacity', 0.1);
			log = 'up';
		}
		/* Mousewheel DOWN*/
		else if (event.wheel < 0){
			up.setStyle('opacity', 0.1);
			down.setStyle('opacity', 1);
			log = 'down';
		}

		$('log').set('html', log);

		var cls = function(){
			arrows.setStyle('opacity', 0.1);
		}.delay(100);
	});

});
