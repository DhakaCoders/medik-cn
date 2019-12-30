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
    <div class="row">
      <div class="col-sm-12">
        <div class="promo-tabs-wrp">
          <div class="blog-filter-btn text-center">
            <button class="active" id='all'>Mostrar Todas</button>
            <button id='cat-1'>Laboratorio</button>
            <button id='cat-2'>Estudios </button>
            <button id='cat-3'>Consulta </button>
            <button id='cat-4'>Óptica</button>
          </div>
          <div class="tabs-dsc-innr">
            <ul>
              <li data-groups='["blg-cat-1"]'>
                <div class="tabs-box-inr clearfix" style="background: url(<?php echo THEME_URI; ?>/assets/images/promo-box-img.png);">
                  <a class="fancybox" rel="gallery1" href="<?php echo THEME_URI; ?>/assets/images/promo-box-img.png">
                  </a>
                  <div class="tabs-box-tp-logo">
                    <a href="#">
                      <img src="<?php echo THEME_URI; ?>/assets/images/tabs-box-tp-logo.png">
                    </a>
                  </div>
                  <!-- <div class="tabs-box-middel-dsc">
                    <strong>Ver</strong><br>
                    <span>Promoción</span>
                    <a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                  </div>
                  <div class="tabs-box-btn">
                    <a href="#">Cardiovascular</a>
                  </div> -->
                </div>
              </li>
              <li data-groups='["blg-cat-2"]'>
                <div class="tabs-box-inr clearfix" style="background: url(<?php echo THEME_URI; ?>/assets/images/promo-box-img.png);">
                  <a class="fancybox" rel="gallery1" href="<?php echo THEME_URI; ?>/assets/images/promo-box-img.png">
                  </a>
                  <div class="tabs-box-tp-logo">
                    <a href="#">
                      <img src="<?php echo THEME_URI; ?>/assets/images/tabs-box-tp-logo.png">
                    </a>
                  </div>
                </div>
              </li>
              <li data-groups='["blg-cat-1"]'>
                <div class="tabs-box-inr clearfix" style="background: url(<?php echo THEME_URI; ?>/assets/images/promo-box-img.png);">
                  <a class="fancybox" rel="gallery1" href="<?php echo THEME_URI; ?>/assets/images/promo-box-img.png">
                  </a>
                  <div class="tabs-box-tp-logo">
                    <a href="#">
                      <img src="<?php echo THEME_URI; ?>/assets/images/tabs-box-tp-logo.png">
                    </a>
                  </div>
                </div>
              </li>
              <li data-groups='["blg-cat-4"]'>
                <div class="tabs-box-inr clearfix" style="background: url(<?php echo THEME_URI; ?>/assets/images/promo-box-img.png);">
                  <a class="fancybox" rel="gallery1" href="<?php echo THEME_URI; ?>/assets/images/promo-box-img.png">
                  </a>
                  <div class="tabs-box-tp-logo">
                    <a href="#">
                      <img src="<?php echo THEME_URI; ?>/assets/images/tabs-box-tp-logo.png">
                    </a>
                  </div>
                </div>
              </li>
              <li data-groups='["blg-cat-3"]'>
                <div class="tabs-box-inr clearfix" style="background: url(<?php echo THEME_URI; ?>/assets/images/promo-box-img.png);">
                  <a class="fancybox" rel="gallery1" href="<?php echo THEME_URI; ?>/assets/images/promo-box-img.png">
                  </a>
                  <div class="tabs-box-tp-logo">
                    <a href="#">
                      <img src="<?php echo THEME_URI; ?>/assets/images/tabs-box-tp-logo.png">
                    </a>
                  </div>
                </div>
              </li>
              <li data-groups='["blg-cat-4"]'>
                <div class="tabs-box-inr clearfix" style="background: url(<?php echo THEME_URI; ?>/assets/images/promo-box-img.png);">
                  <a class="fancybox" rel="gallery1" href="<?php echo THEME_URI; ?>/assets/images/promo-box-img.png">
                  </a>
                  <div class="tabs-box-tp-logo">
                    <a href="#">
                      <img src="<?php echo THEME_URI; ?>/assets/images/tabs-box-tp-logo.png">
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of promo-tabs-sec-wrp -->
<?php get_footer(); ?>