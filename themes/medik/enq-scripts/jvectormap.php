<?php
wp_enqueue_style('jvectormap-style', get_template_directory_uri() . '/assets/css/jquery-jvectormap-2.0.3.css', array(), array('2.0.3'));
wp_enqueue_script('jvectormap', get_template_directory_uri() . '/assets/js/jquery-jvectormap-2.0.3.min.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('continents-mill', get_template_directory_uri() . '/assets/js/jquery-jvectormap-continents-mill.js', array('jquery'), '1.0.0', true);
wp_enqueue_script('continents-merc', get_template_directory_uri() . '/assets/js/jquery-jvectormap-continents-merc.js', array('jquery'), '1.0.0', true);

?>