<?php if ('layout_two' === $settings['layout_type']) : ?>
    <div class="gt-instagram-section section-padding pb-0 fix section-bg">
        <div class="container">
            <div class="gt-section-title text-center">
                <h6 class="justify-content-center wow fadeInUp">
                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_before_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                    <?php echo wp_kses( $settings['layout_two_subtitle'], 'cozmiq_allowed_tags' ); ?>
                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_after_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                </h6>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                    <?php echo wp_kses( $settings['layout_two_title'], 'cozmiq_allowed_tags' ); ?>
                </h2>
            </div>
        </div>
            <div class="swiper gt-instagram-slider"> 
            <div class="swiper-wrapper">
                <?php foreach ($settings['layout_two_instagram_lists'] as $key => $single) : ?>
                    <div class="swiper-slide">
                        <div class="gt-instagram-image">
                            <?php cozmiq_elementor_rendered_image($single, 'instagram_image'); ?>
                            <a href="<?php echo esc_url($single['url']['url']); ?>" class="gt-icon">
                                <?php \Elementor\Icons_Manager::render_icon($single['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>