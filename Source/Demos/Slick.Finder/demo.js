
window.addEvent('domready', function(){

	var selector_input = $('selector'),
		searchDOM = $('searchDOM'),
		elements = $('seach_in_here');

	$('selector_list').getElements('a').addEvent('click', function(event){
		event.stop();
		selector_input.set('value', this.get('text'));
		searchDOM.fireEvent('click');
	});

	searchDOM.addEvent('click', function(){
		var selector = selector_input.get('value');
		elements.getElements(selector).highlight();
	});

});
