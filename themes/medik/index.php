<?php get_header(); ?>
<section class="blog-main-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="blog-main-sec-innr-wrp ">
          <div class="blog-main-hdr">
            <h1>Noticias de Salud <span>y Medicina</span></h1>
            <p>Información, actualidad y noticias sobre salud y enfermedades. <br/>Novedades y avances en medicina a nivel nacional e internacional</p>
          </div>
          <?php if( have_posts() ): ?>
          <div class="bblog-filter-btn text-center">
            <div class="filter-options">
            <button class="active" id='all'>Mostrar Todos</button>
            <?php 
              $terms = get_terms( 'category' );
              if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                  foreach ( $terms as $term ) {
                     echo '<button class="azbtn" data-group="'.$term->slug.'">' . $term->name . '</button>';
                  }
              }
            ?>
          </div>
          </div>
          <div class="blog-grd-wrp">
            <div class="blogGrdSlider-arrows">
              <span class="leftArrow"></span>
              <span class="rightArrow"></span>
            </div>            
            <ul class="ulc clearfix blogGrdSlider" id="grid">
              <?php 
                while( have_posts() ): the_post();
                $postID = get_the_ID(); 
                $postImg = wp_get_attachment_image_src( get_post_thumbnail_id( $postID ), 'bloggrid' );
                if( is_array($postImg) && !empty( $postImg[0] ) ) $useIMG = $postImg[0]; else $useIMG = THEME_URI.'/assets/images/noticiasSlider-grd-img-001.png';
                $term_list = get_the_terms(get_the_ID(), 'category');
                $types = [];
                foreach($term_list as $term_single) {
                     $types[]= $term_single->slug;
                }
              ?>
              <li class="blog-item" data-groups='<?php echo json_encode($types); ?>'>
                <div class="blog-grd">
                  <div class="blog-grd-img">
                    <img src="<?php echo $useIMG; ?>" alt="<?php the_title(); ?>">
                    <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
                  </div>
                  <div class="blog-grd-des">
                    <div class="noticiasSlider-date">
                      <span><?php echo get_the_date('M d'); ?></span>                        
                      <div class="sqew"></div>
                    </div>
                    <p><?php the_title(); ?></p>
                    <a href="<?php the_permalink(); ?>">Leer Artículo</a>
                  </div>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
          </div>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>    
</section>
<?php get_footer(); ?>