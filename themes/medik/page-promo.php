<?php 
/*
  Template Name: Promo
*/
get_header(); 
?>
<section class="promo-tabs-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="section-hdr">
          <h1 class="sec-hdr-title set-hdr-big-title">Promociones <span>Médicas</span>
          </h1>
          <div class="sec-hdr-title-divider">
            <span><img src="<?php echo THEME_URI; ?>/assets/images/hn-title-icon.png"></span>
          </div>
        </div>
      </div>
    </div>
    <?php
      $pQuery = new WP_Query(array(
        'post_type' => 'promo',
        'posts_per_page'=> -1,
        'order'=> 'DESC',
      ));

      if( $pQuery->have_posts() ){
    ?>
    <div class="row">
      <div class="col-sm-12">
        <div class="promo-tabs-wrp">
          <div class="bblog-filter-btn text-center">
            <div class="filter-options1 blog-filter-btn">
            <button class="active" id='all'>Mostrar Todas</button>
            <?php 
              $terms = get_terms( 'promo_cat','order=desc&hide_empty=0' );
              if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                  foreach ( $terms as $term ) {
                      echo '<button class="azbtn" data-group="'.$term->slug.'">' . $term->name . '</button>';
                  }
              }
            ?>
            </div>
          </div>
          <div class="tabs-dsc-innr">
            <ul id="grid1">
            <?php         
              while($pQuery->have_posts()): $pQuery->the_post(); 
              $intro = get_field('intro', get_the_ID());
              if(!empty($intro['image'])){
                $refImgsrc = cbv_get_image_src($intro['image']);
                $fullImgsrc = cbv_get_image_src($intro['image']);
              }else{
                $refImgsrc = '';
                $fullImgsrc = '';
              }     
              $term_list = get_the_terms(get_the_ID(), 'promo_cat');
              $types = [];
              foreach($term_list as $term_single) {
                   $types[]= $term_single->slug;
              }
            
            
            ?>
             <li class="filter-item" data-groups='<?php echo json_encode($types); ?>'>
                <div class="tabs-box-inr clearfix" style="background: url(<?php echo $refImgsrc; ?>);">
                  <a class="fancybox" rel="gallery1" href="<?php echo $fullImgsrc; ?>">
                  </a>
                  <div class="tabs-box-tp-logo">
                    <a href="#">
                      <img src="<?php echo THEME_URI; ?>/assets/images/tabs-box-tp-logo.png">
                    </a>
                  </div>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php } wp_reset_postdata(); ?>
  </div>
</section><!-- end of promo-tabs-sec-wrp -->

<?php get_footer(); ?>