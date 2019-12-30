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
          <div class="blog-filter-btn text-center">
            <button class="active" id='all'>Mostrar Todos</button>
            <?php 
              $terms = get_terms( 'category' );
              if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                $i = 1;
                  foreach ( $terms as $term ) {
                      echo '<button id="cat-'.$i.'">' . $term->name . '</button>';
                      $i++;
                  }
              }
            ?>
          </div>
          <div class="blog-grd-wrp">
            <div class="blogGrdSlider-arrows">
              <span class="leftArrow"></span>
              <span class="rightArrow"></span>
            </div>            
            <ul class="ulc clearfix blogGrdSlider">
              <?php 
              $i = 1;
                while( have_posts() ): the_post();
                $postID = get_the_ID(); 
                $postImg = wp_get_attachment_image_src( get_post_thumbnail_id( $postID ), 'bloggrid' );
                if( is_array($postImg) && !empty( $postImg[0] ) ) $useIMG = $postImg[0]; else $useIMG = THEME_URI.'/assets/images/noticiasSlider-grd-img-001.png';
              ?>
              <li class="blog-item" data-groups='["blg-cat-<?php echo $i; ?>"]'>
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
              <?php $i++; endwhile; ?>
            </ul>
          </div>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>    
</section>
<?php get_footer(); ?>