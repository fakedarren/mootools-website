
window.addEvent('domready', function(){

	var slider = $('slider');

	new Slider(slider, slider.getElement('.knob'), {
		range: [9, 35],
		initialStep: 14,
		onChange: function(value){
			if (value) $('fontSize').setStyle('font-size', value);
		}
	});


	var color = [0, 0, 0];

	$$('.advanced.slider').each(function(slider, i){
		new Slider(slider, slider.getElement('.knob'), {
			steps: 255,
			wheel: true,
			onChange: function(){
				color[i] = this.step;
				$('setColor').setStyle('color', color).set('text', color.rgbToHex());
			}
		});
	});

});
