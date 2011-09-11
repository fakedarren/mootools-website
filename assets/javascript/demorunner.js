Element.implement({

    makeTabs: function() {

        var tabs = this.getElements('> H2');
        var content = this.getElements('.content');

        tabs.addEvent('click', function() {
            tabs.removeClass('selected');
            this.addClass('selected');
            content.removeClass('selected');
            this.getNext('.content').addClass('selected');
        });

        return this;
    }

});

(function(){
	var codemirrorOptions = {
		js: {
			parserfile: ["tokenizejavascript.js", "parsejavascript.js"],
		    stylesheet: "/assets/codemirror/css/jscolors.css",
			height: "dynamic",
		    path: "/assets/codemirror/js/",
		    autoMatchParens: true,
			readOnly: true
		},
		css: {			
		    parserfile: "parsecss.js",
		    stylesheet: "/assets/codemirror/css/csscolors.css",
			height: "dynamic",
		    path: "/assets/codemirror/js/",
		    autoMatchParens: true,
			readOnly: true
		},
		html: {
		    parserfile: ["parsexml.js", "parsecss.js", "tokenizejavascript.js", "parsejavascript.js", "parsehtmlmixed.js"],
			stylesheet: ["/assets/codemirror/css/xmlcolors.css", "/assets/codemirror/css/jscolors.css", "/assets/codemirror/css/csscolors.css"],
			height: "dynamic",
		    path: "/assets/codemirror/js/",
		    autoMatchParens: true,
			readOnly: true
		}
	};
	$$('.inline-demo').makeTabs();

	$$('.inline-demo .demo').each(function(item, index){
		if (!item.hasClass('results')){
			item.set('id', 'editor' + index);
		
			var type = 'js';
			if (item.hasClass('css')) type = 'css';
			else if (item.hasClass('html')) type = 'html';
		
			CodeMirror.fromTextArea('editor' + index, codemirrorOptions[type]);
		}
	});
	
	$$('.inline-demo').each(function(demo){
		var script = demo.getElement('.script').get('value');
		demo.getElement('button').addEvent('click', function(){
			Browser.exec(script);
		});
	});
})();

