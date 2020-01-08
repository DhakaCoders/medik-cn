<?php 
/*
  Template Name: Servicios
*/
get_header(); 
$thisID = get_the_ID();
?>

<section class="servicios-main-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="servicios-main-innr clearfix">
          <div class="servicios-content">
              <?php 
              if(have_rows('sidebarcont')){ 
              while ( have_rows('sidebarcont') ) : the_row(); 
                if( get_row_layout() == 'ahservices' ){
                    $tsevs = get_sub_field('services');
                    if($tsevs){
                    echo '<div class="servicios-siderbar-accordion show-xs">';
                    $i= 1; 
                    foreach( $tsevs as $tsev): $activeClass = ($i ==2)? ' active': '';
                      echo '<div class="servicios-siderbar-accordion-con'.$activeClass.'">';
                      echo '<div class="servicios-siderbar-accordion-title">';
                      if( !empty( $tsev['title'] ) ) printf( '<span>%s</span>', $tsev['title']);
                      if(!empty($tsev['icon'])){ 
                      echo '<i><img src="'.$tsev['icon'].'" alt="'.cbv_get_image_alt( $tsev['icon'] ).'" />';
                      if(!empty($tsev['hover_icon'])){
                      echo '<img src="'.$tsev['hover_icon'].'" alt="'.cbv_get_image_alt( $tsev['hover_icon'] ).'" />';
                      }
                      echo '</i>';
                      }
                      echo '</div><div class="servicios-siderbar-accordion-des">';
                      if(!empty($tsev['content'])) echo wpautop($tsev['content']);
                      echo '</div></div>';
                    $i++; 
                    endforeach;
                    echo '</div>';
                    }
                }
              endwhile;
              }

              $introsec = get_field('introsec', $thisID);
              $introtitle = get_field('titleg', $thisID);
              $desc = get_field('descriptions', $thisID);
              $occsec = $introsec['occupationalsec'];
              $occs = $occsec['occupational'];
              $intronoff = $introsec['show_hideintr'];
              if( !empty( $introtitle['title'] ) ):
            ?>
            <div class="servicios-content-head">   
              <?php  printf( '<h1>%s</h1>', $introtitle['title']); ?>      
            </div>
            <?php endif; if($intronoff){ if($occs): ?>
            <div class="llevamosSlider-wrp">
              <div class="llevamosSlider-arrows">
                <span class="leftArrow"></span>
                <span class="rightArrow"></span>
              </div>            
              <div class="llevamosSlider" style="background:url(<?php echo THEME_URI; ?>/assets/images/llevamosSlider-bg.png);">
                <?php foreach( $occs as $occ): ?>
                <div class="llevamosSlider-item text-center">
                  <?php 
                  if( !empty( $occ['title'] ) ) printf( '<h2>%s</h2>', $occ['title']); 
                  $hlists = $occ['health_lists'];
                  if($hlists):
                  ?>  
                  <ul class="ulc clearfix">
                    <?php foreach( $hlists as $hlist): ?>
                    <li>
                      <div> 
                        <?php 
                          if( !empty( $hlist['title'] ) ) printf( '<strong>%s</strong>', $hlist['title']); 
                          if( !empty( $hlist['subtitle'] ) ) printf( '<span>%s</span>', $hlist['subtitle']); 
                        ?>                
                      </div>
                      <?php if(!empty($hlist['icon'])): ?>
                      <i>
                        <img src="<?php echo $hlist['icon']; ?>" alt="<?php echo cbv_get_image_alt( $hlist['icon'] ); ?>" />
                      </i>
                      <?php endif; ?>
                    </li>
                  <?php endforeach; ?>
                  </ul>
                  <?php endif;?>
                </div>
                <?php endforeach; ?>
              </div> 
            </div>
            <?php endif; } ?>
            <div class="servicios-content-des">
              <?php if(!empty($desc['content'])) echo wpautop($desc['content']); ?>
            </div>
            <?php if(!empty($desc['image'])): 

              ?>
            <div class="servicios-dft-img">
              <img src="<?php echo $desc['image']; ?>" alt="<?php echo cbv_get_image_alt( $desc['image'] ); ?>">
            </div>
            <?php endif; 
            $pevas = get_field('pevaluations', $thisID);
            $on_offpev = get_field('show_hidepev', $thisID);
            $pevareps = $pevas['pevaluationsrep'];
            if($on_offpev):
            ?>
            <div class="servicios-accordion-wrp">
              <div class="servicios-accordion-hdr">
                <?php if( !empty( $pevas['title'] ) ) printf( '<h4>%s</h4>', $pevas['title']); ?>
              </div>
              <?php if($pevareps): ?>
              <div class="servicios-accordion">
                <?php $i= 1; foreach( $pevareps as $pevarep ): $activeClass = ($i ==2)? ' active': '';?>
                <div class="servicios-accordion-con<?php echo $activeClass; ?>">
                  <div class="servicios-accordion-title">
                    <?php 
                    if( !empty( $pevarep['title'] ) ) printf( '<h5>%s</h5>', $pevarep['title']); 
                    if(!empty($pevarep['icon'])){
                    ?>
                    <i><img src="<?php echo $pevarep['icon']; ?>" alt="<?php echo cbv_get_image_alt( $pevarep['icon'] ); ?>" /></i>
                    <?php } ?>
                  </div>
                  <div class="servicios-accordion-des">
                    <?php if(!empty($pevarep['content'])) echo wpautop($pevarep['content']); ?>
                  </div>
                </div>
                <?php $i++; endforeach; ?>
              </div> 
              <?php endif; ?>           
            </div> 
            <?php endif; ?> 
          </div>
          <div class="servicios-siderbar">
            <?php 
              if(have_rows('sidebarcont')){ 
              while ( have_rows('sidebarcont') ) : the_row(); 
                if( get_row_layout() == 'sidebar_form' ){
                  $sform = get_sub_field('form');
                  echo '<div class="servicios-siderbar-form-wrp"><div class="dft-page-contact-form"><div class="dft-page-contact-form-hdr text-center">';
                    if(!empty($sform['content'])) echo wpautop($sform['content']);
                  echo '</div><div class="dft-page-contact-form-main pagesidebar-form">';
                    if(!empty($sform['shortcode'])) echo do_shortcode($sform['shortcode']);
                  echo '</div></div></div>';
                   
                }elseif( get_row_layout() == 'ahservices' ){
                    $tsevs = get_sub_field('services');
                    if($tsevs):
                    echo '<div class="servicios-siderbar-accordion">';
                    $i= 1; 
                    foreach( $tsevs as $tsev): $activeClass = ($i ==2)? ' active': '';
                      echo '<div class="servicios-siderbar-accordion-con'.$activeClass.'">';
                      echo '<div class="servicios-siderbar-accordion-title">';
                      if( !empty( $tsev['title'] ) ) printf( '<span>%s</span>', $tsev['title']);
                      if(!empty($tsev['icon'])){ 
                      echo '<i><img src="'.$tsev['icon'].'" alt="'.cbv_get_image_alt( $tsev['icon'] ).'" />';
                      if(!empty($tsev['hover_icon'])){
                      echo '<img src="'.$tsev['hover_icon'].'" alt="'.cbv_get_image_alt( $tsev['hover_icon'] ).'" />';
                      }
                      echo '</i>';
                      }
                      echo '</div><div class="servicios-siderbar-accordion-des">';
                      if(!empty($tsev['content'])) echo wpautop($tsev['content']);
                      echo '</div></div>';
                    $i++; 
                    endforeach;
                    echo '</div>';
                    endif;  
                }elseif( get_row_layout() == 'promo_slider' ){
                  $promos = get_sub_field('promo');
                  if($promos):
                  echo '<div class="siderbarProSlider-wrp"><div class="siderbarProSlider">';
                  foreach( $promos as $promos):
                    $ppostertag = ''; 
                    if(!empty($promos['image'])) $ppostertag = cbv_get_image_tag($promos['image']);
                    $plink = $promos['link'];
                    echo '<div class="siderbarProSlider-item">';
                    echo $ppostertag; 
                    if( is_array( $plink ) &&  !empty( $plink['url'] ) ){
                      echo '<a href="'.$plink['url'].'" class="overlay-link"></a>';
                    } 
                    echo '</div>';
                 endforeach; 
                  echo '</div></div>';
                  endif;
                }elseif( get_row_layout() == 'blog_slide' ){
                  $fctitle = get_sub_field('title');
                  $nQuery = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page'=> 9,
                    'order'=> 'DESC',
                  ));

                  if( $nQuery->have_posts() ){
                  echo '<div class="siderbarRecentPostSlider-wrp">';
                  echo '<div class="recentPost-sliderarrows">
                    <span class="leftArrow"></span>
                    <span class="rightArrow"></span>
                    </div>';
                  echo '<div class="siderbarRecentPost-hdr text-center">';
                  if(!empty($fctitle)) printf('<h5>%s</h5>', $fctitle);
                  echo '</div><div class="siderbarRecentPostSlider">';


                  $index = 1; 
                  $countPost = $nQuery->found_posts;          
                    while($nQuery->have_posts()): $nQuery->the_post(); 
                    $gridImage = get_post_thumbnail_id(get_the_ID());
                    if(!empty($gridImage)){
                      $refImgtag = cbv_get_image_tag($gridImage, 'sblgrid');
                    }else{
                      $refImgtag = '<img src="'.THEME_URI.'/assets/images/blgimg.jpg" alt="'.get_the_title().'">';
                    }  

                     
                    echo ($index % 3 == 1 || $index == 1) ? '<div class="siderbarRecentPostSlider-item"><div class="servicios-siderbar-recent-post-innr"><ul class="ulc">' : ''; 
                    echo '<li>';
                      echo '<i><a href="'.get_the_permalink().'">'.$refImgtag.'</a></i>'; 
                      echo '<a href="'.get_the_permalink().'">'.get_the_title().'</a>';
                      echo '<span class="post-date">'.get_the_date('F d, Y').'</span>';
                    echo '</li>';

                    echo ($index % 3 == 0 || $index == $countPost) ? '</ul></div></div>' : '';
                   $index++;
                   endwhile; 

                  echo '</div></div>';
                  wp_reset_postdata(); } 
                }
              endwhile;
              }
            ?>
          </div>        
        </div>  
      </div>
    </div>
  </div>    
