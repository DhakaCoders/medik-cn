<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?php echo THEME_URI; ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo THEME_URI; ?>/assets/css/bootstrap-select.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fonts/font-awesome/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fancybox3/dist/jquery.fancybox.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/slick.slider/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/slick.slider/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/fonts/custom-fonts.css">
	<link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo THEME_URI; ?>/assets/css/responsive.css">
  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header hm-header">
  <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="hdr-inner clearfix">
            <div class="hdr-lft-con">
              <div class="logo">
                <a href="#">
                  <img src="<?php echo THEME_URI; ?>/assets/images/logo.png">
                </a>
              </div>
            </div>
            <div class="hdr-rgt-con clearfix">
              <div class="hdr-top-contact clearfix">
                <div class="hdr-contact">
                  <h6 class="hide-sm">informes y citas</h6>
                  <div class="contact-info">
                    <a href="tel:(55) 5233-6007"> (55) 5233-6007</a>
                    <a href="tel:(55) 5233-2312"> (55) 5233-2312</a>
                  </div>
                  <span><img src="<?php echo THEME_URI; ?>/assets/images/hdr-phone-icon.png"></span>
                </div>
                <div class="hdr-address-innr">
                  <div class="hdr-address">
                    <span><a href="#">Sófocles 115, Polanco, Polanco II Secc, <br> 11550 Ciudad de México, CDMX</a></span>
                    <a href="#">(Da Clic Aquí Para Llegar Con Google Maps)</a>
                  </div> 
                </div>
              </div> 
              <nav class="main-nav hide-sm">
                <ul class="clearfix">
                  <li class="current-menu-item"><a href="#">inicio</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">servicios</a>
                    <ul class="sub-menu">
                      <li><a href="#">Sub Menu</a></li>
                      <li><a href="#">Sub Menu</a></li>
                      <li><a href="#">Sub Menu</a></li>
                      <li><a href="#">Sub Menu</a></li>
                      <li><a href="#">Sub Menu</a></li>
                      <li><a href="#">Sub Menu</a></li>
                      <li><a href="#">Sub Menu</a></li>
                    </ul>
                  </li>
                  <li><a href="#">citas</a></li>
                  <li><a href="#">promociones </a></li>
                  <li><a href="#">blog</a></li>
                  <li><a href="#">contacto</a></li>                            
                </ul>
              </nav>
             </div>
            </div>
          </div>
        </div>
      </div>
  </div>
<div class="show-sm">
  <div class="xs-popup-menu">
    <div class="xs-menu-close-btn-controller">
       <span><img src="<?php echo THEME_URI; ?>/assets/images/close-icon.png"></span>
    </div>
    <nav class="xs-main-nav">
      <ul class="clearfix">
        <li class="current-menu-item"><a href="#">inicio</a></li>
        <li class="menu-item-has-children">
          <a href="#">servicios</a>
          <ul class="sub-menu">
            <li><a href="#">Sub Menu</a></li>
            <li><a href="#">Sub Menu</a></li>
            <li><a href="#">Sub Menu</a></li>
            <li><a href="#">Sub Menu</a></li>
            <li><a href="#">Sub Menu</a></li>
            <li><a href="#">Sub Menu</a></li>
            <li><a href="#">Sub Menu</a></li>
          </ul>
        </li>
        <li><a href="#">citas</a></li>
        <li><a href="#">promociones </a></li>
        <li><a href="#">blog</a></li>
        <li><a href="#">contacto</a></li>                            
      </ul>
    </nav>
  </div>
</div>
<div class="nav-opener show-sm">
  <div class="opener-inner">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
</div>
</header><!-- End of .header -->