$(document).ready(function () {
	
	jQuery.validator.addMethod('lettersonly', function(value, element){
		return this.optional(element) || /^[a-z\s]+$/i.test(value);
	});
	
    $('#quote-form').validate({ 
        rules: {
			name: {
				required: true,
				lettersonly: true
			},
			email: {
				required: true,
				email: true
			},
			web: {
				url: true
			},
			bus_name: {
				lettersonly: true
			},
            'proposal[]': {
                required: true,
                maxlength: 6
            },
			message: {
				required: true
			}
        },
        messages: {
			name: {
				required: 'Please enter your full name.',
				lettersonly: 'Please enter characters only.'
			},
			email: {
				required: 'Please enter an email address.',
				email: 'Please enter a <em>valid</em> email address.'
			},
			bus_name: {
				lettersonly: 'Please enter characters only.'
			},
            'proposal[]': {
                required: "You must check at least 1 box.",
				maxlength: "Check no more than 6 boxes."
            },
			message: {
				required: 'Please write something about you or your business.'
			}
        },
		errorPlacement: function(error, element) {
			if(element.attr('name') === 'proposal[]') {
				error.appendTo('div#proposal');
			}else {
				element.before(error);
			}
		}
    });

});
