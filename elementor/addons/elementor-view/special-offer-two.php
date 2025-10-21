<?php if ('layout_two' === $settings['layout_type']) : ?>
   <section class="gt-offer-section-3 parallaxie fix section-padding bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_two_background_image']['url']); ?>);">
        <div class="left-shape">
            <?php cozmiq_elementor_rendered_image($settings, 'layout_two_left_shape_image'); ?>
            <a href="<?php echo esc_url($settings['layout_two_video_link']['url']); ?>" class="video-btn ripple video-popup">
                <i class="fa-solid fa-play"></i>
            </a>
        </div>
        <span class="book-text"><?php echo wp_kses( $settings['layout_two_booking_text'], 'cozmiq_allowed_tags' ); ?></span>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="gt-offer-content-left-3">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <?php cozmiq_elementor_rendered_image($settings, 'layout_two_logo_image'); ?>
                        </a>
                        <h2 class="wow fadeInUp" data-wow-delay=".5s">
                            <?php echo wp_kses( $settings['layout_two_heading'], 'cozmiq_allowed_tags' ); ?>
                        </h2>
                        <h5 class="wow fadeInUp" data-wow-delay=".7s"><?php echo wp_kses( $settings['layout_two_subheading'], 'cozmiq_allowed_tags' ); ?></h5>
                        <h4 class="wow fadeInUp" data-wow-delay=".7s"><?php echo wp_kses( $settings['layout_two_price'], 'cozmiq_allowed_tags' ); ?></h4>
                        <p class="wow fadeInUp" data-wow-delay=".9">
                            <?php echo wp_kses( $settings['layout_two_description'], 'cozmiq_allowed_tags' ); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>