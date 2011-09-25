
window.addEvent('domready', function(){

	// First list, using CSS styles in the JavaScript
	var list = $$('#idList LI');

	list.set('morph', {
		duration: 200
	});

	list.addEvents({

		mouseenter: function(){
			// this refers to the element in an event
			this.morph({
				'background-color': '#666',
				'color': '#FF8',
				'margin-left': 5
			});
		},

		mouseleave: function(){
			// this refers to the element in an event
			this.morph({
				'background-color': '#333',
				'color': '#888',
				'margin-left': 0
			});
		}

	});

	// Morphing the list with CSS selectors
	$$('#idList2 LI').each(function(el){
		el.set('morph', {
			duration: 200
		}).addEvents({
			// Using Function:pass, which is a shorter alternative for
			//     function(){
			//         el.morph('.hover');
			//     }
			mouseenter: el.morph.pass('.hover', el),
			mouseleave: el.morph.pass('.default', el)
		});
	});

});
