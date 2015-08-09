(function($){
  $(function(){
    $('.button-collapse').sideNav();
	$('.hey').slider({height:500});
	$('.hello').slider({height:400, indicators:false,interval:8000});
	
	$('.modal-trigger').leanModal({
	      dismissible: true,
	      opacity: .8,
	      in_duration: 300,
	      out_duration: 200
    	}
  	);
  });
  $('span.headername').click(function () {
  	window.location.href='index.html';
  })
 $('.parallax').parallax();
 $('select').material_select();
 $('.coursemodal').click(function () {
 	$('#our_course').closeModal();
 })
})(jQuery);