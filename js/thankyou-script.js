/**
 * Created by lauraorchard on 6/7/15.
 */
$(document).ready(function(){

var $form = $('#form');

$form.submit(function( evt ){
	evt.preventDefault();
	$.ajax(function(){
		url: "send.php",
			type: "POST",
			data: $form.serialize()
	}).done(function( phpSays ){
		if( phpSays == "OK" ){  // make your .php script return an "OK" string
			$('#thanks').show();
		}else{
			// DO something else if something went wrong
		}
	});
});
