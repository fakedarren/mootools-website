
window.addEvent('domready', function(){

	// First we create a Fx.Morph instance which we will use to move the red box
	var target = $('target');
	var fx = new Fx.Morph(target, {
		duration: 1000,
		link: 'chain'
	});

	// The big gray erea
	var box = $('box');

	target.setStyles({
		top: box.getTop(),
		left: box.getLeft()
	});

	var selectTransition = $('fxTransition'),
		selectEase = $('fxEase'),
		durationInput = $('duration'),
		result = $('result');

	// Run the event if one of the select boxes has changed
	$$(selectEase, selectTransition).addEvent('change', function(){
		var transition = selectTransition.get('value');

		// This is where we set the transition option to the selected value
		if (transition == 'linear'){
			fx.options.transition = Fx.Transitions.linear;
			transition = 'Fx.Transitions.linear';
		} else {
			var ease = selectEase.get('value');
			fx.options.transition = Fx.Transitions[transition][ease];
			transition = 'Fx.Transitions.' + transition + '.' + ease;
		}
		result.set('html', transition);

	});

	// Run the above event on once on startup
	selectEase.fireEvent('change');

	// Set the duration option if it has changed
	durationInput.addEvent('keyup', function(){
		fx.options.duration = parseFloat(durationInput.get('value'));
	});

	// If you click anywhere on the gray box, the red box should morph to the clicked coordinates
	box.addEvent('mousedown', function(event){
		event.stop();
		fx.start({
			// The clicked coordinates are stored in the event.page property
			top: [event.page.y - 25],
			left: [event.page.x - 25]
		});
	});

});

