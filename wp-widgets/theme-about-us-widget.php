<?php
/**
 * Theme About Us Widget
 * @package Cozmiq
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {


    // Create a About Widget
    CSF::createWidget('cozmiq_about_widget', array(
        'title' => esc_html__('Cozmiq: About Us', 'cozmiq-cv'),
        'classname' => 'cozmiq-widget-about',
        'description' => esc_html__('Display about us widget', 'cozmiq-cv'),
        'fields' => array(
            array(
                'id' => 'logo-area',
                'type' => 'media',
                'title' => esc_html__('Upload Your Photo', 'cozmiq-cv'),
            ),
            array(
                'id' => 'description',
                'type' => 'textarea',
                'title' => esc_html__('Description', 'Cozmiq-cv'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 'cozmiq-cv')
            ),
            array(
                'id' => 'shortcode',
                'type' => 'textarea',
                'title' => esc_html__('Shortcode', 'Cozmiq-cv'),
            ),

            array(
                'id' => 'cozmiq-footer-social-icon-repeater',
                'type' => 'repeater',
                'title' => esc_html__('Social Icon', 'cozmiq-cv'),
                'fields' => array(

                    array(
                        'id' => 'cozmiq-footer-social-icon',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'cozmiq-cv'),
                        'default' => 'flaticon-call'
                    ),
                    array(
                        'id' => 'cozmiq-footer-social-text',
                        'type' => 'text',
                        'title' => esc_html__('Enter Your Url', 'cozmiq-cv'),
                        'default' => esc_html__('#', 'cozmiq-cv')
                    ),

                ),
            ),
        )
    ));


    if (!function_exists('cozmiq_about_widget')) {
        function cozmiq_about_widget($args, $instance)
        {

            echo $args['before_widget'];

            $logo = $instance['logo-area'];
            $img_id = $logo['id'] ?? '';
            $img_print = $img_id ? wp_get_attachment_image_src($img_id,'full')[0] : '';
            $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);
            $paragraph = $instance['description'] ?? '';
            $shortcode = $instance['shortcode'] ?? '';
            $socialIcon = is_array($instance['cozmiq-footer-social-icon-repeater']) && !empty($instance['cozmiq-footer-social-icon-repeater']) ? $instance['cozmiq-footer-social-icon-repeater'] : [];


            ?>
            <div class="footer-widget widget">
                <div class="about_us_widget style-01">
                    <div class="footer-item__logo">  
                        <a href="<?php echo get_home_url(); ?>">
                            <?php
                                if (!empty($img_print)) {
                                    printf('<img src="%1$s" alt="%2$s"/>', esc_url($img_print), esc_attr($alt_text));
                                }
                            ?>  
                        </a>
                    </div>
                    <p class="my-32">
                        <?php echo $paragraph; ?>
                    </p>
                    <?php if (!empty($socialIcon)) { ?>
                        <ul class="social-list flex-align gap-24">
                            <?php
                            foreach ($socialIcon as $icon) {
                                echo '<li class="social-list__item mt-0 mb-0">
                                <div class="icon">
                                    <a class="text-main-600 text-2xl hover-text-main-two-600" href="'.$icon['cozmiq-footer-social-text'].'">
                                        <i class="' . $icon['cozmiq-footer-social-icon'] . '"></i>
                                    </a>
                                </div>
                            </li>';
                            };
                            ?>
                        </ul>
                    <?php } ?>
                </div>
            </div>

            <?php

            echo $args['after_widget'];

        }
    }

}

?>