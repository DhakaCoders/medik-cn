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
<svg style="display: none;">
  <symbol preserveAspectRatio="none" id="slideArrow" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.96191 16.9615L8.48367 17.4829L17.2251 8.74147L8.48367 0L7.96191 0.521383L16.182 8.74147L7.96191 16.9615Z" fill="#FFC283"/>
  <path d="M0.661401 17.4829L9.40287 8.74147L0.661401 0L0.139648 0.521383L8.35973 8.74147L0.139648 16.9615L0.661401 17.4829Z" fill="#FFC283"/>
  </symbol>
  <symbol preserveAspectRatio="none" id="slideArrow1" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1945 9.54523L1.89938 0.95155C1.73877 0.808909 1.53216 0.734373 1.32086 0.742837C1.10955 0.751301 0.90911 0.842142 0.759583 0.997206C0.610056 1.15227 0.52246 1.36014 0.514298 1.57927C0.506136 1.7984 0.57801 2.01266 0.715557 2.17922L8.32225 10.0676L0.933851 17.7297C0.777476 17.8928 0.689704 18.1135 0.689704 18.3435C0.689704 18.5735 0.777476 18.7942 0.933851 18.9574V18.9574C1.0119 19.039 1.10476 19.1037 1.20707 19.1479C1.30939 19.1921 1.41912 19.2149 1.52996 19.2149C1.6408 19.2149 1.75054 19.1921 1.85285 19.1479C1.95516 19.1037 2.04802 19.039 2.12607 18.9574L10.1945 10.5901C10.3278 10.4513 10.4027 10.2635 10.4027 10.0676C10.4027 9.8718 10.3278 9.68395 10.1945 9.54523V9.54523Z" fill="#FFC283"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3059 9.54523L12.0107 0.95155C11.8501 0.808909 11.6435 0.734373 11.4322 0.742837C11.2209 0.751301 11.0204 0.842142 10.8709 0.997206C10.7214 1.15227 10.6338 1.36014 10.6256 1.57927C10.6175 1.7984 10.6893 2.01266 10.8269 2.17922L18.4336 10.0676L11.0452 17.7297C10.8888 17.8928 10.801 18.1135 10.801 18.3435C10.801 18.5735 10.8888 18.7942 11.0452 18.9574C11.2025 19.1195 11.4153 19.2105 11.6371 19.2105C11.8589 19.2105 12.0717 19.1195 12.229 18.9574L20.3059 10.5901C20.4392 10.4513 20.514 10.2635 20.514 10.0676C20.514 9.8718 20.4392 9.68395 20.3059 9.54523V9.54523Z" fill="#FFC283"/>
  </symbol>
</svg>

<?php 
$arrow1 = '<svg preserveAspectRatio="none" id="slideArrow1" width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1945 9.54523L1.89938 0.95155C1.73877 0.808909 1.53216 0.734373 1.32086 0.742837C1.10955 0.751301 0.90911 0.842142 0.759583 0.997206C0.610056 1.15227 0.52246 1.36014 0.514298 1.57927C0.506136 1.7984 0.57801 2.01266 0.715557 2.17922L8.32225 10.0676L0.933851 17.7297C0.777476 17.8928 0.689704 18.1135 0.689704 18.3435C0.689704 18.5735 0.777476 18.7942 0.933851 18.9574V18.9574C1.0119 19.039 1.10476 19.1037 1.20707 19.1479C1.30939 19.1921 1.41912 19.2149 1.52996 19.2149C1.6408 19.2149 1.75054 19.1921 1.85285 19.1479C1.95516 19.1037 2.04802 19.039 2.12607 18.9574L10.1945 10.5901C10.3278 10.4513 10.4027 10.2635 10.4027 10.0676C10.4027 9.8718 10.3278 9.68395 10.1945 9.54523V9.54523Z" fill="#FFC283"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3059 9.54523L12.0107 0.95155C11.8501 0.808909 11.6435 0.734373 11.4322 0.742837C11.2209 0.751301 11.0204 0.842142 10.8709 0.997206C10.7214 1.15227 10.6338 1.36014 10.6256 1.57927C10.6175 1.7984 10.6893 2.01266 10.8269 2.17922L18.4336 10.0676L11.0452 17.7297C10.8888 17.8928 10.801 18.1135 10.801 18.3435C10.801 18.5735 10.8888 18.7942 11.0452 18.9574C11.2025 19.1195 11.4153 19.2105 11.6371 19.2105C11.8589 19.2105 12.0717 19.1195 12.229 18.9574L20.3059 10.5901C20.4392 10.4513 20.514 10.2635 20.514 10.0676C20.514 9.8718 20.4392 9.68395 20.3059 9.54523V9.54523Z" fill="#FFC283"/>
  </svg>';
?>

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
                <span><a><?php echo $hdaddress; ?></a></span> 
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