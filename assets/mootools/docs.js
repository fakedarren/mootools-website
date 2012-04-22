mootools.$(window).on('load', function domready(){

	mootools.$('.expand-this span, .collapse-this span').on('click', function(){
		var className = this[0].parentNode.className;
		this[0].parentNode.className = (className == 'expand-this' ? 'collapse-this' : 'expand-this');
		this[0].innerText = (className == 'expand-this' ? '-' : '+');
	});
	
});