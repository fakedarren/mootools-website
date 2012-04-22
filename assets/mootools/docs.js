mootools.$(window).on('load', function domready(){

	mootools.$('.expand span').on('click', function(){
		var className = this[0].parentNode.className;
		this[0].parentNode.className = (className == 'expand' ? 'collapsed' : 'expand');
		this[0].innerText = (className == 'expand' ? '-' : '+');
	});
	
});