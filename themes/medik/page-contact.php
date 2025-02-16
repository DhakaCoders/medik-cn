<?php 
/**
Template Name: Contact
*/

get_header();
$thisID = get_the_ID();

$logoObj = get_field('logo_header', 'options');
if( is_array($logoObj) ){
  $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
}else{
  $logo_tag = '';
}

$spacialArry = array(".", "/", "+", "-", " ", ")", "(");$replaceArray = '';
$contact = get_field('contactus', $thisID);
$hdaddress = $contact['address'];
$telefoon = get_field('telephone', 'options');
$fttelephone = $telefoon['telephone_footer'];
$gmapsurl = $contact['gmap_link'];
$dinfos = $contact['director_info'];

$intro = get_field('introsec', $thisID);

$gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';
$google_map = $intro['google_map'];

?>
<section class="contact-map-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="section-hdr">
          <?php if($intro['title']) printf('<h1 class="sec-hdr-title set-hdr-big-title">%s</h1>', $intro['title']); ?>
          <div class="sec-hdr-title-divider">
            <span><img src="<?php echo THEME_URI; ?>/assets/images/hn-title-icon.png"></span>
          </div>
          <div class="show-xs mk-contact-form-des">
            <?php if($intro['content']) echo wpautop( $intro['content']); ?>
          </div>
          <div class="contact-tel hide-xs">
            <span>Tels. 
              <?php 
                  if($fttelephone): 
                    $i = 1;
                    foreach($fttelephone as $ftphone):
                      $trimphone = trim(str_replace($spacialArry, $replaceArray, $ftphone['telephone']));
                      $listdot = ($i != 1)? ' • ': '';
                ?>
               <?php echo $listdot; ?><a  href="tel:<?php echo $trimphone; ?>"><?php echo $ftphone['telephone']; ?></a>
              <?php $i++; endforeach; endif; ?>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div data-homeurl="<?php echo THEME_URI; ?>" id="contactMap" class="hide-xs" data-latitude="<?php echo $google_map['lat']; ?>" data-longitude="<?php echo $google_map['lng']; ?>" style="width:100%; height:330px"></div>
</section>
<?php 
$dform = get_field('desktop_form', $thisID);
$mform = get_field('mobile_form', $thisID);
?>
<section class="contact-info-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-info-wrp clearfix">
          <div class="contact-info-lft">
            <div class="servicios-siderbar-form-wrp show-xs"> 
              <div class="dft-page-contact-form">
                <div class="dft-page-contact-form-hdr text-center">
                  <?php 
                    if(!empty($mform['title'])) printf('<p>%s</p>', $mform['title']); 
                    if(!empty($mform['doctor_name'])) printf('<h4>%s</h4>', $mform['doctor_name']); 
                  ?>
                </div>
                <div class="dft-page-contact-form-main">
               <?php if(!empty($mform['shortcode'])) echo do_shortcode( $mform['shortcode']); ?>          
                </div>  
              </div>
            </div>
            <div class="contact-info-dsc hide-xs">
              <?php if(!empty($dform['title'])) printf('<h4>%s</h4>', $dform['title']); ?>

            </div>
            <div class="contact-infodesc hide-xs">
              <?php if($dform['content']) echo wpautop( $dform['content']); ?>
            </div>
            <div class="contact-form hide-xs">
              <div class="wpforms-form">
              <?php if(!empty($dform['shortcode'])) echo do_shortcode( $dform['shortcode']); ?>
              </div>
            </div>
          </div>
          <div class="contact-info-rgt">
            <div class="contact-info-rgt-dsc-wrp">
              <div class="contact-info-rgt-dsc">
                <?php _e('<h4>Contáctanos</h4>', THEME_NAME);?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                </a>
              </div>
              <div class="location-dsc">
                <?php if(!empty($hdaddress)): ?>
                <span><a href="<?php echo $gmaplink; ?>"><?php echo $hdaddress; ?></a></span>
                <a href="<?php echo $gmaplink; ?>">Cómo llegar desde tu ubicación</a>
              <?php endif; ?>
              </div>
              <div class="contact-rgt-tel hide-xs">
                <?php 
                  if($fttelephone): 
                    $i = 1;
                    foreach($fttelephone as $ftphone):
                      $trimphone = trim(str_replace($spacialArry, $replaceArray, $ftphone['telephone']));
                      $phoneclass = ($i%2 == 0)? 'green-tel-icon': 'orange-tel-icon';
                ?>
                <a class="<?php echo $phoneclass; ?>" href="tel:<?php echo $trimphone; ?>"><?php echo $ftphone['telephone']; ?></a>
                <?php $i++; endforeach; endif; ?>
              </div>
              <div class="contact-rgt-mail">
                <?php 
                  if(!empty($contact['email_address'])) printf('<a class="contact-mail-icon" href="mailto:%s">%s</a>',$contact['email_address'], $contact['email_address'] ); 
                  if(!empty($contact['website_link'])) printf('<a class="contact-mail-icon-1" href="%s">%s</a>',$contact['website_link'], $contact['website_link'] ); 
                ?>
              </div>
              <?php 
              if($dinfos): 
                foreach( $dinfos as $dinfo):
              ?>
              <div class="contact-profile">
                <?php 
                if(!empty($dinfo['name'])):
                ?>
                <h6><?php echo $dinfo['name']; if(!empty($dinfo['designation'])) printf('<span>%s</span>', $dinfo['designation']); ?></h6>
              <?php endif; ?>
              </div>
              <div class="contact-rgt-mail">
                <?php 
                  if(!empty($dinfo['telephone'])){
                    $trimphone2 = trim(str_replace($spacialArry, $replaceArray, $dinfo['telephone']));
                   printf('<a class="green-tel-icon" href="tel:%s">Cel: %s</a>', $trimphone2, $dinfo['telephone']); 
                 }
                 if(!empty($dinfo['email'])) printf('<a class="contact-mail-icon" href="mailto:%s">%s</a>',$dinfo['email'], $dinfo['email'] ); 
                ?>
              </div>
              <?php endforeach; endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>

