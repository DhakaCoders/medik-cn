<?php 
  $ftitle = get_field('ftitle', 'options');
  $cominfo = get_field('company_info', 'options');
  $logoObj = $cominfo['logo'];
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }

  $spacialArry = array(".", "/", "+", "-", " ", ")", "(");$replaceArray = '';
  $adres = get_field('address', 'options');
  $ftaddress1 = $adres['address_footer'];
  $ftaddress2 = $adres['address_header'];
  $gmapsurl = get_field('google_maps', 'options');
  $telefoon = get_field('telephone', 'options');
  $fttelephone = $telefoon['telephone_footer'];
  $schedulesec = get_field('schedulesec', 'options');
  $Gmapvalues = get_field('Gmapft', 'options');
  $copyright_text = get_field('copyright_text', 'options');
  $gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';

  $fburl = get_field('facebook_url', 'options');
  $youturl = get_field('youtube_url', 'options');
?>
<footer class="footer-wrap">
  <div class="ftr-main text-center" style="background:url(<?php echo THEME_URI; ?>/assets/images/ftr-bg.jpg);">
    <div class="container-2">
      <div class="row">
        <div class="col-sm-12">
          <div class="ftr-innr">
            <div class="ftr-head">
              <?php if(!empty($ftitle)) printf('<h2>%s</h2>', $ftitle); ?>
            </div>
            <div class="ftr-col-wrp clearfix">  
              <div class="ftr-col ftr-col-3">
                <div id="ftr-map" data-lat="<?php echo $Gmapvalues['lat']; ?>" data-long="<?php echo $Gmapvalues['lng']; ?>"></div>
                <?php if( !empty( $ftaddress2 ) ): ?>
                <p><?php echo $ftaddress2; ?>  <a href="<?php echo $gmaplink; ?>" target="_blank">>> (Da Clic Aquí Para Llegar Con Google Maps) <<</a></p>
                <?php  endif;  ?>
              </div>  
              <div class="ftr-col ftr-col-2">
                <ul class="ulc hide-sm">
                  <?php if( !empty( $ftaddress1 ) ) printf('<li><a href="%s">%s</a></li>', $gmaplink, $ftaddress1); ?>
                  <li>
                    <?php _e('<strong>Teléfonos:</strong><br/>', THEME_NAME); ?>
                  <?php 
                    if(!empty($fttelephone)): 
                      $i = 1; $count = 0;
                      $count = count($fttelephone);
                      foreach($fttelephone as $ftphone):
                        $trimphone = trim(str_replace($spacialArry, $replaceArray, $ftphone['telephone']));
                        $brtag = ($i == 2)? '<br/>': '';
                        $hyphen = ($i%2 == 0)? '- ': '';
                  ?>
                  <?php echo $hyphen; ?><a href="tel:<?php echo $trimphone; ?>"><?php echo $ftphone['telephone']; ?></a>
                    <?php echo $brtag; $i++; endforeach; endif; ?>
                  </li>
                  <?php 
                  if($schedulesec): 
                    foreach($schedulesec as $schd):
                  ?>
                  <li>
                    <?php if(!empty($schd['aschedule_time'])) printf('%s', $schd['aschedule_time']); ?>
                  </li> 
                  <?php endforeach; endif; ?>                 
                </ul>
                <ul class="ulc show-sm">
                  <li>
                    <?php _e('<strong>Teléfonos:</strong><br/>', THEME_NAME); ?>
                  <?php 
                  if(!empty($fttelephone)): 
                    $i = 1; $count = 0;
                    $count = count($fttelephone);
                    foreach($fttelephone as $ftphone):
                      $trimphone = trim(str_replace($spacialArry, $replaceArray, $ftphone['telephone']));
                      $brtag = ($i != $count)? '<br/>': '';
                  ?>
                    <a href="tel:<?php echo $trimphone; ?>"><?php echo $ftphone['telephone']; ?></a><?php echo $brtag; ?>
                  <?php $i++; endforeach;  endif; ?>
                  </li>
                  <?php 
                  if($schedulesec): 
                    foreach($schedulesec as $schd):
                  ?>
                  <li>
                    <?php if(!empty($schd['aschedule_time'])) printf('%s', $schd['aschedule_time']); ?>
                  </li> 
                  <?php endforeach; endif; ?>        
                </ul>
                <div class="ftr-social">
                  <?php if(!empty($fburl)): ?>
                  <a href="<?php echo esc_url($fburl); ?>" target="_blank">
                    <img src="<?php echo THEME_URI; ?>/assets/images/ftr-fb.png" alt="" />
                  </a>  
                  <?php endif; if(!empty($youturl)): ?>                
                  <a href="<?php echo esc_url($youturl); ?>" target="_blank">
                    <img src="<?php echo THEME_URI; ?>/assets/images/ftr-yt.png" alt="" />
                  </a>
                 <?php endif; ?>
                </div>
              </div> 
              <div class="ftr-col ftr-col-1">
                <a class="ftr-logo" href="<?php echo esc_url( home_url('/') );?>">
                  <?php echo $logo_tag; ?>
                </a>
                <?php if($cominfo['desc']) echo wpautop( $cominfo['desc']); ?>
              </div> 
            </div> 
            <a class="go-top-btn" href="#">
              <img src="<?php echo THEME_URI; ?>/assets/images/go-top.png" alt="">
            </a> 
          </div>

          <div class="ftr-menu-con show-sm text-center">
          <?php 
            $cmenuOptions = array( 
                'theme_location' => 'cbv_main_menu', 
                'menu_class' => 'clearfix ulc',
                'container' => 'cmnav',
                'container_class' => 'cmainnav'
              );
            wp_nav_menu( $cmenuOptions ); 
          ?> 
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
<script src="<?php echo THEME_URI; ?>/assets/js/shuffle.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/wow.min.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/app.js"></script>
<script src="<?php echo THEME_URI; ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>