
window.addEvent('domready', function(){

	new Drag.Move($('drag'), {

		container: $('container'),

		droppables: $$('.drop'),

		onEnter: function(element, droppable){
			droppable.setStyle('background', '#E79D35');
		},

		onLeave: function(element, droppable){
			droppable.setStyle('background', '#6B7B95');
		},

		onDrop: function(element, droppable){
			if (droppable) droppable.setStyle('background', '#C17878');
		}

	});

});
