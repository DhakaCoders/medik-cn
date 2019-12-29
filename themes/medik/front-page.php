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
    <?php foreach($slides as $slide): ?>
    <div class="main-slide-item">
      <div class="main-slide-item-img" style="background: url(<?php echo THEME_URI; ?>/assets/images/main-slider-sec-bg.png);"></div>
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
<?php endif; ?>

<section class="hm-service-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="section-hdr">
          <h2 class="sec-hdr-title set-hdr-big-title">Servicios <span style="color: #fd6607;">medik Rama</span>
          </h2>
          <div class="sec-hdr-title-divider">
            <span><img src="<?php echo THEME_URI; ?>/assets/images/hn-title-icon.png"></span>
          </div>
          <p>Calidad Médica y Calidez Humana a Costos Accesibles</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="hm-service-wrp">
          <div class="sersliderarrows">
            <span class="leftArrow"><i class="fa fa-angle-left"></i></span>
            <span class="rightArrow"><i class="fa fa-angle-right"></i></span>
          </div>
          <div class="hm-service-slider">
            <div class="hm-service-slide-item matchHeight">
              <div class="hm-service-slide-item-dsc matchHeightCol">
                <div class="hm-service-slide-item-hover" style="background: url(<?php echo THEME_URI; ?>/assets/images/service-box-img-hover.png);"></div>
                <div class="hm-service-slide-item-hover"></div>
                <span><img src="<?php echo THEME_URI; ?>/assets/images/service-icon-1.png"></span>
                <span><img src="<?php echo THEME_URI; ?>/assets/images/service-icon-w-1.png"></span>
                <h4><a href="#">Salud <br> Ocupacional</a></h4>
                <p>Consiste  en la planeación y  ejecución  de  actividades de medicina, seguridad e higiene industrial , que tienen como objetivo  mantener y mejorar la salud de los trabajadores en las empresas.</p>
                <a href="#">leer más</a>
              </div>
            </div>
            <div class="hm-service-slide-item matchHeight">
              <div class="hm-service-slide-item-dsc matchHeightCol">
                <div class="hm-service-slide-item-hover" style="background: url(<?php echo THEME_URI; ?>/assets/images/service-box-img-hover.png);"></div>
                <span><img src="<?php echo THEME_URI; ?>/assets/images/service-icon-2.png"></span>
                <span><img src="<?php echo THEME_URI; ?>/assets/images/service-icon-w-2.png"></span>
                <h4><a href="#">Campaña de <br> Vacunación</a></h4>
                <p>La vacunación es una inversión saludable y rentable, ya que reduce las posibilidades de que los colaboradores de tu empresa adquieran enfermedades infecciosas. Además, disminuye el ausentismo y mejora la productividad laboral.</p>
                <a href="#">leer más</a>
              </div>
            </div>
            <div class="hm-service-slide-item matchHeight">
              <div class="hm-service-slide-item-dsc matchHeightCol">
                <div class="hm-service-slide-item-hover" style="background: url(<?php echo THEME_URI; ?>/assets/images/service-box-img-hover.png);"></div>
                <span><img src="<?php echo THEME_URI; ?>/assets/images/service-icon-3.png"></span>
                <span><img src="<?php echo THEME_URI; ?>/assets/images/service-icon-w-3.png"></span>
                <h4><a href="#">Estudios <br> Médicos</a></h4>
                <p>Contamos con una amplia gama de exstudios médicos, Holter de arritmias,  Ecocardiograma transtorácico, Prueba de esfuerzo,  Electrocardiograma,  Holter de presión (M.A.P.A), Espirometría,  Exámenes de ingresos y  Laboratorio clínico</p>
                <a href="#">leer más</a>
              </div>
            </div>
            <div class="hm-service-slide-item matchHeight">
              <div class="hm-service-slide-item-dsc matchHeightCol">
                <div class="hm-service-slide-item-hover" style="background: url(<?php echo THEME_URI; ?>/assets/images/service-box-img-hover.png);"></div>
                <span><img src="<?php echo THEME_URI; ?>/assets/images/service-icon-1.png"></span>
                <span><img src="<?php echo THEME_URI; ?>/assets/images/service-icon-w-1.png"></span>
                <h4><a href="#">Salud <br> Ocupacional</a></h4>
                <p>Consiste  en la planeación y  ejecución  de  actividades de medicina, seguridad e higiene industrial , que tienen como objetivo  mantener y mejorar la salud de los trabajadores en las empresas.</p>
                <a href="#">leer más</a>
              </div>
            </div>
            
        
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
                    <div class="dot">
                      <span class="step-index" data-step="4">4</span>
                    </div>
                  </div>
                  <div class="wpcf7cf_steps clearfix">
                    <div class="wpcf7cf_step clearfix" data-title="one" data-id="step-1">
                      <div class="wpcf7cf_step_inner">
                        <h3>Anote el número aproximado de personas a vacunar, anote cero si no aplica.</h3>
                        <div class="singup-form-field-ctlr">
                          <div class="singup-form-field">
                            <p>
                              <span class="wpcf7-form-control-wrap">
                                <input type="number" name="number" placeholder="# Niños (6meses -18 años)">
                              </span>
                            </p>
                          </div>
                          <div class="singup-form-field">
                            <p>
                              <span class="wpcf7-form-control-wrap">
                                <input type="text" name="text" placeholder="# Adultos">
                              </span>
                            </p>
                          </div>
                        </div>
                        <div class="singup-form-field-ctlr">
                          <div class="singup-form-field">
                            <p>
                              <span class="wpcf7-form-control-wrap">
                                <input type="text" name="text" placeholder="# Embarazadas">
                              </span>
                            </p>
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="wpcf7cf_step clearfix" data-title="tow" data-id="step-2">
                      <div class="wpcf7cf_step_inner">
                        <h3>Anote el número aproximado de vacunas requeridas por tipo, si no la requiere anote cero:</h3>
                        <div class="singup-form-field-ctlr">
                          <div class="singup-form-field">
                            <p>
                              <span class="wpcf7-form-control-wrap">
                                <input type="text" name="text" placeholder="# VPH">
                              </span>
                            </p>
                          </div>
                          <div class="singup-form-field">
                            <p>
                              <span class="wpcf7-form-control-wrap">
                                <input type="text" name="text" placeholder="# Tétanos">
                              </span>
                            </p>
                          </div>
                        </div>
                        <div class="singup-form-field-ctlr">
                          <div class="singup-form-field">
                            <p>
                              <span class="wpcf7-form-control-wrap">
                                <input type="text" name="text" placeholder="# Hepatitis A">
                              </span>
                            </p>
                          </div>
                          <div class="singup-form-field">
                            <p>
                              <span class="wpcf7-form-control-wrap">
                                <input type="text" name="text" placeholder="# Hepatitis B">
                              </span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpcf7cf_step clearfix" data-title="three" data-id="step-3">
                      <div class="wpcf7cf_step_inner">
                        <h3>Por favor seleccionar si el servicio es local o foraneo y anotar el horario de la aplicación.</h3>
                        <div class="singup-form-field-ctlr">
                          <div class="singup-form-field">
                            <p>
                              <span class="wpcf7-form-control-wrap">
                                <select>
                                  <option>Servicio Local</option>
                                  <option>Servicio Local</option>
                                  <option>Servicio Local</option>
                                  <option>Servicio Local</option>
                                </select>
                              </span>
                            </p>
                          </div>
                          <div class="singup-form-field">
                            <p>
                              <span class="wpcf7-form-control-wrap">
                                <input type="text" name="text" placeholder="Horario de aplicación (00:00 hrs)">
                              </span>
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpcf7cf_step clearfix" data-title="four" data-id="step-4">
                      <div class="wpcf7cf_step_inner">
                        <h3>En caso de haber seleccionado servicio foráneo, liste las localidades y número estimado de personas por cada una, puede utilizar este campo para anexar comentarios que considere necesarios para su cotización </h3>
                        <div class="singup-form-field-ctlr">
                          <div class="singup-form-txt-field">
                            <p>
                              <span class="wpcf7-form-control-wrap">
                                <textarea placeholder="Ejemplo: Cuernavaca, Morelos (80 personas), Ixtapan De La Sal (30 personas), etc. + Comentarios extra"></textarea>
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
            <h2 class="sec-hdr-title set-hdr-big-title">aquí vale <span style="color: #fd6607;">Tu Seguro médico </span>
            </h2>
            <div class="sec-hdr-title-divider">
              <span><img src="<?php echo THEME_URI; ?>/assets/images/hn-title-icon.png"></span>
            </div>
          </div>
          <div class="hm-brand-logo">
            <ul id="HmBrandLogoSlider">
              <li><img src="<?php echo THEME_URI; ?>/assets/images/partnar-slider-img-001.png"></li>
              <li><img src="<?php echo THEME_URI; ?>/assets/images/partnar-slider-img-002.png"></li>
              <li><img src="<?php echo THEME_URI; ?>/assets/images/partnar-slider-img-003.png"></li>
              <li><img src="<?php echo THEME_URI; ?>/assets/images/partnar-slider-img-004.png"></li>
              <li><img src="<?php echo THEME_URI; ?>/assets/images/partnar-slider-img-005.png"></li>
              <li><img src="<?php echo THEME_URI; ?>/assets/images/partnar-slider-img-001.png"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- end of hm-brand-logo-sec-wrp -->

