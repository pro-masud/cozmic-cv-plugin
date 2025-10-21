<?php
/**
 * Theme Recent Post Title Widget
 * @package Cozmiq
 * @since 1.0.0
 * @changed 1.0.1
 */

if (!defined('ABSPATH')) {

    exit(); //exit if access directly

}

class Cozmiq_Recent_Post_title_Widget extends WP_Widget

{
    public function __construct()
    {
        parent::__construct(
            'cozmiq_popular_posts_title',
            esc_html__('Cozmiq: Recent Posts Title', 'cozmiq-cv'),
            array('description' => esc_html__('Display your recent posts, with a thumbnail.', 'cozmiq-cv'))
        );
    }

    public function widget($args, $instance)

    {   
        $title = isset($instance['title']) && !empty($instance['title']) ? $instance['title'] : '';
        $no_of_posts = isset($instance['no_of_posts']) && !empty($instance['no_of_posts']) ? $instance['no_of_posts'] : '';
        $order = isset($instance['order']) && !empty($instance['order']) ? $instance['order'] : 'ASC';
        $post_type = isset($instance['post_type']) && !empty($instance['post_type']) ? $instance['post_type'] : 'post';
        $orderby = isset($instance['orderby']) && !empty($instance['orderby']) ? $instance['orderby'] : 'ID';
        echo wp_kses_post($args['before_widget']);

        if (!empty($title)) {
            echo wp_kses_post($args['before_title']) . esc_html($title) . wp_kses_post($args['after_title']);
        }

        //WP_Query argument
        $qargs = array(

            'post_type' => $post_type,
            'posts_per_page' => $no_of_posts,
            'offset' => 0,
            'ignore_sticky_posts' => 1,
            'post_status' => array('publish'),
            'order' => $order,
            'orderby' => $orderby

        );


        $recent_articles = new WP_Query($qargs);

        //have to write code for displing query data

        if ($recent_articles->have_posts()) : ?>

        <div class="recent-post-wrap">
            <?php while ($recent_articles->have_posts()) : $recent_articles->the_post(); ?>
                
                <div class="recent-post">   
                    <div class="recent-post-meta">
                        <a href="blog.html">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16" fill="none">
                                <path d="M5 1V2H9V1C9 0.46875 9.4375 0 10 0C10.5312 0 11 0.46875 11 1V2H12.5C13.3125 2 14 2.6875 14 3.5V5H0V3.5C0 2.6875 0.65625 2 1.5 2H3V1C3 0.46875 3.4375 0 4 0C4.53125 0 5 0.46875 5 1ZM0 6H14V14.5C14 15.3438 13.3125 16 12.5 16H1.5C0.65625 16 0 15.3438 0 14.5V6ZM2 9.5C2 9.78125 2.21875 10 2.5 10H3.5C3.75 10 4 9.78125 4 9.5V8.5C4 8.25 3.75 8 3.5 8H2.5C2.21875 8 2 8.25 2 8.5V9.5ZM6 9.5C6 9.78125 6.21875 10 6.5 10H7.5C7.75 10 8 9.78125 8 9.5V8.5C8 8.25 7.75 8 7.5 8H6.5C6.21875 8 6 8.25 6 8.5V9.5ZM10.5 8C10.2188 8 10 8.25 10 8.5V9.5C10 9.78125 10.2188 10 10.5 10H11.5C11.75 10 12 9.78125 12 9.5V8.5C12 8.25 11.75 8 11.5 8H10.5ZM2 13.5C2 13.7812 2.21875 14 2.5 14H3.5C3.75 14 4 13.7812 4 13.5V12.5C4 12.25 3.75 12 3.5 12H2.5C2.21875 12 2 12.25 2 12.5V13.5ZM6.5 12C6.21875 12 6 12.25 6 12.5V13.5C6 13.7812 6.21875 14 6.5 14H7.5C7.75 14 8 13.7812 8 13.5V12.5C8 12.25 7.75 12 7.5 12H6.5ZM10 13.5C10 13.7812 10.2188 14 10.5 14H11.5C11.75 14 12 13.7812 12 13.5V12.5C12 12.25 11.75 12 11.5 12H10.5C10.2188 12 10 12.25 10 12.5V13.5Z" fill="#196164"/>
                            </svg>
                            <?php echo date('F j, Y') ?>
                        </a>
                    </div>                                 
                    <div class="media-body">
                        <h4 class="post-title"><a class="text-inherit" href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_query();
            else :
                esc_html__(' Oops, there are no posts.', 'cozmiq-cv')
                ?>
            <?php endif; ?>
        </div>

        <?php

        echo wp_kses_post($args['after_widget']);

    }

