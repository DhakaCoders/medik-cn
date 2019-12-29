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
              $toopsbar = get_field('sidebarsec', $thisID);
              $tsevs = $toopsbar['services'];
              if($tsevs):
            ?>
            <div class="servicios-siderbar-accordion show-xs">
              <?php $i= 1; foreach( $tsevs as $tsev): $activeClass = ($i ==2)? ' active': ''; ?>
              <div class="servicios-siderbar-accordion-con<?php echo $activeClass; ?>">
                <div class="servicios-siderbar-accordion-title">
                  <?php 
                  if( !empty( $tsev['title'] ) ) printf( '<span>%s</span>', $tsev['title']); 
                  if(!empty($tsev['icon'])){
                  ?>
                  <i>
                    <img src="<?php echo $tsev['icon']; ?>" alt="<?php echo cbv_get_image_alt( $tsev['icon'] ); ?>" />
                    <?php if(!empty($tsev['hover_icon'])){ ?>
                    <img src="<?php echo $tsev['hover_icon']; ?>" alt="<?php echo cbv_get_image_alt( $tsev['hover_icon'] ); ?>" />
                    <?php } ?>
                  </i>
                  <?php } ?>
                </div>
                <div class="servicios-siderbar-accordion-des">
                  <?php if(!empty($tsev['content'])) echo wpautop($tsev['content']); ?>
                </div>
              </div> 
              <?php $i++; endforeach; ?>
            </div>
            <?php 
            endif;
              $introsec = get_field('introsec', $thisID);
              $desc = $introsec['descriptions'];
              $occs = $introsec['occupational'];
            ?>
            <div class="servicios-content-head">   
              <?php if( !empty( $introsec['title'] ) ) printf( '<h1>%s</h1>', $introsec['title']); ?>      
            </div>
            <?php if($occs): ?>
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
            <?php endif; ?>
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
            $pevareps = $pevas['pevaluationsrep'];
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
          </div>
          <?php $sform = $toopsbar['form']; ?>
          <div class="servicios-siderbar">
            <div class="servicios-siderbar-form-wrp"> 
              <div class="dft-page-contact-form">
                <div class="dft-page-contact-form-hdr text-center">
                  <?php if(!empty($sform['content'])) echo wpautop($sform['content']); ?>
                </div>
                <div class="dft-page-contact-form-main">
                  <?php if(!empty($sform['shortcode'])) echo do_shortcode($sform['shortcode']); ?>        
                </div>  
              </div>
            </div>
            <?php 
              $tsevs = $toopsbar['services'];
              if($tsevs):
            ?>
            <div class="servicios-siderbar-accordion hide-xs">
              <?php $i= 1; foreach( $tsevs as $tsev): $activeClass = ($i ==2)? ' active': ''; ?>
              <div class="servicios-siderbar-accordion-con<?php echo $activeClass; ?>">
                <div class="servicios-siderbar-accordion-title">
                  <?php 
                  if( !empty( $tsev['title'] ) ) printf( '<span>%s</span>', $tsev['title']); 
                  if(!empty($tsev['icon'])){
                  ?>
                  <i>
                    <img src="<?php echo $tsev['icon']; ?>" alt="<?php echo cbv_get_image_alt( $tsev['icon'] ); ?>" />
                    <?php if(!empty($tsev['hover_icon'])){ ?>
                    <img src="<?php echo $tsev['hover_icon']; ?>" alt="<?php echo cbv_get_image_alt( $tsev['hover_icon'] ); ?>" />
                    <?php } ?>
                  </i>
                  <?php } ?>
                </div>
                <div class="servicios-siderbar-accordion-des">
                  <?php if(!empty($tsev['content'])) echo wpautop($tsev['content']); ?>
                </div>
              </div>  
              <?php $i++; endforeach; ?>          
            </div>
            <?php endif; 
              $promos = $toopsbar['promo'];
              if($promos):
            ?>
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
            <?php endif; ?>
            <div class="siderbarRecentPostSlider-wrp">
              <div class="recentPost-sliderarrows">
                <span class="leftArrow"></span>
                <span class="rightArrow"></span>
              </div>
              <div class="siderbarRecentPostSlider">
                <div class="siderbarRecentPostSlider-item">
                  <div class="siderbarRecentPost-hdr text-center">
                    <h5>Artículos <span>Recientes</span></h5>
                  </div>             
                  <div class="servicios-siderbar-recent-post-innr">
                    <ul class="ulc">
                      <li>
                        <i>
                          <a href="#">
                            <img src="<?php echo THEME_URI; ?>/assets/images/sidebar-recent-post-img-001.jpg" alt="" />
                          </a>                        
                        </i>  
                        <a href="#">Palpitaciones, ¿cuándo debemos preocuparnos?</a>
                        <span class="post-date">Diciembre 11, 2019</span>
                      </li>
                      <li>
                        <i>
                          <a href="#">
                            <img src="<?php echo THEME_URI; ?>/assets/images/sidebar-recent-post-img-002.jpg" alt="" />
                          </a>                        
                        </i>  
                        <a href="#">Los cuidados <br/>postinfarto.</a>
                        <span class="post-date">Diciembre 1, 2019</span>
                      </li>
                      <li>
                        <i>
                          <a href="#">
                            <img src="<?php echo THEME_URI; ?>/assets/images/sidebar-recent-post-img-003.jpg" alt="" />
                          </a>                        
                        </i>  
                        <a href="#">Aspirina: <br/>consideraciones y <br/>recomendaciones</a>
                        <span class="post-date">Diciembre 12, 2019</span>
                      </li>
                    </ul>
                  </div>                    
                </div>
                <div class="siderbarRecentPostSlider-item">
                  <div class="siderbarRecentPost-hdr text-center">
                    <h5>Artículos <span>Recientes</span></h5>
                  </div>             
                  <div class="servicios-siderbar-recent-post-innr">
                    <ul class="ulc">
                      <li>
                        <i>
                          <a href="#">
                            <img src="<?php echo THEME_URI; ?>/assets/images/sidebar-recent-post-img-001.jpg" alt="" />
                          </a>                        
                        </i>  
                        <a href="#">Palpitaciones, ¿cuándo debemos preocuparnos?</a>
                        <span class="post-date">Diciembre 11, 2019</span>
                      </li>
                      <li>
                        <i>
                          <a href="#">
                            <img src="<?php echo THEME_URI; ?>/assets/images/sidebar-recent-post-img-002.jpg" alt="" />
                          </a>                        
                        </i>  
                        <a href="#">Los cuidados <br/>postinfarto.</a>
                        <span class="post-date">Diciembre 1, 2019</span>
                      </li>
                      <li>
                        <i>
                          <a href="#">
                            <img src="<?php echo THEME_URI; ?>/assets/images/sidebar-recent-post-img-003.jpg" alt="" />
                          </a>                        
                        </i>  
                        <a href="#">Aspirina: <br/>consideraciones y <br/>recomendaciones</a>
                        <span class="post-date">Diciembre 12, 2019</span>
                      </li>
                    </ul>
                  </div>                    
                </div>
                <div class="siderbarRecentPostSlider-item">
                  <div class="siderbarRecentPost-hdr text-center">
                    <h5>Artículos <span>Recientes</span></h5>
                  </div>             
                  <div class="servicios-siderbar-recent-post-innr">
                    <ul class="ulc">
                      <li>
                        <i>
                          <a href="#">
                            <img src="<?php echo THEME_URI; ?>/assets/images/sidebar-recent-post-img-001.jpg" alt="" />
                          </a>                        
                        </i>  
                        <a href="#">Palpitaciones, ¿cuándo debemos preocuparnos?</a>
                        <span class="post-date">Diciembre 11, 2019</span>
                      </li>
                      <li>
                        <i>
                          <a href="#">
                            <img src="<?php echo THEME_URI; ?>/assets/images/sidebar-recent-post-img-002.jpg" alt="" />
                          </a>                        
                        </i>  
                        <a href="#">Los cuidados <br/>postinfarto.</a>
                        <span class="post-date">Diciembre 1, 2019</span>
                      </li>
                      <li>
                        <i>
                          <a href="#">
                            <img src="<?php echo THEME_URI; ?>/assets/images/sidebar-recent-post-img-003.jpg" alt="" />
                          </a>                        
                        </i>  
                        <a href="#">Aspirina: <br/>consideraciones y <br/>recomendaciones</a>
                        <span class="post-date">Diciembre 12, 2019</span>
                      </li>
                    </ul>
                  </div>                    
                </div>
              </div>
            </div>
          </div>        
        </div>  
      </div>
    </div>
  </div>    
