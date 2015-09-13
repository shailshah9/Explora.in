(function($){
  $(function(){
    $('.button-collapse').sideNav();
	$('.hi').slider({height:500, indicators:false});
	//$('.history').slider({height:550, indicators:false});
	$('.modal-trigger').leanModal({
	      dismissible: true,
	      opacity: .8,
	      in_duration: 300,
	      out_duration: 200
    	}
  	);
  });
 $('.parallax').parallax();
 $('select').material_select();
 $('.coursemodal').click(function () {
 	$('#our_course').closeModal();
 })
 $('.contactmodal').click(function () {
 	$('#contact').closeModal();
 })
})(jQuery);