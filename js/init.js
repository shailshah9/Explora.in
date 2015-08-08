(function($){
  $(function(){
    $('.button-collapse').sideNav();
	$('.slider').slider({height:500});
	$('#myslider').slider({height:300});
	
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
})(jQuery);