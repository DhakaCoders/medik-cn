<?php
if (!defined('ABSPATH')) {
    exit;
}

//add js, css
add_action('wp_enqueue_scripts', 'cf7mls_frontend_scripts_callback');
function cf7mls_frontend_scripts_callback()
{
    $cf7d_messages_error = '';
    $deps = array('jquery', 'jquery-form');
    $deps = apply_filters('cf7mls_deps_cf7mls_js', $deps);

    wp_register_script('cf7mls', CF7MLS_PLUGIN_URL . '/assets/frontend/js/cf7mls.js', $deps, '1.0', true);
    wp_enqueue_script('cf7mls');

    if (apply_filters('is_using_cf7mls_css', true)) {
        wp_register_style('cf7mls', CF7MLS_PLUGIN_URL . '/assets/frontend/css/cf7mls.css?v=100');
        wp_enqueue_style('cf7mls');
    }
    wp_localize_script(
        'cf7mls',
        'cf7mls_object',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'cf7mls_error_message' => $cf7d_messages_error,
            'scroll_step' => apply_filters('cf7mls-scroll-step', "true"),
            'disable_enter_key' => apply_filters('cf7mls-disable-enter-key', "false"),
            'check_step_before_submit' => apply_filters('cf7mls_check_step_before_submit', "true"),
        )
    );
}

/**
 * Wpcf7 shortcode.
 */
function cf7mls_add_shortcode_step()
{
    wpcf7_add_form_tag(array('cf7mls_step', 'cf7mls_step*'), 'cf7mls_multistep_shortcode_callback', true);
    wpcf7_add_form_tag('cf7mls_preview_step', 'cf7mls_multistep_preview_shortcode_callback');
    wpcf7_add_form_tag('cf7_answer', 'cf7_answer_shortcode_callback', true);
}
add_action('wpcf7_init', 'cf7mls_add_shortcode_step');
function cf7mls_multistep_shortcode_callback($tag)
{
    $tag = new WPCF7_FormTag($tag);
    $back = $next = false;

    if (count($tag->values) == 1) {
        $next = $tag->values[0];
    } elseif (count($tag->values) > 1) {
        $back = $tag->values[0];
        $next = $tag->values[1];
    }

    $html = '';
    if ($back) {
        $html .= '<button type="button" class="cf7mls_back action-button" name="cf7mls_back">' . $back . '</button>';
    }
    if ($next) {
        $html .= '<button type="button" class="cf7mls_next cf7mls_btn action-button" name="cf7mls_next">' . $next . '</button>';
    }
    $html .= '</fieldset><fieldset class="fieldset-cf7mls">';
    return $html;
}

function cf7mls_multistep_preview_shortcode_callback($tag)
{
    $tag = new WPCF7_FormTag($tag);

    $class = wpcf7_form_controls_class($tag->type);

    $atts = array();

    $atts['class'] = $tag->get_class_option($class);
    $atts['id'] = $tag->get_id_option();
    $atts['tabindex'] = $tag->get_option('tabindex', 'int', true);

    $value = isset($tag->values[0]) ? $tag->values[0] : '';

    if (empty($value)) {
        $value = __('Preview', 'cf7mls');
    }
    $atts['value'] = $value;
    $atts['type'] = 'button';

    $atts = wpcf7_format_atts($atts);
    $html = sprintf('<input %1$s />', $atts, $value);

    return $html;
}

function cf7_answer_shortcode_callback($tag)
{
    $tag = new WPCF7_FormTag($tag);

    $class = wpcf7_form_controls_class($tag->type);

    $atts = array();

    $question_field = isset($tag->values[0]) ? $tag->values[0] : '';

    $atts['class'] = $tag->get_class_option($class) . '_' . $question_field;
    $atts['id'] = $tag->get_id_option();
    $atts['tabindex'] = $tag->get_option('tabindex', 'int', true);

    $atts['data-qf'] = $question_field;
    $atts['data-f_name'] = $tag->name;

    $html = sprintf('<span %1$s></span>', wpcf7_format_atts($atts));

    $atts['name'] = $tag->name;
    $atts['type'] = 'hidden';
    $atts['class'] = $tag->get_class_option($class);
    unset($atts['data-f_name']);

    $html .= sprintf('<input %1$s>', wpcf7_format_atts($atts));
    return $html;
}
/**
 * Wrap form
 */
