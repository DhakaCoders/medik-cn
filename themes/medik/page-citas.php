<?php 
/*Template Name: Citas*/
get_header();
$thisID = get_the_ID();
$introsec = get_field('cintrosec', $thisID); 
$dinfo = $introsec['doctor_info'];
$schedulesec = $introsec['schedule'];
$ftschedul = get_field('schedulesec', 'options');
$spacialArry = array(".", "/", "+", "-", " ", ")", "(");$replaceArray = '';
$adres = get_field('address', 'options');
$ftaddress1 = $adres['address_footer'];
$gmapsurl = get_field('google_maps', 'options');
$telefoon = get_field('telephone', 'options');
$fttelephone = $telefoon['telephone_footer']; 

$gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';

$pgbgimg = get_post_thumbnail_id(get_the_ID());
$bgimgsrc = '';
if(!empty($pgbgimg)) $bgimgsrc = cbv_get_image_src($pgbgimg, 'bgcitas'); 
?>
<section class="citas-main-sec">
  <div class="citas-main-sec-fea-img" style="background: url(<?php echo $bgimgsrc; ?>);"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="citas-main-sec-innr">
          <div class="citas-main-hdr text-center">
            <?php 
              if( !empty( $introsec['title'] ) ) printf( '<h1>%s</h1>', $introsec['title']); 
              if(!empty($introsec['content'])) echo wpautop($introsec['content']);
            ?>  
          </div>
          <div class="citas-main-two-part clearfix">
            <?php if($dinfo): ?>
            <div class="citas-main-lft">
              <div class="citas-main-lft-innr text-center">
                <?php if($dinfo['image']): ?>
                <i>
                  <img src="<?php echo $dinfo['image']; ?>" alt="<?php echo cbv_get_image_alt( $dinfo['image'] ); ?>">
                </i> 
                <?php endif; ?>
                <ul class="ulc hide-xs">
                  <li>
                     <?php 
                      if( !empty( $dinfo['name'] ) ) printf( '<strong>%s</strong>', $dinfo['name'])."<br/>";
                      if( !empty( $dinfo['specialty_code'] ) ) printf( '<span>%s</span>', $dinfo['specialty_code']);
                    ?> 
                  </li> 
                  <?php 
                  if(!empty( $ftaddress1 )) printf('<li><a href="%s">%s</a></li>', $gmaplink, $ftaddress1); 
                  if(!empty($fttelephone)):
                  ?>
                  <li>
                    <div class="tel-wrapper">
                      <?php _e('<strong>Teléfonos:</strong><br/>', THEME_NAME); ?>
                        <?php 
                            $i = 1; 
                            foreach($fttelephone as $ftphone):
                              $trimphone = trim(str_replace($spacialArry, $replaceArray, $ftphone['telephone']));
                              $brtag = ($i == 2)? '<br/>': '';
                              $hyphen = ($i%2 == 0)? '- ': '';
                        ?>
                        <?php echo $hyphen; ?><a class="tel" href="tel:<?php echo $trimphone; ?>"><?php echo $ftphone['telephone']; ?></a>
                        <?php echo $brtag; $i++; endforeach; ?>
                    </div>
                  </li>
                  <?php endif; 

                  if(!empty($schedulesec['abscheduletime'])): 
                  ?>
                  <li>
                    <?php printf('<span>%s</span>', $schedulesec['abscheduletime']); ?>
                  </li>
                  <?php endif;?>
                </ul> 

                <ul class="ulc show-xs">
                  <li>
                    <?php 
                      if( !empty( $dinfo['name'] ) ) printf( '<strong>%s</strong>', $dinfo['name'])."<br/>";
                      if( !empty( $dinfo['specialty_code'] ) ) printf( '<span>%s</span>', $dinfo['specialty_code']);
                    ?> 
                  </li> 
                  <?php 
                  if(!empty( $ftaddress1 )) printf('<li><a href="%s">%s</a></li>', $gmaplink, $ftaddress1); 
                  if(!empty($fttelephone)):
                  ?>
                  <li>
                    <?php _e('<strong>Teléfonos:</strong><br/>', THEME_NAME); ?>
                      <?php  
                        $i = 1; $count = 0;
                        $count = count($fttelephone);
                        foreach($fttelephone as $ftphone):
                          $trimphone = trim(str_replace($spacialArry, $replaceArray, $ftphone['telephone']));
                          $brtag = ($i != $count)? '<br/>': '';
                      ?>
                        <a class="tel" href="tel:<?php echo $trimphone; ?>"><?php echo $ftphone['telephone']; ?></a><?php echo $brtag; ?>
                    <?php $i++; endforeach; ?>
                  </li>
                  <?php endif;                   
                  if($ftschedul): 
                    foreach($ftschedul as $schd):
                  ?>
                  <li>
                    <?php if(!empty($schd['aschedule_time'])) printf('%s', $schd['aschedule_time']); ?>
                  </li> 
                  <?php endforeach; endif; ?> 
                </ul>
              </div>
            <?php endif; 
              $formsec = get_field('formsec', $thisID); 
            ?>
            </div>
            <?php if($formsec): ?>
            <div class="citas-main-rgt" id="citas-main-contact-form">
              <div class="dft-page-contact-form">
                <div class="dft-page-contact-form-hdr text-center">
                  <?php if(!empty($formsec['content'])) echo wpautop($formsec['content']); ?>
                </div>
                <div class="dft-page-contact-form-main citas-text">
                  <?php if(!empty($formsec['shortcode'])) echo do_shortcode($formsec['shortcode']); ?>              
                </div>  
              </div>
            </div>
            <?php endif; ?>
          </div>  
        </div>
      </div>
    </div>
  </div>    
