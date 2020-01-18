$(document).ready(function() {
  //duotone
  $('.green img').duotone({
    gradientMap: '#16D6CC, #FFFFFF'
  });
  $('.pink img').duotone({
    gradientMap: '#FF3250, #FFFFFF'
  });
0
  //slick slider
  $('.news-summary .thumbs').slick({
  	// autoplay: true,
	  autoplaySpeed: 2000,
	  dots: true,
	  arrows: false,
	  // appendDots: $('Element'),
  });

  //mobile nav
  $('.nav-hamburger').click(function(){
    $('.mobile ul.menu').slideDown('fast');
    $('.mobile .nav-hamburger').hide();
    $('.mobile .nav-close').show();
  });

  $('.nav-close').click(function(){
    $('.mobile ul.menu').slideUp('fast');
    $('.mobile .nav-hamburger').show();
    $('.mobile .nav-close').hide();
  });
});
