<?php
/**
 * Theme Author Widget
 * @package Cozmiq
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {


    // Create a About Widget
    CSF::createWidget('cozmiq_author_widget', array(
        'title' => esc_html__('Cozmiq: Author', 'cozmiq-cv'),
        'classname' => 'cozmiq-widget-author',
        'description' => esc_html__('Display Author widget', 'cozmiq-cv'),
        'fields' => array(
            array(
                'id' => 'image',
                'type' => 'media',
                'title' => esc_html__('Image', 'Cozmiq-cv')
            ),
            array(
                'id' => 'name',
                'type' => 'text',
                'title' => esc_html__('Name', 'Cozmiq-cv'),
                'default' => esc_html__('Leslie Alexander', 'cozmiq-cv')
            ),
            array(
                'id' => 'phone',
                'type' => 'text',
                'title' => esc_html__('Phone', 'Cozmiq-cv'),
                'default' => esc_html__('(480) 555-0103', 'cozmiq-cv')
            ),

            array(
                'id' => 'cozmiq-author-social-repeater',
                'type' => 'repeater',
                'title' => esc_html__('Author', 'cozmiq-cv'),
                'fields' => array(
                    array(
                        'id' => 'cozmiq-author-social',
                        'type' => 'icon',
                        'title' => esc_html__('author social', 'cozmiq-cv'),
                    ),
                    array(
                        'id' => 'cozmiq-author-social-url',
                        'type' => 'text',
                        'title' => esc_html__('author social', 'cozmiq-cv'),
                        'default' => esc_html__('#', 'cozmiq-cv')
                    ),

                ),
            ),
        )
    ));


    if (!function_exists('cozmiq_author_widget')) {
        function cozmiq_author_widget($args, $instance)
        {

            echo $args['before_widget'];
            $image = $instance['image'];
            $img_id = $image['id'] ?? '';
            $img_print = $img_id ? wp_get_attachment_image_src($img_id,'full')[0] : '';
            $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);
            $name = $instance['name'] ?? '';
            $phone = $instance['phone'] ?? '';
            $author = is_array($instance['cozmiq-author-social-repeater']) && !empty($instance['cozmiq-author-social-repeater']) ? $instance['cozmiq-author-social-repeater'] : [];
            ?>

            <div class="widget_author text-center">  
                <?php
                    if (!empty($img_print)) {
                        printf('<div class="thumb"><img src="%1$s" alt="%2$s"/></div>', esc_url($img_print), esc_attr($alt_text));
                    }
                ?> 
                <div class="details">
                    <h5><?php echo esc_html($name); ?></h5>
                    <h6><?php echo esc_html($phone); ?></h6>
                    <ul class="social-media-list">
                        <?php
                            foreach ($author as $socials) {
                                echo '<li>
                                    <a href="'.$socials['cozmiq-author-social-url'].'">
                                        <i class="' . $socials['cozmiq-author-social'] . '"></i>
                                    </a>
                                </li>';
                            };
                        ?>
                    </ul>
                </div>
            </div>
            <?php

            echo $args['after_widget'];

        }
    }

}

?>