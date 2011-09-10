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

$$('.inline-demo').makeTabs();


$$('.inline-demo .demo').each(function(item, index){
	item.set('id', 'editor' + index);
	CodeMirror.fromTextArea('editor' + index, {
	    parserfile: "parsecss.js",
	    stylesheet: "/assets/codemirror/css/csscolors.css",
		height: "dynamic",
	    path: "/assets/codemirror/js/",
	    autoMatchParens: true,
		readOnly: true
	});
});