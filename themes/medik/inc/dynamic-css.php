<?php 
/**
Main slider
*/
global $dcss;
$dcss = '';
$banner = get_field('slidesec', HOMEID);
if($banner):
$slides = $banner['slide'];
	if($slides):
		$i = 1;
		foreach($slides as $slide): 
	      $bc1 = $slide['button_color_1'];
	      $bc2 = $slide['button_color_2'];
	      $btc = $slide['button_text_color'];
	      $bthc = $slide['button_text_hover'];
	      
	      $bbg1 = mediKhex2rgba($bc1);
	      $bbg2 = mediKhex2rgba($bc2);
	      
	      $dcss .= ".slide-".$i ." .main-slide-item-dsc a{
	background: {$bbg1};
	background: -moz-linear-gradient(-45deg,     {$bbg1} 0%, {$bbg2} 100%);
	background: -webkit-linear-gradient(-45deg,  {$bbg1} 0%, {$bbg2} 100%);
	background: linear-gradient(135deg,          {$bbg1} 0%, {$bbg2} 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='{$bc1}',endColorstr='{$bc2}',GradientType=1 );
	color: {$btc};
	fill:  {$btc};     	
	      }";
	      $dcss .= ".slide-".$i ." .main-slide-item-dsc a:hover{
	color: {$bthc};
	fill:  {$bthc};     		      	
	      }";			
		$i++; endforeach;
	endif;
endif;

function dynamic_css(){
	global $dcss;
	?>
	<style type="text/css">
		<?php echo $dcss; ?>
	</style>
	<?php
}

add_action('wp_footer','dynamic_css');