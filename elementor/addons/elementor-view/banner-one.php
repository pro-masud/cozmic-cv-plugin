<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-hero-section gt-hero-1 fix bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_one_background_img']['url']) ?>);">
        <div class="container-fluid">
            <div class="row g-4">
                <div class="col-xl-7">
                    <div class="gt-hero-content">
                        <span class="wow fadeInUp">
                             <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_sub_title_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                            <?php echo wp_kses( $settings['layout_one_subtitle'], 'cozmiq_allowed_tags' ); ?>
                        </span>
                        <h1 class="wow fadeInUp" data-wow-delay=".2s">
                            <?php echo wp_kses( $settings['layout_one_title'], 'cozmiq_allowed_tags' ); ?>
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                            <?php echo wp_kses( $settings['layout_one_description'], 'cozmiq_allowed_tags' ); ?>
                        </p>
                        <div class="gt-hero-button wow fadeInUp" data-wow-delay=".6s">
                            <a href="<?php echo esc_url($settings['layout_one_button1_url']['url']); ?>" class="gt-theme-btn">
                                <?php echo wp_kses( $settings['layout_one_button1_text'], 'cozmiq_allowed_tags' ); ?>
                            </a>
                            <a href="<?php echo esc_url($settings['layout_one_button2_url']['url']); ?>" class="gt-theme-btn style-2">
                                <?php echo wp_kses( $settings['layout_one_button2_text'], 'cozmiq_allowed_tags' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="gt-hero-image">
                        <?php cozmiq_elementor_rendered_image($settings, 'layout_one_feature_img'); ?>
                        <div class="gt-arrow-shape">
                            <?php cozmiq_elementor_rendered_image($settings, 'layout_one_shape_img'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>