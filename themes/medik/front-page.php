<?php get_header(); 

$banner = get_field('slidesec', HOMEID);
if($banner):
  $slides = $banner['slide'];

$arrow1 = '<svg preserveAspectRatio="none" id="slideArrow1" width="21" height="20" viewBox="0 0 21 20" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1945 9.54523L1.89938 0.95155C1.73877 0.808909 1.53216 0.734373 1.32086 0.742837C1.10955 0.751301 0.90911 0.842142 0.759583 0.997206C0.610056 1.15227 0.52246 1.36014 0.514298 1.57927C0.506136 1.7984 0.57801 2.01266 0.715557 2.17922L8.32225 10.0676L0.933851 17.7297C0.777476 17.8928 0.689704 18.1135 0.689704 18.3435C0.689704 18.5735 0.777476 18.7942 0.933851 18.9574V18.9574C1.0119 19.039 1.10476 19.1037 1.20707 19.1479C1.30939 19.1921 1.41912 19.2149 1.52996 19.2149C1.6408 19.2149 1.75054 19.1921 1.85285 19.1479C1.95516 19.1037 2.04802 19.039 2.12607 18.9574L10.1945 10.5901C10.3278 10.4513 10.4027 10.2635 10.4027 10.0676C10.4027 9.8718 10.3278 9.68395 10.1945 9.54523V9.54523Z"/>
  <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3059 9.54523L12.0107 0.95155C11.8501 0.808909 11.6435 0.734373 11.4322 0.742837C11.2209 0.751301 11.0204 0.842142 10.8709 0.997206C10.7214 1.15227 10.6338 1.36014 10.6256 1.57927C10.6175 1.7984 10.6893 2.01266 10.8269 2.17922L18.4336 10.0676L11.0452 17.7297C10.8888 17.8928 10.801 18.1135 10.801 18.3435C10.801 18.5735 10.8888 18.7942 11.0452 18.9574C11.2025 19.1195 11.4153 19.2105 11.6371 19.2105C11.8589 19.2105 12.0717 19.1195 12.229 18.9574L20.3059 10.5901C20.4392 10.4513 20.514 10.2635 20.514 10.0676C20.514 9.8718 20.4392 9.68395 20.3059 9.54523V9.54523Z"/>
  </svg>';
  