add_filter('wpcf7_form_elements', 'cf7mls_wrap_form_elements_func', 10);
function cf7mls_wrap_form_elements_func($code)
{

    if ($contact_form = wpcf7_get_current_contact_form()) {
        $auto_scroll = get_post_meta($contact_form->id(), '_cf7_mls_auto_scroll_animation', true) == 'off' ? 'no-scroll' : '';
        /* If the form has multistep's shortcode */
        if (strpos($code, '<fieldset class="fieldset-cf7mls')) {
            if (defined('WPCF7_AUTOP') && (WPCF7_AUTOP == true)) {
                $code = preg_replace('#<p>(.*?)<\/fieldset><fieldset class=\"fieldset-cf7mls\"><\/p>#', '$1</fieldset><fieldset class="fieldset-cf7mls">', $code);
            }
            //progress bar
            $progress_bar = '';
            if (get_post_meta($contact_form->id(), '_cf7_mls_enable_progress_bar', true) == '1') {
                $progress_bar = '<ul class="cf7mls_progress_bar">';
                $step_names = get_post_meta($contact_form->id(), '_cf7mls_step_name', true);
                $step_names = maybe_unserialize($step_names);
                $i = 0;
                if (is_array($step_names)) {
                    $style = '';
                    if (count($step_names) > 0) {
                        $style = 'width: calc(' . (100 / count($step_names)) . '%);';
                    }
                    foreach ($step_names as $k => $v) {
                        $class = '';
                        if ($i === 0) {
                            $class = 'active current';
                        }

                        $progress_bar .= sprintf('<li class="%2$s" style="%3$s">%1$s</li>', $v, $class, $style);
                        $i++;
                    }
                }
                $progress_bar .= '</ul>';
            }
            $code = $progress_bar . '<div class="fieldset-cf7mls-wrapper ' . $auto_scroll . '"><fieldset class="fieldset-cf7mls">' . $code;
            // if (substr($code, -6) == '</div>') {
            //     substr_replace($string, "", -6);
            // }

            if (apply_filters('wpcf7-auto-insert-back-button-on-last-step', true)) {
                $last_back_button_title = __('Back', 'cf7mls');
                $last_back_button_bgcolor = '';
                $last_back_button_textcolor = '';

                $_last_back_button_title = get_post_meta($contact_form->id(), '_cf7mls_back_button_title', true);
                if ($_last_back_button_title) {
                    $last_back_button_title = $_last_back_button_title;
                }

                $_last_back_button_bgcolor = get_post_meta($contact_form->id(), '_cf7mls_back_button_bgcolor', true);
                if ($_last_back_button_bgcolor) {
                    $last_back_button_bgcolor = 'background-color: ' . $_last_back_button_bgcolor . ';';
                }
                $_last_back_button_textcolor = get_post_meta($contact_form->id(), '_cf7mls_back_button_textcolor', true);
                if ($_last_back_button_textcolor) {
                    $last_back_button_textcolor = 'color: ' . $_last_back_button_textcolor . ';';
                }

                $code .= sprintf('<input type="button" value="%1$s" style="%2$s" class="cf7mls_back action-button" name="cf7mls_back">', esc_attr($last_back_button_title), $last_back_button_bgcolor . $last_back_button_textcolor);
            }
            $code .= '</fieldset></div>';
        }
    }

    return $code;
}

//add css to wp_head
add_action('wp_head', 'cf7mls_css_to_wp_head');
function cf7mls_css_to_wp_head()
{
    $args = array(
        'post_type' => 'wpcf7_contact_form',
        'post_status' => 'publish',
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        echo '<style type="text/css">';
        while ($query->have_posts()) {
            $query->the_post();
            $id = get_the_id();
            $next_bg_color = get_post_meta($id, '_cf7mls_next_bg_color', true);
            $next_text_color = get_post_meta($id, '_cf7mls_next_text_color', true);

            $back_bg_color = get_post_meta($id, '_cf7mls_back_bg_color', true);
            $back_text_color = get_post_meta($id, '_cf7mls_back_text_color', true);

            echo 'div[id^="wpcf7-f' . $id . '-p"] button.cf7mls_next { ' . ((!empty($next_bg_color)) ? 'background-color: ' . $next_bg_color . ';' : '') . ' ' . ((!empty($next_text_color)) ? 'color: ' . $next_text_color : '') . ' }';
            echo 'div[id^="wpcf7-f' . $id . '-p"] button.cf7mls_back { ' . ((!empty($back_bg_color)) ? 'background-color: ' . $back_bg_color . ';' : '') . ' ' . ((!empty($back_text_color)) ? 'color: ' . $back_text_color : '') . ' }';
        }
        echo '</style>';
    }
    wp_reset_postdata();
}
