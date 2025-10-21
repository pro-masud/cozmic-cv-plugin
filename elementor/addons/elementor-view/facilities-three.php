<?php if ('layout_three' === $settings['layout_type']) : ?>
    <section class="gt-hotel-facilities-section-2 section-padding fix">
        <div class="gt-hotel-facilities-shape">
            <?php cozmiq_elementor_rendered_image($settings, 'layout_three_feature_three_image' ); ?>
        </div>
        <div class="container">
            <div class="gt-hotel-facilities-wrapper-2">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="gt-hotel-left-images">
                            <?php cozmiq_elementor_rendered_image($settings, 'layout_three_feature_one_image' ); ?>
                            <a href="<?php echo esc_url($settings['layout_one_video_url']['url']) ?>" class="video-btn ripple video-popup">
                                <i class="fa-solid fa-play"></i>
                            </a>
                            <div class="gt-counter">
                                <h2>
                                    <span class="gt-count"><?php echo wp_kses( $settings['layout_three_year_experience'], 'cozmiq_allowed_tags' ); ?></span>
                                    <?php echo wp_kses( $settings['layout_three_symble'], 'cozmiq_allowed_tags' ); ?>
                                </h2>
                                <p>
                                   <?php echo wp_kses( $settings['layout_three_year_text'], 'cozmiq_allowed_tags' ); ?>
                                </p>
                            </div>
                            <div class="gt-hotel-img wow fadeInUp" data-wow-delay=".5s">
                                <?php cozmiq_elementor_rendered_image($settings, 'layout_three_feature_two_image' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="gt-hotel-right-content">
                            <div class="gt-section-title mb-0">
                                <h6 class="wow fadeInUp">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_before_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                    <?php echo wp_kses( $settings['layout_three_subtitle'], 'cozmiq_allowed_tags' ); ?>
                                </h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                    <?php echo wp_kses( $settings['layout_three_title'], 'cozmiq_allowed_tags' ); ?>
                                </h2>
                            </div>
                            <p class="gt-hotel-text wow fadeInUp" data-wow-delay=".4s">
                                <?php echo wp_kses( $settings['layout_three_desc'], 'cozmiq_allowed_tags' ); ?>
                            </p>
                            <div class="gt-skill-feature-items">
                                <?php $i = 1; foreach ($settings['layout_three_progress_bar_one_lists'] as $key => $single) : ?>
                                    <div class="gt-skill-feature wow fadeInUp" data-wow-delay=".3s">
                                        <h3 class="gt-box-title"><?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?></h3>
                                        <div class="gt-progress">
                                            <div class="gt-progress-bar" style="width: <?php echo esc_attr( $single['percentage'] ); ?>%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                                <div class="gt-progress-value"><span class="counter-number2"><?php echo wp_kses( $single['percentage'], 'cozmiq_allowed_tags' ); ?></span><?php echo wp_kses( $single['percentage_symble'], 'cozmiq_allowed_tags' ); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php  $i++; endforeach; ?>
                            </div>
                            <a href="<?php echo esc_url($settings['llayout_three_button1_url']['url']) ?>" class="gt-theme-btn wow fadeInUp" data-wow-delay=".6s">
                                <?php echo wp_kses( $settings['layout_three_button1_text'], 'cozmiq_allowed_tags' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>