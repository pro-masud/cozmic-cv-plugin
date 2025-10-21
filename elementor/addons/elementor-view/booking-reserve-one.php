<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-booking-reserve-section fix section-padding pb-0">
        <div class="gt-car-shape float-bob-x">
            <?php cozmiq_elementor_rendered_image($settings, 'layout_one_shape_image' ); ?>
        </div>
        <div class="container">
            <div class="gt-booking-reserve-wrapper">
                <div class="gt-section-title text-center">
                    <h6 class="justify-content-center wow fadeInUp">
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_before_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                            <?php echo wp_kses( $settings['layout_one_subtitle'], 'cozmiq_allowed_tags' ); ?>
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_after_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                    </h6>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".2s">
                        <?php echo wp_kses( $settings['layout_one_title'], 'cozmiq_allowed_tags' ); ?>
                    </h2>
                </div>
                <?php echo str_replace("<br />", "", trim(do_shortcode('[contact-form-7 id="' . $settings['layout_one_select_wpcf7_form'] . '" ]'))); ?>
            </div>
        </div>
        <div class="gt-booking-reserve-video parallaxie bg-cover" style="background-image: url('<?php echo esc_url($settings['layout_one_section_bg']['url']); ?>');">
            <div class="gt-video-items">
                <a href="<?php echo esc_url($settings['layout_one_video_url']['url']); ?>" class="video-btn video-popup">
                    <i class="fa-solid fa-play"></i>
                </a>
            </div>
        </div>
    </section>
<?php endif; ?>