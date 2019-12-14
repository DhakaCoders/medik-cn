(function($) {

$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});

	
 
/**
Responsive on 767px
*/
var windowWidth = $(window).width();

if (windowWidth > 768) {
  if($('.matchHeightCol').length){
    $('.matchHeightCol').matchHeight();
  };
}



// if (windowWidth <= 767) {

  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


/**
Responsive on 767px
*/
var windowWidth = $(window).width();
if (windowWidth <= 991) {
  $('header.header .opener-inner').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('header.header nav.main-nav > ul').slideToggle(500);
  });
  $('.opener-inner').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('nav.main-nav > ul').slideToggle(500);
  });

  $('nav.main-nav li.menu-item-has-children > a').on('click', function(e){
    e.preventDefault();
    $('.main-nav').toggleClass("color-changes-mobile");
    $(this).toggleClass('menu-expend-sub');
    $(this).parent().find('.sub-menu').slideToggle(500);
  });
}


// }


// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


//$("[data-fancybox]").fancybox({});



$(".fancybox").fancybox({
    openEffect  : 'none',
    closeEffect : 'none'
  });


//Shuffle filter

if($('.tabs-dsc-innr').length){
    

var Shuffle = window.Shuffle;
var element = document.querySelector('.tabs-dsc-innr ul');
//var sizer = element.querySelector('.my-sizer-element');

var shuffleInstance = new Shuffle(element, {
  itemSelector: '.tabs-dsc-innr ul li',
  //sizer: sizer 
});

$("#all").on("click", function(){
   shuffleInstance.filter();
});
$("#cat-one").on("click", function(){
   shuffleInstance.filter('blg-cat-1');
});
$("#cat-two").on("click", function(){
   shuffleInstance.filter('blg-cat-2');
});
$("#cat-three").on("click", function(){
   shuffleInstance.filter('blg-cat-3');
});
$("#cat-four").on("click", function(){
   shuffleInstance.filter('blg-cat-4');
});


}

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
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
      ]
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
      prevArrow: $('.sersliderarrows .leftArrow'),
      nextArrow: $('.sersliderarrows .rightArrow'),
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 767,
          settings: {
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
      ]
    });
}

if( $('.hm-laboratory-slider').length ){
    $('.hm-laboratory-slider').slick({
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
      prevArrow: $('.laboratoryarrows .leftArrow'),
      nextArrow: $('.laboratoryarrows .rightArrow'),
    });
}