    public function form($instance)

    {
        //have to create form instance

        if (!empty($instance) && $instance['title']) {

            $title = apply_filters('widget_title', $instance['title']);

        } else {

            $title = esc_html__('Recent Posts', 'cozmiq-cv');

        }
        $no_of_posts = !empty($instance) && $instance['no_of_posts'] ? $instance['no_of_posts'] : '5';
        $order = !empty($instance) && $instance['order'] ? $instance['order'] : 'ASC';
        $orderby = !empty($instance) && $instance['orderby'] ? $instance['orderby'] : 'ID';

        $post_type = array(
            'post' => esc_html__('Blog Post Type', 'cozmiq-cv'),
            'packages' => esc_html__('Packages Post Type', 'cozmiq-cv'),
            'project' => esc_html__('project Post Type', 'cozmiq-cv'),
            'service' => esc_html__('Service Post Type', 'cozmiq-cv'),
            'courses' => esc_html__('Courses Post Type', 'cozmiq-cv')
        );

        $order_arr = array(
            'ASC' => esc_html__('Acceding', 'cozmiq-cv'),
            'DESC' => esc_html__('Descending', 'cozmiq-cv')
        );

        $orderby_arr = array(
            'ID' => esc_html__('ID', 'cozmiq-cv'),
            'title' => esc_html__('Title', 'cozmiq-cv'),
            'date' => esc_html__('Date', 'cozmiq-cv'),
            'rand' => esc_html__('Random', 'cozmiq-cv'),
            'comment_count' => esc_html__('Most Comment', 'cozmiq-cv')
        );

        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('post_type')) ?>"><?php esc_html_e('Post Type', 'cozmiq-cv'); ?></label>

            <select name="<?php echo esc_attr($this->get_field_name('post_type')) ?>" class="widefat"
                    id="<?php echo esc_attr($this->get_field_id('post_type')) ?>">

                <?php

                foreach ($post_type as $key => $value) {

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

            <label for="<?php echo esc_attr($this->get_field_id('no_of_posts')) ?>"><?php esc_html_e('No Of Posts', 'cozmiq-cv'); ?></label>

            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('no_of_posts')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('no_of_posts')); ?>" type="text"
                   value="<?php echo esc_attr($no_of_posts); ?>"/>
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
        $instance['order'] = (!empty($new_instance['order']) ? sanitize_text_field($new_instance['order']) : '');
        $instance['orderby'] = (!empty($new_instance['orderby']) ? sanitize_text_field($new_instance['orderby']) : '');
        $instance['title'] = (!empty($new_instance['title']) ? sanitize_text_field($new_instance['title']) : '');
        $instance['post_type'] = (!empty($new_instance['post_type']) ? sanitize_text_field($new_instance['post_type']) : '');
        $instance['no_of_posts'] = (!empty($new_instance['no_of_posts']) ? absint($new_instance['no_of_posts']) : '');
        if (is_numeric($new_instance['no_of_posts']) == false) {
            $instance['no_of_posts'] = $old_instance['no_of_posts'];
        }

        return $instance;

    }

} // end class


if (!function_exists('Cozmiq_Recent_Post_title_Widget')) {

    function Cozmiq_Recent_Post_title_Widget()

    {
        register_widget('Cozmiq_Recent_Post_title_Widget');
    }

    add_action('widgets_init', 'Cozmiq_Recent_Post_title_Widget');

}

