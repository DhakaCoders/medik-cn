(function($) {

$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	

/**
Responsive on 767px
*/
var windowWidth = $(window).width();
// if (windowWidth <= 767) {

  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }


// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


//$("[data-fancybox]").fancybox({});


if( $('.main-slider').length ){
    $('.main-slider').slick({
      pauseOnHover: false,
      autoplay: false,
      autoplaySpeed: 6000,
      dots: false,
      infinite: false,
      arrows:true,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      prevArrow: $('.mainsliderarrows .leftArrow'),
      nextArrow: $('.mainsliderarrows .rightArrow'),
    });
}

if( $('.hm-service-slider').length ){
    $('.hm-service-slider').slick({
      pauseOnHover: false,
      autoplay: false,
      autoplaySpeed: 6000,
      dots: true,
      infinite: false,
      arrows:true,
      speed: 1000,
      slidesToShow: 3,
      slidesToScroll: 3,
      fade: true,
      prevArrow: $('.sersliderarrows .leftArrow'),
      nextArrow: $('.sersliderarrows .rightArrow'),
    });
}


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

    new WOW().init();

})(jQuery);









