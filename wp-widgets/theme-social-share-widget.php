<?php
/**
 * Theme Social Share Widget
 * @package Cozmiq
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {


    // Create a About Widget
    CSF::createWidget('cozmiq_social_share_widget', array(
        'title' => esc_html__('Cozmiq: Social Share', 'cozmiq-cv'),
        'classname' => 'cozmiq-social-share-about',
        'description' => esc_html__('Display Social Share widget', 'cozmiq-cv'),
        'fields' => array(
            array(
                'id' => 'heading',
                'type' => 'text',
                'title' => esc_html__('Enter Your Header Title', 'cozmiq-cv'),
                'default' => esc_html__('Never Miss News', 'cozmiq-cv')
            ),
            array(
                'id' => 'cozmiq-social-icon-repeater',
                'type' => 'repeater',
                'title' => esc_html__('Social Icon', 'cozmiq-cv'),
                'fields' => array(
                    array(
                        'id' => 'cozmiq-social-icon',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'cozmiq-cv'),
                        'default' => 'fab fa-facebook'
                    ),
                    array(
                        'id' => 'cozmiq-social-text',
                        'type' => 'text',
                        'title' => esc_html__('Enter Your Ulr', 'cozmiq-cv'),
                        'default' => '#'
                    ),
                ),
            ),
        )
    ));


    if (!function_exists('cozmiq_social_share_widget')) {
        function cozmiq_social_share_widget($args, $instance)
        {

            echo $args['before_widget'];
            

            $heading_title = $instance['heading'] ?? '';
            $socialIcon = is_array($instance['cozmiq-social-icon-repeater']) && !empty($instance['cozmiq-social-icon-repeater']) ? $instance['cozmiq-social-icon-repeater'] : [];


            ?>
            <div class="social-share-widget">
                <h4 class="widget-headline"><?php echo esc_html($heading_title); ?></h4>
                <ul class="social-icon style-03">
                    <?php
                    foreach ($socialIcon as $icon) {
                        printf('<li><a href="%2$s"><i class="%1$s"></i></a></li>', esc_html($icon['cozmiq-social-icon']), esc_url($icon['cozmiq-social-text']));
                    };
                    ?>
                </ul>
            </div>

            <?php

            echo $args['after_widget'];

        }
    }

}

?>