</section>


<section class="servicios-partner-slider-sec">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="serviciosPartnerSlider-innr-wrp">
          <div class="serviciosPartnerSlider-hdr">
            <h2>aquí vale <span>Tu Seguro médico</span></h2>
          </div>
          <div class="serviciosPartnerSlider-wrp">
            <div class="serviciosPartnerSlider-arrows">
              <span class="leftArrow"></span>
              <span class="rightArrow"></span>
            </div>

            <ul class="ulc clearfix serviciosPartnerSlider">
              <li class="serviciosPartnerSlider-item">
                <i>
                  <img src="<?php echo THEME_URI; ?>/assets/images/partnar-slider-img-001.png" alt="">                
                </i>
              </li>
              <li class="serviciosPartnerSlider-item">
                <i>
                  <img src="<?php echo THEME_URI; ?>/assets/images/partnar-slider-img-002.png" alt="">                
                </i>
              </li>
              <li class="serviciosPartnerSlider-item">
                <i>
                  <img src="<?php echo THEME_URI; ?>/assets/images/partnar-slider-img-003.png" alt="">                
                </i>
              </li>
              <li class="serviciosPartnerSlider-item">
                <i>
                  <img src="<?php echo THEME_URI; ?>/assets/images/partnar-slider-img-004.png" alt="">                
                </i>
              </li>
              <li class="serviciosPartnerSlider-item">
                <i>
                  <img src="<?php echo THEME_URI; ?>/assets/images/partnar-slider-img-005.png" alt="">                
                </i>
              </li>
              <li class="serviciosPartnerSlider-item">
                <i>
                  <img src="<?php echo THEME_URI; ?>/assets/images/partnar-slider-img-003.png" alt="">                
                </i>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>


