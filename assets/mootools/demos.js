(function($){
	
	$(window).on('load', function(){
	
		$('.demo').handle(function(demo){
			var tabs = $('.demo-tabs li', demo);
			var content = $('.demo-content', demo);

			tabs.forEach(function(tab, index){
				mootools.$(tab).on('click', function(){
					tabs.removeClass('active');
					content.removeClass('active');
					$(this).addClass('active');
					$(content[index]).addClass('active');
				});
			});
		});
	
	});
	
})(mootools.$);