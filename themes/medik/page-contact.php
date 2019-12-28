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
$gmapsurl = $contact['gmap_link'];
$dinfo = $contact['director_info'];

$intro = get_field('intro', $thisID);
$beschrijving = get_field('beschrijving');

$gmaplink = !empty($gmapsurl)?$gmapsurl: 'javascript:void()';

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
          <p class="show-xs">Si deseas información más detallada o agendar una visita de valoración, puedes ponerte en contacto con nosotros y con gusto te atenderemos.</p>
          <div class="contact-tel hide-xs">
            <span>Tels. <a href="tel:(55)-5233-2312">(55)-5233-2312</a> • <a href="tel:(55)-5233-2312 ">(55)-5233-2312 </a> • <a href="tel:(55)-5233-6007">(55)-5233-6007</a> • <a href="tel:(55)-5557-5972">(55)-5557-5972</a> • <a href="tel:(55)-5577-5981">(55)-5577-5981</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="contactMap hide-xs" class="contact-map" data-lat="50.844924" data-long="4.352091"></div>
</section>

<section class="contact-info-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-info-wrp clearfix">
          <div class="contact-info-lft">
            <div class="servicios-siderbar-form-wrp show-xs"> 
              <div class="dft-page-contact-form">
                <div class="dft-page-contact-form-hdr text-center">
                  <p>Más información y citas con el</p>
                  <h4>Dr. Alfredo Jalón Constante</h4>
                </div>
                <div class="dft-page-contact-form-main">
                  <form action="">
<input type="text" placeholder="Nombre">
<input type="email" placeholder="Correo Electrónico">
<input type="tel" placeholder="Teléfono">
<div>
<select>
<option>Procedimiento de Interés</option>
<option>Procedimiento de Interés 2</option>
<option>Procedimiento de Interés 3</option>
<option>Procedimiento de Interés 3</option>
</select> 
</div>
<textarea placeholder="Mensaje"></textarea>
<p>Todas las citas son confirmadas por teléfono <br> ,nos pondremos en contacto contigo gracias.</p>
<button>ENVIAR</button>
                  </form>                
                </div>  
              </div>
            </div>
            <div class="contact-info-dsc hide-xs">
              <h4>Enviar Un Mensaje</h4>
            </div>
            <div class="contact-form hide-xs">
              <form class="wpforms-form">
                <div class="wpforms-field-container">
                  <div class="wpforms-field">
                    <div class="wpforms-field-row">
                      <div class="wpforms-one-half">
                        <input type="text" name="" placeholder="Nombre" class="wpforms-field-required">
                      </div>
                      <div class="wpforms-one-half">
                        <input type="text" name="" placeholder="Télefono"  class="wpforms-field-required">
                      </div>
                    </div>
                  </div>
                  <div class="wpforms-field">
                    <div class="wpforms-field-row">
                      <div class="wpforms-one-half">
                        <input type="text" name="" placeholder="Correo" class="wpforms-field-required">
                      </div>
                      <div class="wpforms-one-half">
                        <input type="text" name="" placeholder="Asusto" class="wpforms-field-required">
                      </div>
                    </div>
                  </div>
                  <div class="wpforms-field">
                    <div class="wpforms-one-half">
                      <textarea placeholder="Mensaje"></textarea>
                    </div>
                  </div>
                </div>
                <div class="wpforms-submit-container"><input name="wpforms[id]" type="hidden" value="723" />
                  <input name="wpforms[author]" type="hidden" value="2" />
                  <input name="wpforms[post_id]" type="hidden" value="14" />
                  <button id="wpforms-submit-723" class="wpforms-submit " name="wpforms[submit]" type="submit" value="wpforms-submit" data-alt-text="Sending..." data-submit-text="ENVIAR">ENVIAR</button>
                </div>
              </form>
            </div>
          </div>
          <div class="contact-info-rgt">
            <div class="contact-info-rgt-dsc-wrp">
              <div class="contact-info-rgt-dsc">
                <h4>Contáctanos</h4>
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
                 if(!empty($dinfo['email_address'])) printf('<a class="contact-mail-icon" href="mailto:%s">%s</a>',$dinfo['email_address'], $dinfo['email_address'] ); 
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>

