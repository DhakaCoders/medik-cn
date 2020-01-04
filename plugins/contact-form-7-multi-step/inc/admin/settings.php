<?php
if (!defined('ABSPATH')) {
    exit;
}
add_filter('wpcf7_editor_panels', 'cf7mls_admin_settings');
function cf7mls_admin_settings($panels)
{
    $panels['cf7mls-settings-panel'] = array(
        'title' => __('Multi-Step Settings', 'cf7mls'),
        'callback' => 'cf7mls_settings_func',
    );
    $panels['cf7mls-progress-bar'] = array(
        'title' => __('Progress Bar', 'cf7mls'),
        'callback' => 'cf7mls_progress_bar_func',
    );
    return $panels;
}
function cf7mls_settings_func($post)
{
    ?>
    <h2><?php echo esc_html(__('Color', 'cf7mls')); ?></h2>
    <fieldset>
        <legend><?php _e('You can change the background-color or text-color of Back, Next buttons here.', 'cf7mls');?></legend>

        <strong><?php _e('Back Button', 'cf7mls');?></strong>

        <?php _e('BG color', 'cf7mls');?>
        <input type="text" class="cf7mls-color-field" name="back-btn-bg-color" value="<?php echo $post->prop('cf7mls_back_bg_color'); ?>" />

        <?php _e('Text color', 'cf7mls');?>
        <input type="text" class="cf7mls-color-field" name="back-btn-text-color" value="<?php echo $post->prop('cf7mls_back_text_color'); ?>" />
        <br />

        <strong><?php _e('Next Button', 'cf7mls');?></strong>

        <?php _e('BG color', 'cf7mls');?>
        <input type="text" class="cf7mls-color-field" name="next-btn-bg-color" value="<?php echo $post->prop('cf7mls_next_bg_color'); ?>" />

        <?php _e('Text color', 'cf7mls');?>
        <input type="text" class="cf7mls-color-field" name="next-btn-text-color" value="<?php echo $post->prop('cf7mls_next_text_color'); ?>" />
    </fieldset>
    <h2><?php echo esc_html(__('The Last Back Button ', 'cf7mls')); ?></h2>
    <fieldset>
        <strong><?php _e('Title', 'cf7mls');?></strong><br />
        <input type="text" class="regular-text" name="last-back-btn-title" value="<?php echo $post->prop('cf7mls_back_button_title'); ?>" />
        <br />
        <strong><?php _e('Background Color', 'cf7mls');?></strong><br />
        <input type="text" class="cf7mls-color-field" name="last-back-btn-bgcolor" value="<?php echo $post->prop('cf7mls_back_button_bgcolor'); ?>" />
        <br />
        <strong><?php _e('Text Color', 'cf7mls');?></strong><br />
        <input type="text" class="cf7mls-color-field" name="last-back-btn-textcolor" value="<?php echo $post->prop('cf7mls_back_button_textcolor'); ?>" />
    </fieldset>
    <h2><?php echo esc_html(__('Scroll Animation', 'cf7mls')); ?></h2>
    <fieldset>
        <input type="checkbox" name="auto-scroll-animation" <?php echo ($post->prop('cf7_mls_auto_scroll_animation') ? 'checked' : ''); ?> value="off" />
        <strong><?php _e('Turn off', 'cf7mls');?></strong>
    </fieldset>

    <?php
if (cf7mls_is_active_cf7db()) {
        ?>
        <h2><?php echo esc_html(__('Save to database', 'cf7mls')); ?></h2>
        <fieldset>
            <p class="description">
                <label for="cf7mls_db_save_every_step">
                    <?php _e('Save form\'s every step?', 'cf7mls');?>
                    <br />
                    <input type="checkbox" name="cf7mls_db_save_every_step" value="yes" id="cf7mls_db_save_every_step" <?php echo checked($post->prop('cf7mls_db_save_every_step'), 'yes'); ?> />
                </label>
            </p>
        </fieldset>
        <?php
}
}
function cf7mls_progress_bar_func($post)
{
    $cf7mls_step_name = maybe_unserialize($post->prop('cf7mls_step_name'));

    if (($cf7mls_step_name == '') || ($cf7mls_step_name == '[]')) {
        $cf7mls_step_name = array();
    }
    //print_r($cf7mls_step_name);exit();
    //$cf7mls_step_name = array();
    ?>
    <h2><?php echo esc_html(__('Progress Bar', 'cf7mls')); ?></h2>

    <input type="checkbox" name="cf7_mls_enable_progress_bar" id="cf7_mls_enable_progress_bar" value="1" <?php checked($post->prop('cf7_mls_enable_progress_bar'), '1')?>>
    <label for="cf7_mls_enable_progress_bar">
        <?php _e('Enable ?', 'cf7mls');?>
    </label>

    <ul id="cf7_mls_list_step_name">
        <?php
foreach ($cf7mls_step_name as $k => $v) {
        ?>
            <li>
                <input type="text" name="cf7mls_step_name[]" value="<?php echo esc_attr($v); ?>" class="regular-text" placeholder="<?php _e('Name', 'cf7mls');?>" />
            </li>
            <?php
}
    ?>
    </ul>
    <script type="text/html" id="cf7_mls_list_step_name_html">
        <li>
            <input type="text" name="cf7mls_step_name[]" value="" class="regular-text" placeholder="<?php _e('Name', 'cf7mls');?>" />
        </li>
    </script>
    <?php
}
add_filter('wpcf7_contact_form_properties', 'cf7mls_form_properties');
function cf7mls_form_properties($properties)
{
    $more_properties = array(
        'cf7mls_back_bg_color' => '',
        'cf7mls_back_text_color' => '',
        'cf7mls_next_bg_color' => '',
        'cf7mls_next_text_color' => '',
        'cf7mls_db_save_every_step' => '',
        'cf7mls_back_button_title' => '',
        'cf7mls_back_button_bgcolor' => '',
        'cf7mls_back_button_textcolor' => '',
        'cf7mls_step_name' => json_encode(array()),
        'cf7_mls_enable_progress_bar' => '0',
        'cf7_mls_auto_scroll_animation' => '',
    );
    return array_merge($more_properties, $properties);
}

