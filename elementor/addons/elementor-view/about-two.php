<?php if ('layout_two' === $settings['layout_type']) : ?>
    <section class="gt-about-section-2 section-padding fix section-bg-3">
        <div class="gt-about-shape">
           <?php cozmiq_elementor_rendered_image($settings, 'layout_two_shape' ); ?>
        </div>
        <div class="container">
            <div class="gt-about-wrapper-2">
                <div class="row g-4">
                    <div class="col-lg-7">
                        <div class="gt-about-left-content">
                            <div class="gt-section-title">
                                 <h6 class="wow fadeInUp">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_sub_title_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                    <?php echo wp_kses( $settings['layout_two_subtitle'], 'cozmiq_allowed_tags' ); ?>
                                </h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                    <?php echo wp_kses( $settings['layout_two_title'], 'cozmiq_allowed_tags' ); ?>
                                </h2>
                            </div>
                            <div class="gt-about-box-items">
                                <div class="row align-items-center">
                                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                                        <div class="gt-about-images">
                                            <?php cozmiq_elementor_rendered_image($settings, 'layout_two_feature_two_img' ); ?>
                                            <span class="title-box">
                                                <?php cozmiq_elementor_rendered_image($settings, 'layout_two_arrow_shape' ); ?>
                                                <?php echo wp_kses( $settings['layout_since_text'], 'cozmiq_allowed_tags' ); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 wow fadeInUp" data-wow-delay=".6s">
                                        <div class="about-content-icon">
                                            <?php foreach ($settings['layout_two_feature_one_lists'] as $key => $single) : ?>
                                                <div class="gt-icon-box">
                                                    <div class="icon">
                                                        <?php \Elementor\Icons_Manager::render_icon($single['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                                    </div>
                                                    <div class="content">
                                                        <h3><?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?></h3>
                                                        <p><?php echo wp_kses( $single['desc'], 'cozmiq_allowed_tags' ); ?></p>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                            <a href="<?php echo esc_url($settings['layout_two_button1_url']['url']); ?>" class="gt-theme-btn">
                                                <?php echo wp_kses( $settings['layout_two_button1_text'], 'cozmiq_allowed_tags' ); ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 wow fadeInUp" data-wow-delay=".5s">
                        <div class="gt-about-right-image">
                            <div class="gt-about-image">
                                <?php cozmiq_elementor_rendered_image($settings, 'layout_two_feature_img' ); ?>
                                <div class="gt-counter-box">
                                    <h2><span class="gt-count"><?php echo wp_kses( $settings['layout_counter_number'], 'cozmiq_allowed_tags' ); ?></span><?php echo wp_kses( $settings['layout_counter_symble'], 'cozmiq_allowed_tags' ); ?></h2>
                                    <h4><?php echo wp_kses( $settings['layout_counter_text'], 'cozmiq_allowed_tags' ); ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>