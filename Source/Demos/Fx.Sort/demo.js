
window.addEvent('domready', function(){

	var container = document.id('container'),	//cache sort container
		queuedElems = [];						//used to track what elements to swap on click

	var sorter = new Fx.Sort($$('#container .sort'), {
		duration: document.id('duration').get('value'),
		transition: Fx.Transitions[document.id('fxTransition').value][document.id('fxEase').value],
		mode: 'vertical',
		onComplete: function(){
			displayDOM();	// update the UI DOM visual on each sort
		}
	});

	displayDOM();	//update the UI DOM visual on domready

	//sort based on text of element that was clicked (forward, backward, reverse)
	$$('.fireSort').addEvent('click', function(event){
		event.stop();
		sorter[this.get('text')]();
	});

	document.id('order').addEvent('click', function(event){
		event.stop();
		alert(sorter.currentOrder);
	});

	document.id('reorderDOM').addEvent('click', function(event){
		event.stop();
		sorter.rearrangeDOM();
		displayDOM();	//onComplete isn't fire so update UI DOM visual manually
	});

	document.id('mode').addEvent('change', function(){
		sorter.rearrangeDOM();	//rearrange DOM first so that elements stack properly
		sorter.options.mode = (this.checked) ? 'vertical' : 'horizontal';
		container.toggleClass('container');
		displayDOM();	//onComplete isn't fire so update UI DOM visual manually
	});

	document.id('swap').addEvent('click', function(event){
		event.stop();
		var elems = container.getChildren();
		sorter.swap(elems[0], elems[elems.length - 1]);
	});

	document.id('sort').addEvent('click', function(event){
		event.stop();
		sorter.sort([1, 3, 0, 2, 4]);
	});

	$$('#fxTransition, #fxEase').addEvent('change', function(){
		var transition = document.id('fxTransition').get('value'),
			easing = document.id('fxEase').get('value');
		sorter.options.transition = Fx.Transitions[transition][easing];
	});

	document.id('duration').addEvent('keyup', function(){
		sorter.options.duration = this.value.toInt();
	});

	//allows users to click on elements to swap their positions
	$$('.sort').addEvent('click', function(){
		if (queuedElems.length > 0) sorter.swap(queuedElems.pop(), this);
		else queuedElems.push(this);
	});

	//helper function, displays the DOM visually to see how the sort effects it
	function displayDOM(){
		var str = '';
		container.getChildren().each(function(item){
			str += '<div style="' + item.style.cssText + '">' + item.get('text') + '</div>\n';
		});
		document.id('output').set('text',  str);
	}
});