<section class="noticias-slider-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="noticias-slider-innr-wrp">
          <div class="noticias-slider-hdr">
            <h2>Noticias de Salud <span>y Medicina</span></h2>
            <p>Información, actualidad y noticias sobre salud y enfermedades. <br/>Novedades y avances en medicina a nivel nacional e internacional</p>
          </div>
          <div class="noticiasSlider-wrp">
            <div class="noticiasSlider-arrows">
              <span class="leftArrow"></span>
              <span class="rightArrow"></span>
            </div>          
            <div class="ulc noticiasSlider">
              <div class="noticiasSlider-item">
                <div class="noticiasSlider-grd">
                  <div class="noticiasSlider-grd-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/noticiasSlider-grd-img-001.png" alt="">
                    <a href="#" class="overlay-link"></a>
                  </div>
                  <div class="noticiasSlider-grd-des">
                    <div class="noticiasSlider-date">
                      <span>Oct 18</span>                        
                      <div class="sqew"></div>
                    </div>
                    <p>¿Qué hacer ante un <br> posible infarto o <br> ataque al corazón?</p>
                    <a href="#">Leer Artículo</a>
                  </div>
                </div>
              </div>
              <div class="noticiasSlider-item">
                <div class="noticiasSlider-grd">
                  <div class="noticiasSlider-grd-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/noticiasSlider-grd-img-002.png" alt="">
                    <a href="#" class="overlay-link"></a>
                  </div>
                  <div class="noticiasSlider-grd-des">
                    <div class="noticiasSlider-date">
                      <span>Ago 28</span>                        
                      <div class="sqew"></div>
                    </div>
                    <p>¿Cómo se trata la <br> diabetes?</p>
                    <a href="#">Leer Artículo</a>
                  </div>
                </div>
              </div>
              <div class="noticiasSlider-item">
                <div class="noticiasSlider-grd">
                  <div class="noticiasSlider-grd-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/noticiasSlider-grd-img-003.png" alt="">
                    <a href="#" class="overlay-link"></a>
                  </div>
                  <div class="noticiasSlider-grd-des">
                    <div class="noticiasSlider-date">
                      <span>Ago 17</span>                        
                      <div class="sqew"></div>
                    </div>
                    <p>Cuándo se hace un <br> cateterismo cardíaco</p>
                    <a href="#">Leer Artículo</a>
                  </div>
                </div>
              </div>
              <div class="noticiasSlider-item">
                <div class="noticiasSlider-grd">
                  <div class="noticiasSlider-grd-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/noticiasSlider-grd-img-004.png" alt="">
                    <a href="#" class="overlay-link"></a>
                  </div>
                  <div class="noticiasSlider-grd-des">
                    <div class="noticiasSlider-date">
                      <span>Oct 18</span>                        
                      <div class="sqew"></div>
                    </div>
                    <p>Marcapasos: ¿qué son? <br> ¿Cómo se implanta?</p>
                    <a href="#">Leer Artículo</a>
                  </div>
                </div>
              </div>
              <div class="noticiasSlider-item">
                <div class="noticiasSlider-grd">
                  <div class="noticiasSlider-grd-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/noticiasSlider-grd-img-004.png" alt="">
                    <a href="#" class="overlay-link"></a>
                  </div>
                  <div class="noticiasSlider-grd-des">
                    <div class="noticiasSlider-date">
                      <span>Oct 18</span>                        
                      <div class="sqew"></div>
                    </div>
                    <p>Marcapasos: ¿qué son? <br> ¿Cómo se implanta?</p>
                    <a href="#">Leer Artículo</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php get_footer(); ?>