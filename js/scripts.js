$(document).ready(function(){

	/*jQuery fadeIn*/
	$('main').hide(1000).fadeIn(3000);
	$('header').hide(1000).fadeIn(3000);
	$('footer').hide(1000).fadeIn(3000);

	/*jQuery slideToggle*/
	$("#question-1").click(function(){
		$("#answer-1").slideToggle("slow");
	$("#question-2").click(function(){
		$("#answer-2").slideToggle("slow");
	$("#question-3").click(function(){
		$("#answer-3").slideToggle("slow");
	});

});
