(function($){
  $(function(){
    $('.button-collapse').sideNav();
	$('.slider').slider({height:500});
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
})(jQuery);