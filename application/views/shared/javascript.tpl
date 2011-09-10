<script src="/assets/javascript/mootools.js"></script>
<script>
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
</script>