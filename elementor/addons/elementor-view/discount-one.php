<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-discount-section-2 fix section-padding bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_one_bg_section']['url']); ?>);">
        <div class="container">
            <div class="gt-discount-wrapper">
                <div class="row g-4 justify-content-between">
                    <div class="col-lg-6">
                        <div class="discount-left">
                            <div class="gt-section-title mb-0">
                                <h6 class="wow fadeInUp">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_sub_title_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                    <?php echo wp_kses( $settings['layout_one_subtitle'], 'cozmiq_allowed_tags' ); ?>
                                </h6>
                                <h2 class="text-white wow fadeInUp" data-wow-delay=".2s">
                                    <?php echo wp_kses( $settings['layout_one_title'], 'cozmiq_allowed_tags' ); ?>
                                </h2>
                            </div>
                            <p class="text wow fadeInUp" data-wow-delay=".4s">
                                <?php echo wp_kses( $settings['layout_one_description'], 'cozmiq_allowed_tags' ); ?>
                            </p>
                            <a href="<?php echo esc_url($settings['layout_one_button1_url']['url']); ?>" class="gt-theme-btn wow fadeInUp" data-wow-delay=".6s">
                                <span class="gt-text-btn">
                                    <span class="gt-text-2"><?php echo wp_kses( $settings['layout_one_button1_text'], 'cozmiq_allowed_tags' ); ?></span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="discount-left style-2">
                            <div class="gt-section-title mb-0">
                                <h6 class="wow fadeInUp justify-content-end">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_right_sub_title_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                    <?php echo wp_kses( $settings['layout_one_right_subtitle'], 'cozmiq_allowed_tags' ); ?>
                                </h6>
                                <h2 class="text-white wow fadeInUp" data-wow-delay=".2s">
                                    <?php echo wp_kses( $settings['layout_one_right_title'], 'cozmiq_allowed_tags' ); ?>
                                </h2>
                            </div>
                            <p class="text wow fadeInUp" data-wow-delay=".4s">
                                <?php echo wp_kses( $settings['layout_one_right_description'], 'cozmiq_allowed_tags' ); ?>
                            </p>
                            <a href="<?php echo esc_url($settings['layout_one_right_button1_url']['url']); ?>" class="gt-theme-btn wow fadeInUp" data-wow-delay=".6s">
                                <span class="gt-text-btn">
                                    <span class="gt-text-2"><?php echo wp_kses( $settings['layout_one_right_button1_text'], 'cozmiq_allowed_tags' ); ?></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>