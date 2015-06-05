$(document).ready(function(){

	/*jQuery fadeIn*/
	$('main').hide(1000).fadeIn(3000);
	$('navbar').hide(1000).fadeIn(3000);
	$('footer').hide(1000).fadeIn(3000);

	/*jQuery slideToggle*/
	$("#question").click(function(){
		$("#answer").slideToggle("slow");
	});

});
