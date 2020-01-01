<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<?php 
  $logoObj = get_field('logo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }

  $spacialArry = array(".", "/", "+", "-", " ", ")", "(");$replaceArray = '';
  $adres = get_field('address', 'options');
  $hdaddress = $adres['address_header'];
  $gmapsurl = get_field('google_maps', 'options');
  $telefoon = get_field('telephone', 'options');
  $hdtelephone = $telefoon['telephone_header'];

  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
?>
<header class="header">
  <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="hdr-inner clearfix">
            <div class="hdr-lft-con">
              <div class="logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
            </div>
            <div class="hdr-rgt-con clearfix">
              <div class="hdr-top-contact clearfix">
                <div class="hdr-contact">
                  <h6 class="hide-sm"><?php _e('informes y citas', THEME_NAME); ?></h6>
                  <div class="contact-info">
                  <?php 
                    if($hdtelephone): 
                      foreach($hdtelephone as $hdphone):
                        $trimphone = trim(str_replace($spacialArry, $replaceArray, $hdphone['telephone']));
                  ?>
                  <a href="tel:<?php echo $trimphone; ?>"><?php echo $hdphone['telephone']; ?></a>
                    <?php endforeach; endif; ?>
                  </div>
                  <span><img src="<?php echo THEME_URI; ?>/assets/images/hdr-phone-icon.png"></span>
                </div>
                <div class="hdr-address-innr">
                  <div class="hdr-address">
                <?php if( !empty( $hdaddress ) ): ?>
                <span><a href="<?php echo $gmaplink; ?>"><?php echo $hdaddress; ?></a></span> 
                <a href="<?php echo $gmaplink; ?>" target="_blank">(Da Clic Aquí Para Llegar Con Google Maps)</a>
                <?php  endif;  ?>
                  </div> 
                </div>
              </div> 
              <nav class="main-nav hide-sm">
                <?php 
                    $cmenuOptions = array( 
                        'theme_location' => 'cbv_main_menu', 
                        'menu_class' => 'clearfix ulc',
                        'container' => 'cmnav',
                        'container_class' => 'cmainnav'
                      );
                    wp_nav_menu( $cmenuOptions ); 
                  ?>
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
      <?php 
        $cmenuOptions = array( 
            'theme_location' => 'cbv_main_menu', 
            'menu_class' => 'clearfix ulc',
            'container' => 'cmnav',
            'container_class' => 'cmainnav'
          );
        wp_nav_menu( $cmenuOptions ); 
      ?>
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