<?php get_header(); 

$banner = get_field('slidesec', HOMEID);
if($banner):
  $slides = $banner['slide'];
  
?>
<section class="main-slider-sec-wrp">
  <?php if($slides): ?>
  <div class="mainsliderarrows">
    <span class="leftArrow"><i class="fa fa-angle-left"></i></span>
    <span class="rightArrow"><i class="fa fa-angle-right"></i></span>
  </div>
  <div class="main-slider">
    <?php foreach($slides as $slide): 
      $slideposter = '';
      if(!empty($slide['image'])) $slideposter = cbv_get_image_src($slide['image']);
    ?>
    <div class="main-slide-item">
      <div class="main-slide-item-img" style="background: url(<?php echo $slideposter; ?>);"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="main-slide-item-dsc">
              <?php 
                if( !empty( $slide['title'] ) ) printf( '<h1>%s</h1>', $slide['title']);  
                if( !empty( $slide['content'] ) ) echo wpautop($slide['content']);

                $link1 = $slide['link'];
                if( is_array( $link1 ) &&  !empty( $link1['url'] ) ){
                    printf('<a href="%s" target="%s">%s</a>', $link1['url'], $link1['target'], $link1['title']); 
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach;?>
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
                <span><img src="<?php echo $servicee['icon']; ?>" alt="<?php echo cbv_get_image_alt( $servicee['icon'] ); ?>"></span>
                <span><img src="<?php echo $servicee['hover_icon']; ?>" alt="<?php echo cbv_get_image_alt( $servicee['hover_icon'] ); ?>"></span>
                <?php 
                endif;
                 $link2 = $servicee['link'];
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
<?php endif; ?>
  
<div class="vt-home-form-slider">
<div class="vt-home-form-slide">
  <section class="hm-campaign-grid-sec-wrp vt-form-1-sec-wrap matchHeightCol" style="background: url(<?php echo THEME_URI; ?>/assets/images/hm-campaign-grid-sec-bg.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="hm-campaign-grid-wrp clearfix">
            <div class="hm-campaign-grid-lft-con hide-sm">
              <div class="hm-campaign-grid-lft-img">
                <img src="<?php echo THEME_URI; ?>/assets/images/hm-campaign-grid-lft-img.png">
              </div>
            </div>
            <div class="hm-campaign-grid-rgt-con">
              <div class="hm-campaign-grid-rgt-wrp clearfix">
                <div class="hm-campaign-tp-head clearfix">
                  <span><img src="<?php echo THEME_URI; ?>/assets/images/hm-campaign-tp-icon.png"></span>
                  <h3>COTIZA TU Próxima <span>CAMPAÑA DE VACUNACIÓN</span></h3>
                </div>
                <div class="wpcf7cf_multistep">
                <?php echo do_shortcode('[multi-step-form id="1"]'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<div class="vt-home-form-slide">
  <section class="vt-form-2-sec-wrap matchHeightCol" style="background: url(<?php echo THEME_URI; ?>/assets/images/hm-campaign-grid-sec-bg.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="vt-form-2-sec-des-ctlr" style="background: url(<?php echo THEME_URI; ?>/assets/images/vt-form-2-sec-des-ctlr-bg.jpg);">
            <span class="home-form-2-center-icon"><img src="<?php echo THEME_URI; ?>/assets/images/home-form-2-center-icon.png"></span>
            <div class="vt-form-2-sec-hdr">
              <h3>COTIZA TU Próximo <span>exámenen médico</span></h3>
            </div>

            <div class="wpcf7cf_multistep">
              <div class="wpcf7cf_steps-dots clearfix">
                <div class="dot active" data-step="1">
                  <span class="step-index">1</span>
                </div>
                <div class="dot">
                  <span class="step-index" data-step="2">2</span>
                </div>
                <div class="dot">
                  <span class="step-index" data-step="3">3</span>
                </div>
              </div>
              <div class="wpcf7cf_steps clearfix">
                <div class="wpcf7cf_step clearfix" data-title="one" data-id="step-1">
                  <div class="wpcf7cf_step_inner">
                    <h3>Anote la cantidad, anote cero si no aplica.</h3>
                    <div class="singup-form-field-ctlr">
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Examen Médico">
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Electrocardiograma En Reposo">
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <select>
                              <option>Química Sanguínea</option>
                              <option>Química Sanguínea</option>
                              <option>Química Sanguínea</option>
                              <option>Química Sanguínea</option>
                            </select>
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Biometria Hematica">
                          </span>
                        </p>
                      </div>
                    </div>
                    <div class="singup-form-field-ctlr">
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Examen General de Orina">
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="RX de Torax">
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <select>
                              <option>RX Lumbosacra</option>
                              <option>RX Lumbosacra</option>
                              <option>RX Lumbosacra</option>
                              <option>RX Lumbosacra</option>
                            </select>
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Audiometria Tonal con Camara Sonoamortiguada">
                          </span>
                        </p>
                      </div>
                    </div>
                    <div class="singup-form-field-ctlr">
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Espirometria">
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Antidoping 5 Elementos en Orina">
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Prueba De Esfuerzo">
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Ultrasonido Abdominal">
                          </span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="wpcf7cf_step clearfix" data-title="two" data-id="step-2">
                  <div class="wpcf7cf_step_inner">
                    <h3>Anote la cantidad, anote cero si no aplica.</h3>
                    <div class="singup-form-field-ctlr">
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Ultrasonido Mamario">
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Mastografia">
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Papanicolaou">
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Colposcopia">
                          </span>
                        </p>
                      </div>
                    </div>
                    <div class="singup-form-field-ctlr">
                      <div class="singup-form-field singup-form-field-3">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="number" name="number" placeholder="Antigeno Prostatico">
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field singup-form-field-9">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <textarea placeholder="Otros Estudios"></textarea>
                          </span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="wpcf7cf_step clearfix" data-title="three" data-id="step-3">
                  <div class="wpcf7cf_step_inner">
                    <h3>Anote la cantidad, anote cero si no aplica.</h3>
                    <div class="singup-form-field-ctlr">
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Nombre de la Empresa">
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Contacto">
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Correo Electrónico">
                          </span>
                        </p>
                      </div>
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Teléfono">
                          </span>
                        </p>
                      </div>
                    </div>
                    <div class="singup-form-field-ctlr">
                      <div class="singup-form-field">
                        <p>
                          <span class="wpcf7-form-control-wrap">
                            <input type="text" name="text" placeholder="Numero de Personas">
                          </span>
                      </p>
                    </div>
                    <div class="singup-form-field">
                      <p>
                        <span class="wpcf7-form-control-wrap">
                          <input type="text" name="text" placeholder="Lugar">
                        </span>
                      </p>
                    </div>
                    <div class="singup-form-field">
                      <p>
                        <span class="wpcf7-form-control-wrap">
                          <input type="text" name="text" placeholder="Horario">
                        </span>
                      </p>
                    </div>
                    <div class="singup-form-field">
                      <p>
                        <span class="wpcf7-form-control-wrap">
                          <input type="text" name="text" placeholder="Fecha Probable">
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              </div>
              <div class="wpcf7cf_step_controls clearfix">
                <span class="wpcf7cf_prev-container">
                  <button type="button" class="wpcf7cf_prev">Paso anterior</button></span>
                <span class="wpcf7cf_next-container">
                  <button type="button" class="wpcf7cf_next">siguiente paso</button></span>
              </div>
            </div>


        </div>
      </div>
    </div>
    </div>
  </section>  
</div>

</div>

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
            <div class="hm-laboratory-slide">
              <div class="row">
                <div class="col-md-6 col-sm-12 pull-right">
                  <div class="hm-laboratory-dsc">
                    <h3 class="show-sm">ESTUDIOS CARDIOLÓGICOS <span>Y DE LABO RATORIO</span></h3>
                  </div>
                  <div class="hm-laboratory-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/hm-laboratory-img.png">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="hm-laboratory-dsc">
                    <h3 class="hide-sm">ESTUDIOS CARDIOLÓGICOS <span>Y DE LABO RATORIO</span></h3>
                    <p>Estos estudios pueden ser realizados en nuestras instalaciones o llevamos a su empresa nuestras unidades móviles, puede ver más detalles de este servicio en la sección Salud Ocupacional.</p>
                    <h6>Exámenes de Diagnóstico del Corazó</h6>
                    <ul>
                      <li>Electrocardiograma (ECG o EKG)</li>
                      <li>Electrocardiograma de Promediación de Señales (su sigla en <br> inglés es SAE)</li>
                      <li>Examen de estrés (generalmente con ECG; también llamado ECG <br> en cinta de caminar o ECG  de ejercicio)</li>
                      <li>Ecocardiograma (También llamado “eco”)</li>
                      <li>Ecocardiograma Transesofágico (su sigla en inglés es TEE)</li>
                    </ul>
                    <div class="hm-laboratory-btn">
                      <a class="ornage-btn" href="#">CARDIOLÓGICOS</a>
                      <a class="green-btn" href="#">LABORATORIO</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hm-laboratory-slide">
              <div class="row">
                <div class="col-md-6 col-sm-12 pull-right">
                  <div class="hm-laboratory-dsc">
                    <h3 class="show-sm">ESTUDIOS CARDIOLÓGICOS <span>Y DE LABO RATORIO</span></h3>
                  </div>
                  <div class="hm-laboratory-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/hm-laboratory-img.png">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12 clearfix">
                  <div class="hm-laboratory-dsc">
                    <h3 class="hide-sm">ESTUDIOS CARDIOLÓGICOS <span>Y DE LABO RATORIO</span></h3>
                    <p>Estos estudios pueden ser realizados en nuestras instalaciones o llevamos a su empresa nuestras unidades móviles, puede ver más detalles de este servicio en la sección Salud Ocupacional.</p>
                    <h6>Exámenes de Diagnóstico del Corazó</h6>
                    <ul>
                      <li>Electrocardiograma (ECG o EKG)</li>
                      <li>Electrocardiograma de Promediación de Señales (su sigla en inglés es SAE)</li>
                      <li>Examen de estrés (generalmente con ECG; también llamado ECG en cinta de caminar o ECG de ejercicio)</li>
                      <li>Ecocardiograma (También llamado “eco”)</li>
                      <li>Ecocardiograma Transesofágico (su sigla en inglés es TEE)</li>
                    </ul>
                    <div class="hm-laboratory-btn">
                      <a class="ornage-btn" href="#">CARDIOLÓGICOS</a>
                      <a class="green-btn" href="#">LABORATORIO</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hm-laboratory-slide">
              <div class="row">
                <div class="col-md-6 col-sm-12 pull-right">
                  <div class="hm-laboratory-dsc">
                    <h3 class="show-sm">ESTUDIOS CARDIOLÓGICOS <span>Y DE LABO RATORIO</span></h3>
                  </div>
                  <div class="hm-laboratory-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/hm-laboratory-img.png">
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="hm-laboratory-dsc">
                    <h3 class="hide-sm">ESTUDIOS CARDIOLÓGICOS <span>Y DE LABO RATORIO</span></h3>
                    <p>Estos estudios pueden ser realizados en nuestras instalaciones o llevamos a su empresa nuestras unidades móviles, puede ver más detalles de este servicio en la sección Salud Ocupacional.</p>
                    <h6>Exámenes de Diagnóstico del Corazó</h6>
                    <ul>
                      <li>Electrocardiograma (ECG o EKG)</li>
                      <li>Electrocardiograma de Promediación de Señales (su sigla en inglés es SAE)</li>
                      <li>Examen de estrés (generalmente con ECG; también llamado ECG en cinta de caminar o ECG de ejercicio)</li>
                      <li>Ecocardiograma (También llamado “eco”)</li>
                      <li>Ecocardiograma Transesofágico (su sigla en inglés es TEE)</li>
                    </ul>
                    <div class="hm-laboratory-btn">
                      <a class="ornage-btn" href="#">CARDIOLÓGICOS</a>
                      <a class="green-btn" href="#">LABORATORIO</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of hm-laboratory-content-sec-wrp -->

<?php 
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
            <?php if( !empty( $minsurance['title'] ) ) printf( '<h2 class="sec-hdr-title set-hdr-big-title">%s</h2>', $minsurance['title']); ?>
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
    'posts_per_page'=> 20,
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
                $refImgtag = cbv_get_image_tag($gridImage, 'hmslgrid');
              }else{
                $refImgtag = '<img src="'.THEME_URI.'/assets/images/hm-btm-grid-img-1.png" alt="'.get_the_title().'">';
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