<section class="hm-btm-grid-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="section-hdr">
          <h2 class="sec-hdr-title set-hdr-big-title">Noticias de Salud<span style="color: #fd6607;">y Medicina</span>
          </h2>
          <div class="sec-hdr-title-divider">
            <span><img src="<?php echo THEME_URI; ?>/assets/images/hn-title-icon.png"></span>
          </div>
          <p>Información, actualidad y noticias sobre salud y enfermedades. <br> Novedades y avances en medicina a nivel nacional e internacional</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="hm-btm-grid-slider-wrp">
          <div class="hmgirdarrows">
            <span class="leftArrow"><i class="fa fa-angle-left"></i></span>
            <span class="rightArrow"><i class="fa fa-angle-right"></i></span>
          </div>
            <div class="HmbtmGridSlider">
              <div class="HmbtmGridSlide-item">
                <div class="HmbtmGridSlide-item-hover">
                  <div class="hm-btm-grid-dsc-inr">
                    <div class="hm-btm-grid-img">
                      <img src="<?php echo THEME_URI; ?>/assets/images/hm-btm-grid-img-1.png">
                    </div>
                    <div class="hm-btm-grid-dsc">
                      <strong>Oct 18</strong>
                      <h6><a href="#">¿Qué hacer ante un <br> posible infarto o <br> ataque al corazón?</a></h6>
                    </div>
                    <div class="hm-btm-grid-dsc-btn">
                      <a href="#">Leer Artículo</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="HmbtmGridSlide-item">
                <div class="hm-btm-grid-dsc-inr hm-btm-grid-orange">
                  <div class="hm-btm-grid-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/hm-btm-grid-img-2.png">
                  </div>
                  <div class="hm-btm-grid-dsc">
                    <strong>Oct 11</strong>
                    <h6><a href="#">¿Cómo se trata la <br> diabetes?</a></h6>
                  </div>
                  <div class="hm-btm-grid-dsc-btn">
                    <a href="#">Leer Artículo</a>
                  </div>
                </div>
              </div>
              <div class="HmbtmGridSlide-item">
                <div class="hm-btm-grid-dsc-inr">
                  <div class="hm-btm-grid-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/hm-btm-grid-img-3.png">
                  </div>
                  <div class="hm-btm-grid-dsc">
                    <strong>ago 28</strong>
                    <h6><a href="#">Cuándo se hace un <br> cateterismo cardíaco</a></h6>
                  </div>
                  <div class="hm-btm-grid-dsc-btn">
                    <a href="#">Leer Artículo</a>
                  </div>
                </div>
              </div>
              <div class="HmbtmGridSlide-item">
                <div class="hm-btm-grid-dsc-inr hm-btm-grid-orange">
                  <div class="hm-btm-grid-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/hm-btm-grid-img-4.png">
                  </div>
                  <div class="hm-btm-grid-dsc">
                    <strong>ago 17</strong>
                    <h6><a href="#">Marcapasos: ¿qué son? <br> ¿Cómo se implanta?</a></h6>
                  </div>
                  <div class="hm-btm-grid-dsc-btn">
                    <a href="#">Leer Artículo</a>
                  </div>
                </div>
              </div>
              <div class="HmbtmGridSlide-item">
                <div class="hm-btm-grid-dsc-inr hm-btm-grid-orange">
                  <div class="hm-btm-grid-img">
                    <img src="<?php echo THEME_URI; ?>/assets/images/hm-btm-grid-img-4.png">
                  </div>
                  <div class="hm-btm-grid-dsc">
                    <strong>ago 17</strong>
                    <h6><a href="#">Marcapasos: ¿qué son? <br> ¿Cómo se implanta?</a></h6>
                  </div>
                  <div class="hm-btm-grid-dsc-btn">
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
</section><!-- end of hm-btm-grid-sec-wrp -->
<?php get_footer(); ?>