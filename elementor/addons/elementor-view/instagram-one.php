<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-instagram-section fix">
        <div class="gt-instagram-wrapper-2">
            <div class="swiper gt-instagram-slider-2">
                <div class="swiper-wrapper">
                    <?php foreach ($settings['layout_one_instagram_lists'] as $key => $single) : ?>
                        <div class="swiper-slide">
                            <div class="gt-instagram-image mt-0">
                                <?php cozmiq_elementor_rendered_image($single, 'instagram_image'); ?>
                                <a href="<?php echo esc_url($single['url']['url']); ?>" class="gt-icon">
                                    <?php \Elementor\Icons_Manager::render_icon($single['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="gt-instagram-text-box">
                <div class="icon">
                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                </div>
                <?php echo wp_kses( $settings['layout_one_title'], 'cozmiq_allowed_tags' ); ?>
            </div>
        </div>
    </section>
<?php endif; ?>