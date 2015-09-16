(function($){
  $(function(){
    $('.button-collapse').sideNav();
	$('.hi').slider({height:500, indicators:false});
	//$('.history').slider({height:550, indicators:false});
	
  });
 $('.parallax').parallax();
 $('select').material_select();
 $('.coursemodal').click(function () {
 	$('#our_course').closeModal();
 })
})(jQuery);