add_action('wpcf7_save_contact_form', 'cf7mls_save_contact_form');
function cf7mls_save_contact_form($contact_form)
{
    $properties = $contact_form->get_properties();

    if (isset($_POST['back-btn-bg-color'])) {
        $properties['cf7mls_back_bg_color'] = trim($_POST['back-btn-bg-color']);
    }
    if (isset($_POST['back-btn-text-color'])) {
        $properties['cf7mls_back_text_color'] = trim($_POST['back-btn-text-color']);
    }
    if (isset($_POST['next-btn-bg-color'])) {
        $properties['cf7mls_next_bg_color'] = trim($_POST['next-btn-bg-color']);
    }
    if (isset($_POST['next-btn-text-color'])) {
        $properties['cf7mls_next_text_color'] = trim($_POST['next-btn-text-color']);
    }
    if (isset($_POST['cf7mls_db_save_every_step'])) {
        $properties['cf7mls_db_save_every_step'] = 'yes';
    } else {
        $properties['cf7mls_db_save_every_step'] = 'no';
    }
    if (isset($_POST['last-back-btn-title'])) {
        $properties['cf7mls_back_button_title'] = wp_unslash($_POST['last-back-btn-title']);
    }
    if (isset($_POST['last-back-btn-bgcolor'])) {
        $properties['cf7mls_back_button_bgcolor'] = wp_unslash($_POST['last-back-btn-bgcolor']);
    }
    if (isset($_POST['last-back-btn-textcolor'])) {
        $properties['cf7mls_back_button_textcolor'] = wp_unslash($_POST['last-back-btn-textcolor']);
    }
    if (isset($_POST['cf7mls_step_name'])) {
        $properties['cf7mls_step_name'] = maybe_serialize($_POST['cf7mls_step_name']);
    }
    if (isset($_POST['auto-scroll-animation'])) {
        $properties['cf7_mls_auto_scroll_animation'] = trim($_POST['auto-scroll-animation']);
    } else {
        $properties['cf7_mls_auto_scroll_animation'] = '';
    }
    if (isset($_POST['cf7_mls_enable_progress_bar'])) {
        $properties['cf7_mls_enable_progress_bar'] = intval($_POST['cf7_mls_enable_progress_bar']);
    } else {
        $properties['cf7_mls_enable_progress_bar'] = '0';
    }
    $contact_form->set_properties($properties);
}