?>
<section class="main-slider-sec-wrp">
  <?php if($slides): ?>
  <div class="mainsliderarrows">
    <span class="leftArrow"><i class="fa fa-angle-left"></i></span>
    <span class="rightArrow"><i class="fa fa-angle-right"></i></span>
  </div>
  <div class="main-slider clearfix">
    <?php 
    $i = 1;
    foreach($slides as $slide): 
      $slideposter = '';
      $mslideposter = '';
      if(!empty($slide['image'])) $slideposter = cbv_get_image_src($slide['image'], 'hmslider');
      if(!empty($slide['m_image'])) $mslideposter = cbv_get_image_src($slide['m_image']);

      $contpositon = '';
      if(!empty($slide['c_position'])){
        if($slide['c_position'] == 'center')
          $contpositon = ' main-slider-center';
        elseif($slide['c_position'] == 'right')
          $contpositon = ' main-slider-right'; 
      }
    ?>
    <div class="main-slide-item<?php echo $contpositon; ?> slide-<?php echo $i; ?>">
      <div class="main-slide-item-img hide-xs" style="background: url(<?php echo $slideposter; ?>);"></div>
      <div class="main-slide-item-img show-xs" style="background: url(<?php echo $mslideposter; ?>);"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="main-slide-item-dsc">
              <?php 
                if( !empty( $slide['title'] ) ) printf( '<h1>%s</h1>', $slide['title']);  
                if( !empty( $slide['content'] ) ) echo wpautop($slide['content']);

                $link1 = $slide['link'];
                if( is_array( $link1 ) &&  !empty( $link1['url'] ) ){
                    printf('<a href="%s" target="%s">%s %s</a>', $link1['url'], $link1['target'], $link1['title'], $arrow1); 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php $i++; endforeach;?>
  </div>  
  <?php endif; ?>
</section><!-- end of main-slider-sec-wrp -->
<?php endif; 

$service = get_field('servicesec', HOMEID);
if($service):
  $services = $service['services'];
?>

<section class="hm-service-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="section-hdr">
          <?php if( !empty( $service['title'] ) ) printf( '<h2 class="sec-hdr-title set-hdr-big-title">%s</h2>', $service['title']); ?>
          <div class="sec-hdr-title-divider">
            <span><img src="<?php echo THEME_URI; ?>/assets/images/hn-title-icon.png"></span>
          </div>
          <?php if( !empty( $service['content'] ) ) echo wpautop($service['content']); ?>
        </div>
      </div>
    </div>
    <?php if($services): ?>
    <div class="row">
      <div class="col-sm-12">
        <div class="hm-service-wrp">
          <div class="sersliderarrows">
            <span class="leftArrow"><i class="fa fa-angle-left"></i></span>
            <span class="rightArrow"><i class="fa fa-angle-right"></i></span>
          </div>
          <div class="hm-service-slider">
            <?php foreach($services as $servicee): ?>
            <div class="hm-service-slide-item matchHeight">
              <div class="hm-service-slide-item-dsc matchHeightCol">
                <div class="hm-service-slide-item-hover" style="background: url(<?php echo THEME_URI; ?>/assets/images/service-box-img-hover.png);"></div>
                <div class="hm-service-slide-item-hover"></div>
                <?php if(!empty($servicee['icon'])): ?>
                <div class="servicee-grd-icon-ctrl">
                  <span><img src="<?php echo $servicee['icon']; ?>" alt="<?php echo cbv_get_image_alt( $servicee['icon'] ); ?>"></span>
                  <span><img src="<?php echo $servicee['hover_icon']; ?>" alt="<?php echo cbv_get_image_alt( $servicee['hover_icon'] ); ?>"></span>
                </div>
                <?php 
                endif;
                 $link2 = $servicee['link'];
                 $lurl2 = '';
                 if( is_array( $link2 ) &&  !empty( $link2['url'] ) ) $lurl2 = $link2['url'];
                if( !empty( $servicee['title'] ) ) printf( '<h4><a href="%s">%s</a></h4>', $lurl2, $servicee['title']);  
                if( !empty( $servicee['content'] ) ) echo wpautop($servicee['content']);

                if( is_array( $link2 ) &&  !empty( $link2['url'] ) ){
                    printf('<a href="%s" target="%s">%s</a>', $link2['url'], $link2['target'], $link2['title']); 
                }
              ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; 

$msforms = get_field('msforms', HOMEID);
if($msforms):
?>
<div class="vt-home-form-slider clearfix">
  <?php
    $i = 1;
    foreach($msforms as $msform): 
    $bgimgsrc = '';
    if(!empty($msform['bck_image'])) $bgimgsrc = cbv_get_image_src($msform['bck_image']);
    if($i == 2){
  ?>
  <div class="vt-home-form-slide">
    <section class="vt-form-2-sec-wrap" style="background: url(<?php echo THEME_URI; ?>/assets/images/hm-campaign-grid-sec-bg.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="vt-form-2-sec-des-ctlr" style="background: url(<?php echo $bgimgsrc; ?>);">
              <span class="home-form-2-center-icon"><img src="<?php echo THEME_URI; ?>/assets/images/home-form-2-center-icon.png"></span>
              <div class="vt-form-2-sec-hdr">
              <?php if(!empty($msform['title'])) printf('<h3>%s</h3>', $msform['title']); ?>
              </div>
              <div class="wpcf7cf_multistep">
                <div class="wpcf7cf_steps clearfix">
                <?php if(!empty($msform['form_shortcode'])) echo do_shortcode($msform['form_shortcode']); ?>

                </div>
              </div>
          </div>
        </div>
      </div>
      </div>
    </section>  
  </div>
  <?php }else{ ?>
  <div class="vt-home-form-slide">
    <section class="hm-campaign-grid-sec-wrp vt-form-1-sec-wrap" style="background: url(<?php echo THEME_URI; ?>/assets/images/hm-campaign-grid-sec-bg.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="hm-campaign-grid-wrp clearfix">
              <div class="hm-campaign-grid-lft-con hide-md">
                <div class="hm-campaign-grid-lft-img">
                  <img src="<?php echo $bgimgsrc; ?>" alt="<?php echo cbv_get_image_alt($bgimgsrc); ?>">
                </div>
              </div>
              <div class="hm-campaign-grid-rgt-con">
                <div class="hm-campaign-grid-rgt-wrp clearfix">
                  <div class="hm-campaign-tp-head clearfix">
                    <span><img src="<?php echo THEME_URI; ?>/assets/images/hm-campaign-tp-icon.png"></span>
                    <?php if(!empty($msform['title'])) printf('<h3>%s</h3>', $msform['title']); ?>
                  </div>
                  <div class="wpcf7cf_multistep">
                  <?php if(!empty($msform['form_shortcode'])) echo do_shortcode($msform['form_shortcode']); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php } $i++; endforeach; ?>
</div>
<?php 
endif;
$lslides = get_field('lslides', HOMEID);
if($lslides):
?>
<section class="hm-laboratory-content-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hm-laboratory-slider-wrp">
          <div class="laboratoryarrows">
            <span class="leftArrow"><i class="fa fa-angle-left"></i></span>
            <span class="rightArrow"><i class="fa fa-angle-right"></i></span>
          </div>
          <div class="hm-laboratory-slider">
            <?php 
                foreach($lslides as $lslide):
                  if(!empty($lslide['image'])){
                    $slidetag = cbv_get_image_tag($lslide['image'], 'hmlabrtry'); 
                  }else{
                    $slidetag = '';
                  }
            ?>
            <div class="hm-laboratory-slide">
              <div class="row">
                <div class="col-md-6 col-sm-12 pull-right">
                  <div class="hm-laboratory-dsc">
                  <?php if(!empty($lslide['title'])) printf('<h3 class="show-sm">%s</h3>', $lslide['title']); ?>
                  </div>
                  <div class="hm-laboratory-img">
                    <?php echo $slidetag; ?>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="hm-laboratory-dsc">
                    <?php 
                    if(!empty($lslide['title'])) printf('<h3 class="hide-sm">%s</h3>', $lslide['title']);
                    if($lslide['content']) echo wpautop( $lslide['content']); 
                    $clinnk = $lslide['link_1'];
                    $lllinnk = $lslide['link_2'];
                    ?>
                    <div class="hm-laboratory-btn">
                    <?php 
                    if( is_array( $clinnk ) &&  !empty( $clinnk['url'] ) ){
                        printf('<a class="ornage-btn" href="%s" target="%s">%s</a>', $clinnk['url'], $clinnk['target'], $clinnk['title']); 
                    }
                    if( is_array( $lllinnk ) &&  !empty( $lllinnk['url'] ) ){
                        printf('<a class="green-btn" href="%s" target="%s">%s</a>', $lllinnk['url'], $lllinnk['target'], $lllinnk['title']); 
                    }
                    ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of hm-laboratory-content-sec-wrp -->
<?php 
endif;
$minsurance = get_field('minsurancesec', HOMEID);
if($minsurance):
  $logos = $minsurance['logos'];
?>
<section class="hm-brand-logo-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="hm-brand-logo-wrp">
          <div class="HmBrandLogoarrows">
            <span class="leftArrow"><i class="fa fa-angle-left"></i></span>
            <span class="rightArrow"><i class="fa fa-angle-right"></i></span>
          </div>
          <div class="section-hdr">
            <?php 
            if( !empty( $minsurance['title'] ) ) printf( '<h2 class="sec-hdr-title set-hdr-big-title hide-xs">%s</h2>', $minsurance['title']); 
            if( !empty( $minsurance['mtitle'] ) ) printf( '<h2 class="sec-hdr-title set-hdr-big-title show-xs">%s</h2>', $minsurance['mtitle']); 
            ?>
            <div class="sec-hdr-title-divider">
              <span><img src="<?php echo THEME_URI; ?>/assets/images/hn-title-icon.png"></span>
            </div>
          </div>
          <?php if($logos): ?>
          <div class="hm-brand-logo">
            <ul id="HmBrandLogoSlider">
              <?php foreach($logos as $logo): ?>
              <li><img src="<?php echo $logo['logo']; ?>" alt="<?php echo cbv_get_image_alt( $logo['logo'] ); ?>"></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of hm-brand-logo-sec-wrp -->
<?php endif; 
$news = get_field('newssec', HOMEID);
?>
<section class="hm-btm-grid-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="section-hdr">
          <?php if( !empty( $news['title'] ) ) printf( '<h2 class="sec-hdr-title set-hdr-big-title">%s</h2>', $news['title']); ?>
          <div class="sec-hdr-title-divider">
            <span><img src="<?php echo THEME_URI; ?>/assets/images/hn-title-icon.png"></span>
          </div>
          <?php if( !empty( $news['content'] ) ) echo wpautop($news['content']); ?>
        </div>
      </div>
    </div>

<?php
  $nQuery = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page'=> 5,
    'order'=> 'DESC',
  ));

  if( $nQuery->have_posts() ){
?>
    <div class="row">
      <div class="col-sm-12">
        <div class="hm-btm-grid-slider-wrp">
          <div class="hmgirdarrows">
            <span class="leftArrow"><i class="fa fa-angle-left"></i></span>
            <span class="rightArrow"><i class="fa fa-angle-right"></i></span>
          </div>
            <div class="HmbtmGridSlider">
            <?php 
              $i = 1;          
              while($nQuery->have_posts()): $nQuery->the_post(); 
              $gridImage = get_post_thumbnail_id(get_the_ID());
              if(!empty($gridImage)){
                $refImgtag = cbv_get_image_tag($gridImage, 'newsblg');
              }else{
                $refImgtag = '<img src="'.THEME_URI.'/assets/images/newsimg.jpg" alt="'.get_the_title().'">';
              }  

              $classOrange = ($i%2 == 0)? ' hm-btm-grid-orange': '';       
            ?>
              <div class="HmbtmGridSlide-item">
                <div class="HmbtmGridSlide-item-hover">
                  <div class="hm-btm-grid-dsc-inr<?php echo $classOrange; ?>">
                    <div class="hm-btm-grid-img">
                      <?php echo $refImgtag; ?>
                    </div>
                    <div class="hm-btm-grid-dsc">
                      <strong><?php echo get_the_date('M d'); ?></strong>
                      <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                    </div>
                    <div class="hm-btm-grid-dsc-btn">
                      <a href="<?php the_permalink(); ?>">Leer Artículo</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php $i++; endwhile; ?>
            </div>
          </div>
        </div>
      </div>
      <?php } wp_reset_postdata(); ?>
    </div>

  </div>
</section><!-- end of hm-btm-grid-sec-wrp -->
<?php get_footer(); ?>