
window.addEvent('domready', function(){

	// The elements used.
	var myForm = document.id('myForm'),
		myResult = document.id('myResult');

	// Labels over the inputs.
	myForm.getElements('[type=text], textarea').each(function(el){
		new OverText(el);
	});

	// Validation.
	new Form.Validator.Inline(myForm);

	// Ajax (integrates with the validator).
	new Form.Request(myForm, myResult, {
		requestOptions: {
			'spinnerTarget': myForm
		},
		extraData: { // This is just to make this example work.
			'html': 'Form sent.'
		}
	});

});
