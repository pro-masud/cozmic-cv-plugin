<?php
/**
 * Theme Contact Info Widget
 * @package Cozmiq
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {


    // Create a Contact Info Widget
    CSF::createWidget('cozmiq_contact_info_widget', array(
        'title' => esc_html__('Cozmiq: Contact Info', 'cozmiq-cv'),
        'classname' => 'cozmiq-widget-contact-info',
        'description' => esc_html__('Display Contact Info widget', 'cozmiq-cv'),
        'fields' => array(
            array(
                'id' => 'title',
                'type' => 'text',
                'title' => esc_html__('Title', 'cozmiq-cv'),
            ),
            array(
                'id' => 'location',
                'type' => 'textarea',
                'title' => esc_html__('Location', 'Cozmiq-cv'),
                'default' => esc_html__('4517 Washington Ave. Manchester, Kentucky 39495', 'cozmiq-cv'),
            ),
            array(
                'id' => 'phone',
                'type' => 'text',
                'title' => esc_html__('Phone', 'Cozmiq-cv'),
                'default' => esc_html__(' (+888) 123 456 765', 'cozmiq-cv'),
            ),
            array(
                'id' => 'email',
                'type' => 'text',
                'title' => esc_html__('Email', 'Cozmiq-cv'),
                'default' => esc_html__(' infoname@mail.com', 'cozmiq-cv'),
            ),
            array(
                'id' => 'open_time',
                'type' => 'text',
                'title' => esc_html__('Open Time', 'Cozmiq-cv'),
                'default' => esc_html__('We are open from Monday to Friday 09.00 AM - 17.00 PM', 'cozmiq-cv'),
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


    if (!function_exists('cozmiq_contact_info_widget')) {
        function cozmiq_contact_info_widget($args, $instance)
        {

            echo $args['before_widget'];
            $title = $instance['title'] ?? '';
            $location = $instance['location'] ?? '';
            $phone = $instance['phone'] ?? '';
            $email = $instance['email'] ?? '';
            $open_time = $instance['open_time'] ?? '';
            $csocialIcon = is_array($instance['cozmiq-footer-social-icon-repeater']) && !empty($instance['cozmiq-footer-social-icon-repeater']) ? $instance['cozmiq-footer-social-icon-repeater'] : [];
            ?>

            <div class="footer-widget widget">
            	<h4 class="widget-headline"><?php echo esc_html($title); ?></h4>
            	<div class="widget_contact">
                    <?php if($phone) : ?>
                        <div class="flex-align gap-20 mb-24">
                            <span class="icon d-flex text-32 text-main-600"><i class="ph ph-phone"></i></span>
                            <div class="">
                                <a href="<?php echo esc_url($phone); ?>" class="text-neutral-500 d-block hover-text-main-600 mb-4"><?php echo esc_html($phone); ?></a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($email) : ?>
                        <div class="flex-align gap-20 mb-24">
                            <span class="icon d-flex text-32 text-main-600"><i class="ph ph-envelope-open"></i></span>
                            <div class="">
                                <a href="<?php echo esc_url($email); ?>" class="text-neutral-500 d-block hover-text-main-600 mb-4"><?php echo esc_html($email); ?></a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($location) : ?>
                        <div class="flex-align gap-20 mb-24">
                            <span class="icon d-flex text-32 text-main-600"><i class="ph ph-map-trifold"></i></span>
                            <div>
                                <span class="text-neutral-500 d-block mb-4"><?php echo esc_html($location); ?></span>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($csocialIcon)) { ?>
                        <ul class="social-media mt-4">
                            <?php
                            foreach ($csocialIcon as $cicon) {
                                echo '<li>
	                                <a href="'.$cicon['cozmiq-footer-social-text'].'">
	                                    <i class="'. $cicon['cozmiq-footer-social-icon'] . '"></i></a>
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