</section>

<?php 
$service = get_field('servicesec', HOMEID);
if($service):
  $services = $service['services'];
?>

<section class="hm-service-sec-wrp" id="citas-service-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="section-hdr">
          <?php
          if( !empty( $service['title'] ) ) printf( '<h2 class="sec-hdr-title set-hdr-big-title">%s</h2>', $service['title']); 
          
          ?>
          <div class="sec-hdr-title-divider">
            <span><img src="<?php echo THEME_URI; ?>/assets/images/hn-title-icon.png"></span>
          </div>
          <?php 
            if( !empty( $service['content'] ) ) echo wpautop($service['content']);
          ?>
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

$minsurance = get_field('minsurancesec', HOMEID);
if($minsurance):
  $logos = $minsurance['logos'];
?>
<section class="servicios-partner-slider-sec hide-xs" id="citas-partner-slider-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="serviciosPartnerSlider-innr-wrp">
          <div class="serviciosPartnerSlider-hdr">
            <?php if( !empty( $minsurance['title'] ) ) printf( '<h2>%s</h2>', $minsurance['title']); ?>
          </div>
          <?php if($logos): ?>
          <div class="serviciosPartnerSlider-wrp">
            <div class="serviciosPartnerSlider-arrows">
              <span class="leftArrow"></span>
              <span class="rightArrow"></span>
            </div>
            <ul class="ulc clearfix serviciosPartnerSlider">
              <?php foreach($logos as $logo): ?>
              <li class="serviciosPartnerSlider-item"><i><img src="<?php echo $logo['logo']; ?>" alt="<?php echo cbv_get_image_alt( $logo['logo'] ); ?>"></i></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php endif; 
$news = get_field('newssec', HOMEID);
?>

<section class="noticias-slider-sec-wrp" id="citas-noticias-slider-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="noticias-slider-innr-wrp">
          <div class="noticias-slider-hdr">
            <?php 
              if( !empty( $news['title'] ) ) printf( '<h2>%s</h2>', $news['title']); 
              if( !empty( $news['content'] ) ) echo wpautop($news['content']);
            ?>
          </div>
          <?php
            $nQuery = new WP_Query(array(
              'post_type' => 'post',
              'posts_per_page'=> 5,
              'order'=> 'DESC',
            ));

            if( $nQuery->have_posts() ){
          ?>
          <div class="noticiasSlider-wrp">
            <div class="noticiasSlider-arrows">
              <span class="leftArrow"></span>
              <span class="rightArrow"></span>
            </div>          
            <div class="ulc noticiasSlider">
            <?php          
              while($nQuery->have_posts()): $nQuery->the_post(); 
              $gridImage = get_post_thumbnail_id(get_the_ID());
              if(!empty($gridImage)){
                $refImgtag = cbv_get_image_tag($gridImage, 'newsblg');
              }else{
                $refImgtag = '<img src="'.THEME_URI.'/assets/images/newsimg.jpg" alt="'.get_the_title().'">';
              }        
            ?>
              <div class="noticiasSlider-item">
                <div class="noticiasSlider-grd">
                  <div class="noticiasSlider-grd-img">
                    <?php echo $refImgtag; ?>
                    <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                  </div>
                  <div class="noticiasSlider-grd-des">
                    <div class="noticiasSlider-date">
                      <span><?php echo get_the_date('M d'); ?></span>                        
                      <div class="sqew"></div>
                    </div>
                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?><br> ataque al corazón?</a></h6>
                    <a href="<?php the_permalink(); ?>">Leer Artículo</a>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
            </div>
          </div>
          <?php } wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php 

$promos = get_field('pslides');
if($promos):
?>
<section class="CitasSiderbarProSliderCtlr show-xs">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="siderbarProSlider-wrp">
          <div class="siderbarProSlider">
            <?php 
              foreach( $promos as $promos):
              $ppostertag = ''; 
              if(!empty($promos['image'])) $ppostertag = cbv_get_image_tag($promos['image']);
              $plink = $promos['link'];
            ?>
            <div class="siderbarProSlider-item">
              <?php echo $ppostertag; 
                  if( is_array( $plink ) &&  !empty( $plink['url'] ) ){
                  ?>
                  <a href="<?php echo $plink['url']; ?>" class="overlay-link"></a>
                <?php } ?>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; get_footer(); ?>