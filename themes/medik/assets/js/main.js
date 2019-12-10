(function($) {

$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});

	
 
/**
Responsive on 767px
*/
var windowWidth = $(window).width();

if($('.matchHeightCol').length){
    $('.matchHeightCol').matchHeight();
};


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
      prevArrow: $('.sersliderarrows .leftArrow'),
      nextArrow: $('.sersliderarrows .rightArrow'),
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
    });
}

if( $('.HmbtmGridSlider').length ){
    $('.HmbtmGridSlider').slick({
      pauseOnHover: false,
      autoplay: true,
      autoplaySpeed: 6000,
      dots: true,
      infinite: false,
      arrows:true,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      prevArrow: $('.hmgirdarrows .leftArrow'),
      nextArrow: $('.hmgirdarrows .rightArrow'),
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
*/
/*Google map */

// if( $('#ftr-map').length ){

// var latitude = $('#ftr-map').data('latitude');
// var longitude = $('#ftr-map').data('longitude');

// var myCenter= new google.maps.LatLng(latitude,  longitude);

// function initialize(){
//     var mapProp = {
//       center:myCenter,

//       mapTypeControl:true,
//       scrollwheel: false,

//       zoomControl: true,
//       disableDefaultUI: true,
//       zoom:7,
//       streetViewControl: false,
//       rotateControl: true,
//       mapTypeId:google.maps.MapTypeId.ROADMAP
//       };

//     var map= new google.maps.Map(document.getElementById('ftr-map'),mapProp);

//     var marker= new google.maps.Marker({
//       position:myCenter,
//         icon:'map-marker.png'
//       });
//     marker.setMap(map);
//   [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#0c0b0b"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#090909"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#d4e4eb"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#fef7f7"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#9b7f7f"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#fef7f7"}]}]
    
// }

// google.maps.event.addDomListener(window, 'load', initialize);


// }

/*Google map */

if( $('#ftr-map').length ){

var latitude = $('#ftr-map').data('latitude');
var longitude = $('#ftr-map').data('longitude');

var myCenter= new google.maps.LatLng(latitude,  longitude);

function initialize(){
    var mapProp = {
      center:myCenter,

      mapTypeControl:true,
      scrollwheel: false,

      zoomControl: true,
      disableDefaultUI: true,
      zoom:7,
      streetViewControl: false,
      rotateControl: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP
      };

    var map= new google.maps.Map(document.getElementById('ftr-map'),mapProp);

    var marker= new google.maps.Marker({
      position:myCenter,
        icon:'map-marker.png'
      });
    marker.setMap(map);
  [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#0c0b0b"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#090909"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#d4e4eb"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#fef7f7"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#9b7f7f"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#fef7f7"}]}]
    
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

//matchHeight
if($('.blog-grd').length){
    $('.blog-grd').matchHeight();
};




$('.blog-filter-btn button').click(function(){
    $('.blog-filter-btn button').removeClass("active");
    $(this).addClass("active");
});


//Shuffle filter

if($('.blog-grd-wrp').length){
    

var Shuffle = window.Shuffle;
var element = document.querySelector('.blog-grd-wrp');
//var sizer = element.querySelector('.my-sizer-element');

var shuffleInstance = new Shuffle(element, {
  itemSelector: '.blog-item',
  //sizer: sizer 
});
// shuffleInstance.filter('animal');
$("#all").on("click", function(){
   shuffleInstance.filter();
});
$("#btn-animal").on("click", function(){
   shuffleInstance.filter('animal');
});
$("#btn-city").on("click", function(){
   shuffleInstance.filter('city');
});
$("#btn-nature").on("click", function(){
   shuffleInstance.filter('nature');
});



}
    new WOW().init();

})(jQuery);









