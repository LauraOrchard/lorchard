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
			// each rule starts with the inputs name (NOT id)
			textName1: {
				maxlength: 75,
				required: true
			},
			email1: {
				maxlength: 140,
				required: true
			},
			txtareaComments: {
				maxlength: 140,
				required: true
			}
		},

		// error messages to display to the end user
		messages: {
			textName1: {
				maxlength: "Name is too long",
				required: "Please shorted your entry"
			},
			email1: {
				maxlength: "Email address is too long.",
				required: "Please enter valid email address"
			},
			txtareaComments: {
				maxlength: "Your comment is too long.",
				required: "Please enter up to 500 characters"
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
				// success is an event that happens when the server replies
				success: function(ajaxOutput) {
					// clear the output area's formatting
					$("#outputArea").css("display", "");
					// write the server's reply to the output area
					$("#outputArea").html(ajaxOutput);


					// reset the form if it was successful
					// this makes it easier to reuse the form again
					if($(".alert-success").length >= 1) {
						$(form)[0].reset();
					}
				}
			});
		}
	});
});
