<?php if ('layout_three' === $settings['layout_type']) : ?>
    <section class="gt-about-section-3 section-padding fix">
        <div class="right-shape">
            <?php cozmiq_elementor_rendered_image($settings, 'layout_three_shape_two' ); ?>
        </div>
        <div class="container">
            <div class="gt-about-wrapper-3">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="gt-about-images-item">
                            <div class="gt-about-image">
                                <?php cozmiq_elementor_rendered_image($settings, 'layout_three_feature_img' ); ?>
                                <div class="gt-about-image-2">
                                    <?php cozmiq_elementor_rendered_image($settings, 'layout_three_feature_two_img' ); ?>
                                </div>
                                <div class="about-video">
                                    <a href="<?php echo esc_url($settings['layout_three_video_url']['url']); ?>" class="video-btn ripple video-popup">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                    <div class="text-circle">
                                       <?php cozmiq_elementor_rendered_image($settings, 'layout_three_shape_one' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="gt-about-content">
                            <div class="gt-section-title mb-0">
                                <h6 class="wow fadeInUp">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sub_title_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                    <?php echo wp_kses( $settings['layout_three_subtitle'], 'cozmiq_allowed_tags' ); ?>
                                </h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                    <?php echo wp_kses( $settings['layout_three_title'], 'cozmiq_allowed_tags' ); ?>
                                </h2>
                            </div>
                            <p class="gt-about-text wow fadeInUp" data-wow-delay=".4s">
                                <?php echo wp_kses( $settings['layout_three_desc'], 'cozmiq_allowed_tags' ); ?>
                            </p>
                            <ul class="gt-icon-items wow fadeInUp" data-wow-delay=".6s">
                                 <?php foreach ($settings['layout_three_feature_one_lists'] as $key => $single) : ?>
                                    <li>
                                        <div class="icon">
                                            <?php \Elementor\Icons_Manager::render_icon($single['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                        </div>
                                        <div class="content">
                                            <h4><?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?></h4>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <ul class="gt-about-list wow fadeInUp" data-wow-delay=".8s">
                               <?php echo wp_kses( $settings['layout_three_check_list'], 'cozmiq_allowed_tags' ); ?>
                            </ul>
                            <a href="<?php echo esc_url($settings['layout_three_button1_url']['url']); ?>" class="gt-theme-btn mt-5 wow fadeInUp" data-wow-delay=".9s">
                                <?php echo wp_kses( $settings['layout_three_button1_text'], 'cozmiq_allowed_tags' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>