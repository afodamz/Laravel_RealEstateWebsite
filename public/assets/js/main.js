/* =================================
------------------------------------
	LERAMIZ - Landing Page Template
	Version: 1.0
 ------------------------------------ 
 ====================================*/


'use strict';


var window_w = $(window).innerWidth();


// $(window).on('load', function() {
// 	------------------
// 		Preloder
// 	--------------------
// 	$(".loader").fadeOut();
// 	$("#preloder").delay(400).fadeOut("slow");

// });





(function($) {


	// $(window).scroll(function(){
 //       var top = $(window).scrollTop();
 //       if(top>=100){
 //           $(".header-section").addClass('scrolled');
 //       }
 //        else{
 //             $(".header-section").removeClass('scrolled');
 //        }
 //    });

	/*------------------
		Navigation
	--------------------*/
	// $('.nav-switch').on('click', function(event) {
	// 	$('.main-menu').slideToggle(200);
	// 	event.preventDefault();
	// });


	/*------------------
		Background set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(''assets'+bg+')');
	});

	// $('.set-bg-prop').each(function() {
	// 	var bg = $(this).data('setbg');
	// 	$(this).css('background-image', 'url(''assets'+bg+')');
	// });



	$('.gallery').find('.gallery-item').each(function() {
		var pi_height1 = $(this).outerWidth(true),
		pi_height2 = pi_height1/2;
		
		if($(this).hasClass('grid-long') && window_w > 991){
			$(this).css('height', pi_height2);
		}else{
			$(this).css('height', Math.abs(pi_height1));
		}
	});



	


})(jQuery);

