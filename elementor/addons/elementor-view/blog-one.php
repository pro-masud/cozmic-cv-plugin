<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-news-section section-padding pt-0">
        <div class="gt-right-shape">
            <?php cozmiq_elementor_rendered_image($settings, 'layout_one_shape_img' ); ?>
        </div>
        <div class="container">
            <div class="gt-section-title-area">
                <div class="gt-section-title">
                    <h6 class="wow fadeInUp">
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_before_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                        <?php echo wp_kses( $settings['layout_one_subtitle'], 'cozmiq_allowed_tags' ); ?>
                    </h6>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">
                        <?php echo wp_kses( $settings['layout_one_title'], 'cozmiq_allowed_tags' ); ?>
                    </h2>
                </div>
                <a href="<?php echo esc_url($settings['layout_one_button_url']['url']); ?>" class="gt-theme-btn wow fadeInUp" data-wow-delay=".4s">
                    <?php echo wp_kses( $settings['layout_one_btn_label'], 'cozmiq_allowed_tags' ); ?>
                </a>
            </div>
            <div class="row">
                <?php
                    $blog_post_one_query_paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    if (! empty($settings['layout_one_select_category'])) :
                        $blog_post_one_query_args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'ignore_sticky_posts' => true,
                            'orderby' => 'date',
                            'order' => $settings['layout_one_query_order'],
                            'posts_per_page' => $settings['layout_one_post_count']['size'],
                            'paged' => $blog_post_one_query_paged,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'category',
                                    'field' => 'slug',
                                    'terms' => $settings['layout_one_select_category']
                                )
                            )
                        );
                    else :
                        $blog_post_one_query_args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'ignore_sticky_posts' => true,
                            'orderby' => 'date',
                            'paged' => $blog_post_one_query_paged,
                            'order' => $settings['layout_one_query_order'],
                            'posts_per_page' => $settings['layout_one_post_count']['size']
                        );

                    endif;
                    $blog_post_one_query = new \WP_Query($blog_post_one_query_args);
                    $i = 1;

                    while ($blog_post_one_query->have_posts()) :
                        $blog_post_one_query->the_post();

                        $comments_number = get_comments_number();
                        $user = wp_get_current_user();
                        $author_id = get_the_author_meta('ID');
                        $author_img = get_avatar_url($author_id, array("size" => 31));

                        // blog category
                        $categories = get_the_category();
                        if($categories):
                            $category_link = get_category_link( $categories['0']->term_id );
                        endif;
                        ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="gt-news-box-items">
                                    <?php if(has_post_thumbnail()): ?>
                                        <div class="gt-thumb">
                                            <?php the_post_thumbnail(); ?>
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="gt-content">
                                        <ul class="gt-list">
                                            <li>
                                                <?php cozmiq_elementor_rendered_image($settings, 'layout_one_date_shape' ); ?>
                                                <?php echo get_the_date('F j, Y');?>
                                            </li>
                                            <li>
                                                <?php echo esc_html( $categories[0]->name ); ?>
                                            </li>
                                        </ul>
                                        <h3>
                                            <a href="<?php the_permalink(); ?>"><?php echo esc_html(wp_trim_words(get_the_title(), $settings['layout_one_title_length'], '')); ?></a>
                                        </h3>
                                        <a href="<?php the_permalink(); ?>" class="gt-theme-btn"><?php echo wp_kses($settings['layout_one_button_label'], 'careold_allowed_tags'); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php $i++;
                    endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>