</section>

<?php 
$minsurance = get_field('minsurancesec', HOMEID);
if($minsurance):
  $logos = $minsurance['logos'];
?>
<section class="servicios-partner-slider-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="serviciosPartnerSlider-innr-wrp">
          <div class="serviciosPartnerSlider-hdr">
            <?php 
            if( !empty( $minsurance['title'] ) ) printf( '<h2 class="hide-xs">%s</h2>', $minsurance['title']); 
            if( !empty( $minsurance['mtitle'] ) ) printf( '<h2 class="show-xs">%s</h2>', $minsurance['mtitle']); 
            ?>
          </div>
          <?php if($logos): ?>
          <div class="serviciosPartnerSlider-wrp">
            <div class="serviciosPartnerSlider-arrows">
              <span class="leftArrow"></span>
              <span class="rightArrow"></span>
            </div>

            <ul class="ulc clearfix serviciosPartnerSlider">
              <?php foreach($logos as $logo): ?>
              <li class="serviciosPartnerSlider-item"><img src="<?php echo $logo['logo']; ?>" alt="<?php echo cbv_get_image_alt( $logo['logo'] ); ?>"></li>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php endif;?>
<?php 
$news = get_field('newssec', HOMEID);
?>
<section class="noticias-slider-sec-wrp">
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
            $pQuery = new WP_Query(array(
              'post_type' => 'post',
              'posts_per_page'=> 5,
              'order'=> 'DESC',
            ));

            if( $pQuery->have_posts() ){
          ?>
          <div class="noticiasSlider-wrp">
            <div class="noticiasSlider-arrows">
              <span class="leftArrow"></span>
              <span class="rightArrow"></span>
            </div>          
            <div class="ulc noticiasSlider">
            <?php 
              $i = 1;          
              while($pQuery->have_posts()): $pQuery->the_post(); 
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
                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                    <a href="<?php the_permalink(); ?>">Leer Artículo</a>
                  </div>
                </div>
              </div>
              <?php $i++; endwhile; ?>
            </div>
          </div>
          <?php } wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </div>    
</section>

<?php get_footer(); ?>