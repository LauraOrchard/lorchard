/**
 * Created by lauraorchard on 6/7/15.
 */
$(document).ready(function(){

	// tell the validator to validate this form
	$("#contact-form").validate({
		// setup the formatting for the errors
		errorClass: "label-danger",
		errorLabelContainer: "#outputArea",
		wrapper: "li",

		// rules define what is good/bad input
		rules: {
			txtName1: {
				required: true
			},
			email1: {
				required: true
			},
			txtComments: {
				required: true
			}
		},
		//error messages to display to the end user
		messages: {
			txtName1: {
				required: "Please include your name."
			},
			email1: {
				required: "Add your email address."
			},
			txtComments: {
				required: "Please include a message."
			}
		},

		// setup an AJAX call to submit the form without reloading
		submitHandler: function(form) {
			$(form).ajaxSubmit({
				// GET or POST
				type: "POST",
				// where to submit data
				url: "/controllers/email.php",
				// TL; DR: reformat POST data
				data: $(form).serialize(),
				target: "#outputArea",
				// success is an event that happens when the server replies
				success: function(ajaxOutput) {
						//clear the form
						$(form).resetForm();
					}
				});
			return(false);
		}

	});
});