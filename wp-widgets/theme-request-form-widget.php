<?php
/**
 * Theme Request Form Widget
 * @package Cozmiq
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {


    // Create a About Widget
    CSF::createWidget('cozmiq_request_form_widget', array(
        'title' => esc_html__('Cozmiq: Request Form', 'cozmiq-cv'),
        'classname' => 'cozmiq-request-form-widget',
        'description' => esc_html__('Display Request Form widget', 'cozmiq-cv'),
        'fields' => array(
            array(
                'id' => 'background-image',
                'type' => 'media',
                'title' => esc_html__('Upload Your Photo', 'cozmiq-cv'),
            ),
            array(
                'id' => 'heading',
                'type' => 'text',
                'title' => esc_html__('Enter Your Header Title', 'cozmiq-cv'),
                'default' => esc_html__('Never Miss News', 'cozmiq-cv')
            ),
            array(
                'id' => 'cozmiq_contact_form_id',
                'type' => 'select',
                'title' => esc_html__('Contact Form', 'cozmiq-cv'),
                'options' => cozmiq_cv()->get_contact_form_shortcode_list_el(),
            ),
        )
    ));


    if (!function_exists('cozmiq_request_form_widget')) {
        function cozmiq_request_form_widget($args, $instance)
        {

            echo $args['before_widget'];

            $instance['background-image'];
            $bg_image = $instance['background-image'];
            $img_id = $bg_image['id'] ?? '';
            $img_print = $img_id ? wp_get_attachment_image_src($img_id)[0] : '';
            $heading_title = $instance['heading'] ?? '';
            $shortcode = $instance['cozmiq_contact_form_id'];

            ?>
            <div class="request-form-widget" style="background-image: url(<?php echo esc_url($img_print)?>)">
                <h4 class="widget-headline"><?php echo esc_html($heading_title); ?></h4>
                <div class="request-form">
                    <?php
                    echo do_shortcode('[contact-form-7  id="' . $shortcode . '"]');
                    ?>
                </div>
            </div>
            <?php

            echo $args['after_widget'];

        }
    }

}

?>