if( $('#HmBrandLogoSlider').length ){
    $('#HmBrandLogoSlider').slick({
      pauseOnHover: false,
      autoplay: true,
      autoplaySpeed: 6000,
      dots: false,
      infinite: false,
      arrows:true,
      speed: 1000,
      slidesToShow: 5,
      slidesToScroll: 1,
      prevArrow: $('.HmBrandLogoarrows .leftArrow'),
      nextArrow: $('.HmBrandLogoarrows .rightArrow'),
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 991,
          settings: {
            dots: true,
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 767,
          settings: {
            dots: true,
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 575,
          settings: {
            dots: true,
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

if( $('.HmbtmGridSlider').length ){
    $('.HmbtmGridSlider').slick({
      autoplay: true,
      autoplaySpeed: 6000,
      dots: true,
      infinite: true,
      arrows:true,
      speed: 1000,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: $('.hmgirdarrows .leftArrow'),
      nextArrow: $('.hmgirdarrows .rightArrow'),
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 575,
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

/*
-----------------------
Start Contact Google Map ->> 
-----------------------


/*Google map */



if( $('#ftr-map').length ){
    var latitude = $('#ftr-map').data('lat');
    var longitude = $('#ftr-map').data('long');

    var myCenter= new google.maps.LatLng(latitude,  longitude);
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
    function initialize(){
        var mapProp = {
          center:myCenter,

          //mapTypeControl:false,
          scrollwheel: false,

          //zoomControl: false,
          //disableDefaultUI: true,
          zoom:15,
          streetViewControl: false,
          rotateControl: false,
          mapTypeId:google.maps.MapTypeId.ROADMAP,
          styles : [
              {
                  "featureType": "administrative.country",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "administrative.locality",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "administrative.locality",
                  "elementType": "labels",
                  "stylers": [
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "landscape",
                  "elementType": "all",
                  "stylers": [
                      {
                          "visibility": "on"
                      }
                  ]
              },
              {
                  "featureType": "landscape",
                  "elementType": "labels",
                  "stylers": [
                      {
                          "visibility": "on"
                      }
                  ]
              },
              {
                  "featureType": "poi",
                  "elementType": "all",
                  "stylers": [
                      {
                          "visibility": "off"
                      }
                  ]
              }
          ]
          };

        var map= new google.maps.Map(document.getElementById('ftr-map'),mapProp);

        var marker= new google.maps.Marker({
          position:myCenter,
          });
        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}

/*
-----------------------
Start Contact Google Map ->> 
-----------------------
*/
if( $('#contactMap').length ){
    var latitude = $('#contactMap').data('lat');
    var longitude = $('#contactMap').data('long');

    var myCenter= new google.maps.LatLng(latitude,  longitude);
    var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
    function initialize(){
        var mapProp = {
          center:myCenter,

          //mapTypeControl:false,
          scrollwheel: false,

          //zoomControl: false,
          //disableDefaultUI: true,
          zoom:15,
          streetViewControl: false,
          rotateControl: false,
          mapTypeId:google.maps.MapTypeId.ROADMAP,
          styles : [
              {
                  "featureType": "administrative.country",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "administrative.locality",
                  "elementType": "geometry",
                  "stylers": [
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "administrative.locality",
                  "elementType": "labels",
                  "stylers": [
                      {
                          "visibility": "off"
                      }
                  ]
              },
              {
                  "featureType": "landscape",
                  "elementType": "all",
                  "stylers": [
                      {
                          "visibility": "on"
                      }
                  ]
              },
              {
                  "featureType": "landscape",
                  "elementType": "labels",
                  "stylers": [
                      {
                          "visibility": "on"
                      }
                  ]
              },
              {
                  "featureType": "poi",
                  "elementType": "all",
                  "stylers": [
                      {
                          "visibility": "off"
                      }
                  ]
              }
          ]
          };

        var map= new google.maps.Map(document.getElementById('contactMap'),mapProp);

        var marker= new google.maps.Marker({
          position:myCenter,
          });
        marker.setMap(map);
    }

    google.maps.event.addDomListener(window, 'load', initialize);
}



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
      arrows: true,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      prevArrow: $('.llevamosSlider-arrows .leftArrow'),
      nextArrow: $('.llevamosSlider-arrows .rightArrow')
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
      prevArrow: $('.recentPost-sliderarrows .leftArrow'),
      nextArrow: $('.recentPost-sliderarrows .rightArrow'),
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
      slidesToScroll: 1,
      prevArrow: $('.serviciosPartnerSlider-arrows .leftArrow'),
      nextArrow: $('.serviciosPartnerSlider-arrows .rightArrow'),
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows:false,
            dots: true
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows:false,
            dots: true
          }
        },
        {
          breakpoint: 540,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows:false,
            dots: true
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows:false,
            dots: true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

if( $('.noticiasSlider').length ){
    $('.noticiasSlider').slick({
      dots: true,
      autoplay: false,
      autoplaySpeed: 4000,
      infinite: true,
      speed: 1000,
      arrows:true,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: $('.noticiasSlider-arrows .leftArrow'),
      nextArrow: $('.noticiasSlider-arrows .rightArrow'),
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
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

//go-top
$('.footer-wrap .go-top-btn').on('click', function(e){
  e.preventDefault();
  $('html, body').animate( {scrollTop:0}, '500' );
});


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

//matchHeight
if($('.blog-grd').length){
    $('.blog-grd').matchHeight();
};



//xs footer menu
$('.menu-item-has-children > a').on('click', function(e){
  e.preventDefault();
  $('.menu-item-has-children ul').slideToggle(500);
  $(this).toggleClass("sub-menu-expend");
});



//filter-btn
$('.blog-filter-btn button').click(function(){
    $('.blog-filter-btn button').removeClass("active");
    $(this).addClass("active");
});


//Shuffle filter

// if($('.blog-grd-wrp').length){
    



// }


var windowWidth = $(window).width();

if (windowWidth >= 768) {
  if($('.blog-grd-wrp').length){
    var Shuffle = window.Shuffle;
    var element = document.querySelector('.blog-grd-wrp ul');
    //var sizer = element.querySelector('.my-sizer-element');

    var shuffleInstance = new Shuffle(element, {
      itemSelector: '.blog-item',
      //sizer: sizer 
    });

    $("#all").on("click", function(){
       shuffleInstance.filter();
    });
    $("#cat-one").on("click", function(){
       shuffleInstance.filter('blg-cat-1');
    });
    $("#cat-two").on("click", function(){
       shuffleInstance.filter('blg-cat-2');
    });
    $("#cat-three").on("click", function(){
       shuffleInstance.filter('blg-cat-3');
    });
    $("#cat-four").on("click", function(){
       shuffleInstance.filter('blg-cat-4');
    });
  }
} else{
  //.blog-grd-wrp ul

  if( $('.blog-grd-wrp').length ){
    $('.blogGrdSlider').slick({
      dots: true,
      autoplay: false,
      autoplaySpeed: 4000,
      infinite: true,
      speed: 1000,
      arrows:true,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: $('.blogGrdSlider-arrows .leftArrow'),
      nextArrow: $('.blogGrdSlider-arrows .rightArrow'),
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
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
}
            



  new WOW().init();

})(jQuery);









