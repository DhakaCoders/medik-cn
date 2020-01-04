<?php

if ( ! defined('ABSPATH')) {
    exit;
}

//add js, css
add_action('admin_enqueue_scripts', 'cf7mls_admin_scripts_callback');
function cf7mls_admin_scripts_callback($hook_suffix)
{
    $load_js_css = false;
    if ((substr($hook_suffix, -15) == '_page_wpcf7-new') || ($hook_suffix == 'toplevel_page_wpcf7')) {
        $load_js_css = true;
    }
    if ($load_js_css === true) {
        wp_enqueue_style('wp-color-picker');
        wp_enqueue_script('wp-color-picker');
        
        wp_register_script('cf7mls', CF7MLS_PLUGIN_URL . '/assets/admin/js/cf7mls.js', array('jquery'));
        wp_enqueue_script('cf7mls');
        
        wp_register_style('cf7mls', CF7MLS_PLUGIN_URL . '/assets/admin/css/cf7mls.css');
        wp_enqueue_style('cf7mls');
    }
}

/**
 * Add step buttin to the wpcf7 tag generator.
 */
function cf7mls_add_tag_generator_multistep()
{
    if (class_exists('WPCF7_TagGenerator')) {
        $tag = WPCF7_TagGenerator::get_instance();
        $tag->add(
            'cf7mls_step',
            __('Step', 'cf7mls'),
            'cf7mls_multistep_tag_generator_callback'
        );
        $tag->add(
            'cf7_answer',
            __('Njt Answer', 'cf7mls'),
            'cf7mls_multistep_njt_answer_generator_callback',
            array('nameless' => true)
        );
        $tag->add(
            'cf7mls_preview_step',
            __('Preview', 'cf7mls'),
            'cf7mls_multistep_preview_tag_generator_callback',
            array('nameless' => true)
        );
    }
}
add_action('admin_init', 'cf7mls_add_tag_generator_multistep', 30);
/**
 * [cf7mls_multistep_tag_generator_callback description]
 */
function cf7mls_multistep_tag_generator_callback($contact_form, $args = '')
{
    $args = wp_parse_args($args, array());
?>
<div class="control-box">
    <fieldset>
        <legend><?php _e('Generate buttons for form\'s steps.', 'cf7mls');?></legend>
        <table class="form-table cf7mls-table">
            <tbody>
                <tr>
                    <th scope="row"><label for="tag-generator-panel-cf7mls_step-name"><?php _e('Name', 'cf7mls'); ?></label></th>
                    <td><input type="text" id="tag-generator-panel-cf7mls_step-name" class="tg-name oneline" name="name"></td>
                </tr>
                <tr>
                    <th scope="row">                        
                        <label for="tag-generator-panel-cf7mls_step-btns-title"><?php _e('Back, Next Buttons Title', 'cf7mls'); ?></label>
                    </th>
                    <td>
                        <textarea name="values" id="tag-generator-panel-cf7mls_step-btns-title" class="cf7mls-values"><?php echo "Back\nNext"; ?></textarea>
                        <br />
                        <label for="tag-generator-panel-cf7mls_step-back">
                            <span class="description"><?php _e('One title per line. Back Button\'s title on the first line and Next Button\'s title on the second line.<br />If this is a first step, type only one line for Next Button', 'cf7mls'); ?></span>
                        </label>
                    </td>
                </tr>
            </tbody>
        </table>
    </fieldset>
</div>
<div class="insert-box">
    
    <input type="text" name="cf7mls_step" class="tag code" readonly="readonly" onfocus="this.select()" />

    <div class="submitbox">
        <input type="button" class="button button-primary insert-tag" value="<?php echo esc_attr(__('Insert Tag', 'cf7mls')); ?>" />
    </div>

    <br class="clear" />

    <p class="description mail-tag"><label><?php echo esc_html(__("This field should not be used on the Mail tab.", 'cf7mls')); ?></label>
    </p>
</div>
<?php
}
function cf7mls_multistep_njt_answer_generator_callback($contact_form, $args = '')
{
    $args = wp_parse_args($args, array());
    ?>
    <div class="control-box">
        <fieldset>
            <legend><?php _e('Generate Answer Field.', 'cf7mls');?></legend>
            <table class="form-table cf7mls-table">
                <tbody>
                    <tr>
                        <th scope="row">
                            <label for="tag-generator-panel-cf7_answer-name"><?php _e('Name', 'cf7mls'); ?></label>
                        </th>
                        <td>
                            <input type="text" id="tag-generator-panel-cf7_answer-name" class="oneline" name="name" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="tag-generator-panel-cf7_answer-qf"><?php _e('Choose Question Field', 'cf7mls'); ?></label>
                        </th>
                        <td>
                            <input type="text" id="tag-generator-panel-cf7_answer-qf" class="oneline" name="values" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="tag-generator-panel-cf7_answer-id"><?php _e('Id attribute', 'cf7mls'); ?></label>
                        </th>
                        <td>
                            <input type="text" id="tag-generator-panel-cf7_answer-id" class="idvalue oneline option" name="id" />
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="tag-generator-panel-cf7_answer-class"><?php _e('Class attribute', 'cf7mls'); ?></label>
                        </th>
                        <td>
                            <input type="text" id="tag-generator-panel-cf7_answer-class" class="classvalue oneline option" name="class" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </fieldset>
    </div>
    <div class="insert-box">
        
        <input type="text" name="cf7_answer" class="tag code" readonly="readonly" onfocus="this.select()" />

        <div class="submitbox">
            <input type="button" class="button button-primary insert-tag" value="<?php echo esc_attr(__('Insert Tag', 'cf7mls')); ?>" />
        </div>

        <br class="clear" />

        <p class="description mail-tag"><label><?php echo esc_html(__("This field should not be used on the Mail tab.", 'cf7mls')); ?></label>
        </p>
    </div>
    <?php
}
function cf7mls_multistep_preview_tag_generator_callback($contact_form, $args = '')
{
    $args = wp_parse_args($args, array());
?>
<div class="control-box">
    <fieldset>
        <legend><?php _e('Generate Preview Button.', 'cf7mls');?></legend>
        <table class="form-table cf7mls-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="tag-generator-panel-cf7mls_preview-label"><?php _e('Label', 'cf7mls'); ?></label>
                    </th>
                    <td>
                        <input type="text" id="tag-generator-panel-cf7mls_preview-label" class="oneline" name="values" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="tag-generator-panel-cf7mls_preview-id"><?php _e('Id attribute', 'cf7mls'); ?></label>
                    </th>
                    <td>
                        <input type="text" id="tag-generator-panel-cf7mls_preview-id" class="idvalue oneline option" name="id" />
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="tag-generator-panel-cf7mls_preview-class"><?php _e('Class attribute', 'cf7mls'); ?></label>
                    </th>
                    <td>
                        <input type="text" id="tag-generator-panel-cf7mls_preview-class" class="classvalue oneline option" name="class" />
                    </td>
                </tr>
            </tbody>
        </table>
    </fieldset>
</div>
<div class="insert-box">
    
    <input type="text" name="cf7mls_preview_step" class="tag code" readonly="readonly" onfocus="this.select()" />

    <div class="submitbox">
        <input type="button" class="button button-primary insert-tag" value="<?php echo esc_attr(__('Insert Tag', 'cf7mls')); ?>" />
    </div>

    <br class="clear" />

    <p class="description mail-tag"><label><?php echo esc_html(__("This field should not be used on the Mail tab.", 'cf7mls')); ?></label>
    </p>
</div>
<?php
}
