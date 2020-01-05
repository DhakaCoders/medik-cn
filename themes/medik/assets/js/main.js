(function($) {
var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});

//matchHeight
if($('.matchHeightCol').length){
  $('.matchHeightCol').matchHeight();
};

if($('.blog-grd').length){
    $('.blog-grd').matchHeight();
}; 


$('.toggle-btn').on('click', function(){
  $(this).toggleClass('menu-expend');
  $('.toggle-bar ul').slideToggle(500);
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    openEffect  : 'none',
    closeEffect : 'none'
  });

}



/**
Responsive on 767px
*/

if (windowWidth > 768) {
  if($('.matchHeightCol').length){
    $('.matchHeightCol').matchHeight();
  };
}

if (windowWidth <= 991) {
  $('.nav-opener').on('click', function(){
    $('.xs-popup-menu').fadeIn(500);
    $('.xs-popup-menu').addClass('add-cls-show');
  });
  $('.xs-menu-close-btn-controller').on('click', function(){
    $('.xs-popup-menu').fadeOut(500);
    $('.xs-popup-menu').removeClass('add-cls-show');
  });

  $('.xs-popup-menu .main-nav > ul > li.menu-item-has-children > a').on('click', function(e){
    e.preventDefault();
    $(this).parent().find('ul.sub-menu').slideToggle(500);
    $(this).toggleClass('sub-menu-expend')
  });

}



/*Sliders*/


if( $('.main-slider').length ){
    $('.main-slider').slick({
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
      autoplay: false,
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

if( $('#contactMap').length ){
var latitude = $('#contactMap').data('latitude');
var longitude = $('#contactMap').data('longitude');
console.log(latitude);

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


//xs footer menu
$('.menu-item-has-children > a').on('click', function(e){
  e.preventDefault();
  $('.menu-item-has-children ul').slideToggle(500);
  $(this).toggleClass("sub-menu-expend");
});



//Shuffle filter

if($('.promo-tabs-wrp').length){
    var Shuffle = window.Shuffle;

    class Demo {
      constructor(element) {
        this.element = element;
        this.shuffle = new Shuffle(element, {
          itemSelector: '.filter-item'
        });

        // Log events.
        this.addShuffleEventListeners();
        this._activeFilters = [];
        this.addFilterButtons();
      }

      /**
       * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
       * for them like you normally would (with jQuery for example).
       */
      addShuffleEventListeners() {
        this.shuffle.on(Shuffle.EventType.LAYOUT, (data) => {
          console.log('layout. data:', data);
        });
        this.shuffle.on(Shuffle.EventType.REMOVED, (data) => {
          console.log('removed. data:', data);
        });
      }

      addFilterButtons() {
        const options = document.querySelector('.filter-options1');
        if (!options) {
          return;
        }
        
        const filterButtons = Array.from(options.children);
        const onClick = this._handleFilterClick.bind(this);
        filterButtons.forEach((button) => {
          button.addEventListener('click', onClick, false);
        });
      }

      _handleFilterClick(evt) {
        const btn = evt.currentTarget;
        const isActive = btn.classList.contains('active');
        const btnGroup = btn.getAttribute('data-group');
        
        this._removeActiveClassFromChildren(btn.parentNode);
        
        let filterGroup;
        if (isActive) {
          btn.classList.remove('active');
          filterGroup = Shuffle.ALL_ITEMS;
        } else {
          btn.classList.add('active');
          filterGroup = btnGroup;
        }
        
        this.shuffle.filter(filterGroup);
      }

      _removeActiveClassFromChildren(parent) {
        const { children } = parent;
        for (let i = children.length - 1; i >= 0; i--) {
          children[i].classList.remove('active');
        }
      }

    }

  document.addEventListener('DOMContentLoaded', () => {
    window.demo = new Demo(document.getElementById('grid1'));
  });
}



var windowWidth = $(window).width();

if (windowWidth >= 768) {
  if($('.blog-main-sec-wrp').length){
    var Shuffle = window.Shuffle;

    class Demo {
      constructor(element) {
        this.element = element;
        this.shuffle = new Shuffle(element, {
          itemSelector: '.blog-item'
        });

        // Log events.
        this.addShuffleEventListeners();
        this._activeFilters = [];
        this.addFilterButtons();
      }

      /**
       * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
       * for them like you normally would (with jQuery for example).
       */
      addShuffleEventListeners() {
        this.shuffle.on(Shuffle.EventType.LAYOUT, (data) => {
          console.log('layout. data:', data);
        });
        this.shuffle.on(Shuffle.EventType.REMOVED, (data) => {
          console.log('removed. data:', data);
        });
      }

      addFilterButtons() {
        const options = document.querySelector('.filter-options2');
        if (!options) {
          return;
        }
        
        const filterButtons = Array.from(options.children);
        const onClick = this._handleFilterClick.bind(this);
        filterButtons.forEach((button) => {
          button.addEventListener('click', onClick, false);
        });
      }

      _handleFilterClick(evt) {
        const btn = evt.currentTarget;
        const isActive = btn.classList.contains('active');
        const btnGroup = btn.getAttribute('data-group');
        
        this._removeActiveClassFromChildren(btn.parentNode);
        
        let filterGroup;
        if (isActive) {
          btn.classList.remove('active');
          filterGroup = Shuffle.ALL_ITEMS;
        } else {
          btn.classList.add('active');
          filterGroup = btnGroup;
        }
        
        this.shuffle.filter(filterGroup);
      }

      _removeActiveClassFromChildren(parent) {
        const { children } = parent;
        for (let i = children.length - 1; i >= 0; i--) {
          children[i].classList.remove('active');
        }
      }

    }
    document.addEventListener('DOMContentLoaded', () => {
      window.demo = new Demo(document.getElementById('grid'));
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
            

/*--
Form buttons wrap
cf7mls_next
cf7mls_back
wpcf7-submit

-*/
if( $('.vt-home-form-slider').length ){
    $('.vt-home-form-slider').slick({
      dots: true,
      autoplay: false,
      autoplaySpeed: 4000,
      infinite: true,
      speed: 1000,
      arrows:false,
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: true
    });
}


$('fieldset').each( function(){
   $(this).find('.cform-btns').append($(this).find('.cf7mls_back'));
  $(this).find('.cform-btns').append($(this).find('.cf7mls_next'));
  $(this).find('.cform-btns').append($(this).find('.wpcf7-submit'));
  //$(this).find('.cform-submmit-btn').prepend($(this).find('.wpcf7-submit'));

/*  $(this).find('.wpcf7-form-control.wpcf7-submit').before('<div class="">');
  $(this).find('.wpcf7-form-control.wpcf7-submit').after('</div>');*/
});


})(jQuery);