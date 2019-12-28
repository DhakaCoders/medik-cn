<?php 
  $logoObj = get_field('logo_footer', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }

  $spacialArry = array(".", "/", "+", " ");$replaceArray = '';
  $adres = get_field('address', 'options');
  $ftaddress1 = $adres['address_footer'];
  $ftaddress2 = $adres['address_header'];
  $gmapsurl = get_field('google_maps', 'options');
  $e_mailadres = get_field('emailaddress', 'options');
  /*$show_telefoon = get_field('telephone', 'options');
  $telefoon = trim(str_replace($spacialArry, $replaceArray, $show_telefoon));*/
  $copyright_text = get_field('copyright_text', 'options');
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
  $bwt = get_field('bwt', 'options');

  $fburl = get_field('facebook_url', 'options');
  $twturl = get_field('twitter_url', 'options');
  $insturl = get_field('instagram_url', 'options');
?>
<footer class="footer-wrap">
  <div class="ftr-main text-center" style="background:url(<?php echo THEME_URI; ?>/assets/images/ftr-bg.jpg);">
    <div class="container-2">
      <div class="row">
        <div class="col-sm-12">
          <div class="ftr-innr">
            <div class="ftr-head">
              <h2>¡Qué Esperas, <strong>agenda tu cita Hoy!</strong></h2>
            </div>
            <div class="ftr-col-wrp clearfix">  
              <div class="ftr-col ftr-col-3">
                <div id="ftr-map" data-lat="50.844924" data-long="4.352091"></div>
                <?php if( !empty( $ftaddress2 ) ): ?>
                <p><?php echo $ftaddress2; ?>  <a href="<?php echo $gmaplink; ?>" target="_blank">>> (Da Clic Aquí Para Llegar Con Google Maps) <<</a></p>
                <?php  endif;  ?>
              </div>  
              <div class="ftr-col ftr-col-2">
                <ul class="ulc hide-sm">
                  <?php if( !empty( $ftaddress1 ) ) printf('<li><a href="%s">%s</a></li>', $gmaplink, $ftaddress1); ?>
                  <li>
                    <strong>Teléfonos:</strong><br/>
                    <a href="#">(55) 5233-6007 - (55) 5233-2312</a><br/>
                    <a href="#">(55) 5557-5972 - (55) 55775981</a>
                  </li>
                  <li>
                    <strong>Las citas son de Lunes a Viernes de</strong><br/>
                    <span>9:30a.m. - 7p.m.</span> 
                  </li>                  
                  <li>
                    <span>Sábados de 9.00a.m. a 1p.m.<br/><em>(Trabajamos con Previa Cita)</em></span> 
                  </li>
                </ul>
                <ul class="ulc show-sm">
                  <li>
                    <strong>Teléfonos:</strong><br/>
                    <a href="#">(55) 5233-6007</a><br/>
                    <a href="#">(55) 5233-2312</a><br/>
                    <a href="#">(55) 5557-5972</a><br/>
                    <a href="#">(55) 55775981</a>
                  </li>
                  <li>
                    <strong>Las citas son de Lunes a Viernes de</strong><br/>
                    <span>9:30a.m. - 7p.m.</span> 
                  </li>                  
                  <li>
                    <span>Sábados de 9.00a.m. a 1p.m.<br/><em>(Trabajamos con Previa Cita)</em></span> 
                  </li>
                </ul>
                <div class="ftr-social">
                  <a href="#" target="_blank">
                    <img src="<?php echo THEME_URI; ?>/assets/images/ftr-fb.png" alt="" />
                  </a>                  
                  <a href="#" target="_blank">
                    <img src="<?php echo THEME_URI; ?>/assets/images/ftr-yt.png" alt="" />
                  </a>
                </div>
              </div> 
              <div class="ftr-col ftr-col-1">
                <a class="ftr-logo" href="<?php echo esc_url( home_url('/') );?>">
                  <?php echo $logo_tag; ?>
                </a>
                <p>El objetivo de Medik Rama es ser la primer compañía integradora de servicios de calidad médica y calidez humana a costos accesibles y abierto todo público. Nuestra red esta conformada por los mejores médicos del país, mismos que cuentan con una amplia trayectoria y certificación de acuerdo a su especialidad.</p>
              </div> 
            </div> 
            <a class="go-top-btn" href="#">
              <img src="<?php echo THEME_URI; ?>/assets/images/go-top.png" alt="">
            </a> 
          </div>

          <div class="ftr-menu-con show-sm text-center">
            <ul class="ulc">
              <li>
                <a href="#">inicio</a>
              </li>
              <li class="menu-item-has-children">
                <a href="#">servicios</a>
                <ul class="ulc sub-menu">
                  <li><a href="#">Sub Menu</a></li>
                  <li><a href="#">Sub Menu</a></li>
                  <li><a href="#">Sub Menu</a></li>
                  <li><a href="#">Sub Menu</a></li>
                </ul>
              </li>
              <li>
                <a href="#">citas</a>
              </li>
              <li>
                <a href="#">promociones</a>
              </li>
              <li>
                <a href="#">blog</a>
              </li>
              <li>
                <a href="#">contacto</a>
              </li>

            </ul>  
          </div>
        </div>
      </div>
    </div>   
  </div>

  <div class="ftr-btm-con text-center">
    <?php if( !empty( $copyright_text ) ) printf( '<span>%s</span>', $copyright_text); ?>
  </div>
</footer>


<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/bootstrap-select.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/fancybox3/dist/jquery.fancybox.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/slick.slider/slick.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo2-QJ7RdCkLw3NFZEu71mEKJ_8LczG-c"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/jquery.matchHeight-min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/wow.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/app.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>