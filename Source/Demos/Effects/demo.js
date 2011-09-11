
window.addEvent('domready', function() {

	$$('.simple-fx LI').addEvent('click', function(){

		var property = $(this).get('data-property');
		var to = $(this).get('data-value');

		$('element').tween(property, to);

	});


	$('morph-1').addEvent('click', function(){
		$('element').morph({
			'background-color': '#F9F9F9',
			'color': '#78BA91',
			'width': '200px'
		});
	});

	$('morph-2').addEvent('click', function(){
		$('element').morph({
			'background-color': '#E79D35',
			'border-width': '1px',
			'border-style': 'solid',
			'border-color': '#000000',
			'color': '#fff',
			'height': '45px',
			'opacity': '0.6',
			'width': '100px'
		});
	});

	$('morph-3').addEvent('click', function(){
		$('element').morph('.myClass')
	});


	$('reset').addEvent('click', function(){
		$('element').erase('style');
	});

});
