<?php
/**
 * Theme Post Tags Widget
 * @package Cozmiq
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}

class Cozmiq_Tags_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'cozmiq_tags',
            esc_html__('Cozmiq: Tags', 'cozmiq-cv'),
            array('description' => esc_html__('Display  categories', 'cozmiq-cv'))
        );
    }

    public function widget($args, $instance)
    {

        $allowed_html = cozmiq()->kses_allowed_html('all');

        $title = isset($instance['title']) && !empty($instance['title']) ? $instance['title'] : '';
        $order = isset($instance['order']) && !empty($instance['order']) ? $instance['order'] : 'ASC';
        $post_tags = isset($instance['post_tags']) && !empty($instance['post_tags']) ? $instance['post_tags'] : 'post_tag';
        $orderby = isset($instance['orderby']) && !empty($instance['orderby']) ? $instance['orderby'] : 'ID';
        echo wp_kses($args['before_widget'], $allowed_html);
        if (!empty($title)) {
            echo wp_kses_post($args['before_title']) . esc_html($title) . wp_kses_post($args['after_title']);
        }
        //WP_Query argument
        $all_tags = array(
//            'type' => $post_type,
            'taxonomy' =>  $post_tags,
            'order' => $order,
            'orderby' => $orderby
        );
        $tags = get_terms($all_tags);
        //have to write code for displing query data
        if (!empty($tags)):?>
            <div class="wp-block-tag-cloud">

            <?php foreach ($tags as $tag) {
                $tag_link = get_tag_link( $tag->term_id );
                printf('<a href="%1$s">%2$s</a>', $tag_link, $tag->name);
            }
        else:
            esc_html__(' Oops, there are no tags.', 'cozmiq-cv')
            ?>
        <?php endif; ?>
        </div>
        <?php
        echo wp_kses($args['after_widget'], $allowed_html);
    }

    public function form($instance)
    {

        //have to create form instance

        if (!empty($instance) && $instance['title']) {

            $title = apply_filters('widget_title', $instance['title']);

        } else {

            $title = esc_html__('Tags', 'cozmiq-cv');

        }
        $order = !empty($instance) && $instance['order'] ? $instance['order'] : 'ASC';
        $orderby = !empty($instance) && $instance['orderby'] ? $instance['orderby'] : 'ID';
        $post_tags = array(
            'post_tag' => esc_html__('Blog', 'cozmiq-cv'),
            'packages-tag' => esc_html__('Packages', 'cozmiq-cv'),
            'project-tag' => esc_html__('Project', 'cozmiq-cv'),
            'course-tag' => esc_html__('Courses', 'cozmiq-cv'),
            'service-tag'=> esc_html__('Service', 'cozmiq-cv')
        );
        $order_arr = array(
            'ASC' => esc_html__('Acceding', 'cozmiq-cv'),
            'DESC' => esc_html__('Descending', 'cozmiq-cv')
        );
        $orderby_arr = array(
            'ID' => esc_html__('ID', 'cozmiq-cv'),
            'title' => esc_html__('Title', 'cozmiq-cv'),
            'date' => esc_html__('Date', 'cozmiq-cv'),
            'rand' => esc_html__('Random', 'cozmiq-cv')
        );

        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('post_tags')) ?>"><?php esc_html_e('Post Tags', 'cozmiq-cv'); ?></label>

            <select name="<?php echo esc_attr($this->get_field_name('post_tags')) ?>" class="widefat"
                    id="<?php echo esc_attr($this->get_field_id('post_tags')) ?>">

                <?php

                foreach ($post_tags as $key => $value) {

                    $checked = ($key == $order) ? 'selected' : '';

                    printf('<option value="%1$s" %3$s >%2$s</option>', $key, $value, $checked);

                }
                ?>
            </select>
        </p>
        <p>

            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'cozmiq-cv'); ?></label>

            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')) ?>"
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>"
                   value="<?php echo esc_attr($title) ?>">

        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('order')) ?>"><?php esc_html_e('Order', 'cozmiq-cv'); ?></label>
            <select name="<?php echo esc_attr($this->get_field_name('order')) ?>" class="widefat"
                    id="<?php echo esc_attr($this->get_field_id('order')) ?>">
                <?php
                foreach ($order_arr as $key => $value) {
                    $checked = ($key == $order) ? 'selected' : '';
                    printf('<option value="%1$s" %3$s >%2$s</option>', $key, $value, $checked);
                }
                ?>
            </select>

        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('orderby')) ?>"><?php esc_html_e('OrderBy', 'cozmiq-cv'); ?></label>
            <select name="<?php echo esc_attr($this->get_field_name('orderby')) ?>" class="widefat"
                    id="<?php echo esc_attr($this->get_field_id('orderby')) ?>">
                <?php
                foreach ($orderby_arr as $key => $value) {
                    $checked = ($key == $orderby) ? 'selected' : '';
                    printf('<option value="%1$s" %3$s >%2$s</option>', $key, $value, $checked);
                }
                ?>
            </select>

        </p>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['number'] = (!empty($new_instance['number']) ? sanitize_text_field($new_instance['number']) : '');
        $instance['title'] = (!empty($new_instance['title']) ? sanitize_text_field($new_instance['title']) : '');
        $instance['post_tags'] = (!empty($new_instance['post_tags']) ? sanitize_text_field($new_instance['post_tags']) : '');
        $instance['order'] = (!empty($new_instance['order']) ? sanitize_text_field($new_instance['order']) : '');
        $instance['orderby'] = (!empty($new_instance['orderby']) ? sanitize_text_field($new_instance['orderby']) : '');

        return $instance;
    }

} // end class

if (!function_exists('Cozmiq_Tags_Widget')) {
    function Cozmiq_Tags_Widget()
    {
        register_widget('Cozmiq_Tags_Widget');
    }

    add_action('widgets_init', 'Cozmiq_Tags_Widget');
}