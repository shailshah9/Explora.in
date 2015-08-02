(function($){
  $(function(){
    $('.button-collapse').sideNav();
	$('.slider').slider({height:500});
	$('.modal-trigger').leanModal({
	      dismissible: true, // Modal can be dismissed by clicking outside of the modal
	      opacity: .8, // Opacity of modal background
	      in_duration: 300, // Transition in duration
	      out_duration: 200
    	}
  	);
  });
 $('.parallax').parallax();
 $('select').material_select();
})(jQuery);


