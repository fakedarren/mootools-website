
window.addEvent('domready', function(){

	$$('#draggables DIV').makeDraggable({

		droppables: $$('#droppables DIV'),

		onEnter: function(draggable, droppable){
			droppable.setStyle('background', '#E79D35');
		},

		onLeave: function(draggable, droppable){
			droppable.setStyle('background', '#6B7B95');
		},

		onDrop: function(draggable, droppable){
			if (droppable){
				draggable.destroy();
				droppable.morph({
					'height': droppable.getStyle('height').toInt() + 30,
					'background-color' : ['#E79D35', '#6B7B95']
				});
			} else {
				draggable.setStyle('background', '#C17878');
			}
		}

	});

});
