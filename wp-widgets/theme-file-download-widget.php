<?php
/**
 * Theme File Download Widget
 * @package Cozmiq
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {


    // Create a About Widget
    CSF::createWidget('cozmiq_file_download_widget', array(
        'title' => esc_html__('Cozmiq: File Download', 'cozmiq-cv'),
        'classname' => 'cozmiq-widget-file-download',
        'description' => esc_html__('Display File Download widget', 'cozmiq-cv'),
        'fields' => array(
            array(
                'id' => 'title',
                'type' => 'text',
                'title' => esc_html__('Title', 'Cozmiq-cv'),
                'default' => esc_html__('Download', 'cozmiq-cv')
            ),

            array(
                'id' => 'cozmiq-file-download-repeater',
                'type' => 'repeater',
                'title' => esc_html__('File Download', 'cozmiq-cv'),
                'fields' => array(
                    array(
                        'id' => 'cozmiq-file-download',
                        'type' => 'media',
                        'title' => esc_html__('File', 'cozmiq-cv'),
                    ),
                    array(
                        'id' => 'cozmiq-file-download-text',
                        'type' => 'text',
                        'title' => esc_html__('File Text', 'cozmiq-cv'),
                        'default' => esc_html__('Company Profile', 'cozmiq-cv')
                    ),

                ),
            ),
        )
    ));


    if (!function_exists('cozmiq_file_download_widget')) {
        function cozmiq_file_download_widget($args, $instance)
        {

            echo $args['before_widget'];

            $title = $instance['title'] ?? '';
            $file_download = is_array($instance['cozmiq-file-download-repeater']) && !empty($instance['cozmiq-file-download-repeater']) ? $instance['cozmiq-file-download-repeater'] : [];


            ?>
            <div class="widget_download">
                <h5 class="widget-headline style-01"><?php echo esc_html($title); ?></h5>               
                <ul>
                    <?php
                        foreach ($file_download as $file) {
                            echo '<li class="mb-0 mt-0">
                                <a download href="'.$file['cozmiq-file-download']['url'].'">
                                    ' . $file['cozmiq-file-download-text'] . '
                                    <i class="fa fa-angle-double-right"></i>
                                </a>
                            </li>';
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