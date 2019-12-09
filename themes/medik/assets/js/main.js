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
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
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






/*
  Proshanto
*/

/**
Slick slider
*/
if( $('.llevamosSlider').length ){
    $('.llevamosSlider').slick({
      pauseOnHover: false,
      autoplay: false,
      autoplaySpeed: 6000,
      dots: true,
      infinite: false,
      arrows:true,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      //prevArrow: $('.sersliderarrows .leftArrow'),
      //nextArrow: $('.sersliderarrows .rightArrow'),
    });
}


if( $('.siderbarProSlider').length ){
    $('.siderbarProSlider').slick({
      pauseOnHover: false,
      autoplay: false,
      autoplaySpeed: 6000,
      dots: true,
      infinite: false,
      arrows:false,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true
    });
}


if( $('.siderbarRecentPostSlider').length ){
    $('.siderbarRecentPostSlider').slick({
      pauseOnHover: false,
      autoplay: false,
      autoplaySpeed: 6000,
      dots: true,
      infinite: false,
      arrows:true,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      //prevArrow: $('.sersliderarrows .leftArrow'),
      //nextArrow: $('.sersliderarrows .rightArrow'),
    });
}

if( $('.serviciosPartnerSlider').length ){
    $('.serviciosPartnerSlider').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 4000,
      infinite: true,
      speed: 1000,
      arrows:true,
      slidesToShow: 5,
      slidesToScroll: 1
    });
}

if( $('.noticiasSlider').length ){
    $('.noticiasSlider').slick({
      pauseOnHover: false,
      autoplay: false,
      autoplaySpeed: 6000,
      dots: true,
      infinite: false,
      arrows:true,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      //prevArrow: $('.sersliderarrows .leftArrow'),
      //nextArrow: $('.sersliderarrows .rightArrow'),
    });
}
/**
accordion
*/
if ($('.servicios-accordion').length){
  $('.servicios-accordion .servicios-accordion-title').on('click', function(){
    $(this).parent().siblings().removeClass('active');
    $(this).next('.servicios-accordion-des').slideToggle();
    $(this).parent().siblings().find('.servicios-accordion-des').slideUp();
    $(this).parent().toggleClass('active');
  });
}

if ($('.servicios-siderbar-accordion').length){
  $('.servicios-siderbar-accordion .servicios-siderbar-accordion-title').on('click', function(){
    $(this).parent().siblings().removeClass('active');
    $(this).next('.servicios-siderbar-accordion-des').slideToggle();
    $(this).parent().siblings().find('.servicios-siderbar-accordion-des').slideUp();
    $(this).parent().toggleClass('active');
  });
}
    new WOW().init();

})(jQuery);









