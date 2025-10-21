<?php if ('layout_three' === $settings['layout_type']) : ?>
    <section class="gt-hero-section fix hero-3 bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_three_background_img']['url']) ?>);">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 order-2 order-xxl-1">
                    <div class="gt-hero-image">
                        <?php cozmiq_elementor_rendered_image($settings, 'layout_three_feature_image'); ?>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-xxl-2">
                    <div class="hero-content">
                        <div class="star-items">
                            <?php
                                $rating = $settings['layout_three_rating']['size'];
                                $emptyStar = 5 - $rating;

                                for ($i = 0; $i < $rating; $i++): ?>
                                    <i class="fa-solid fa-star"></i>
                                <?php endfor; ?>
                            <span><?php echo wp_kses( $settings['layout_three_rating_client'], 'cozmiq_allowed_tags' ); ?></span>
                        </div>
                        <h1 class="wow fadeInUp">
                            <?php echo wp_kses( $settings['layout_three_title'], 'cozmiq_allowed_tags' ); ?>
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay=".2s">
                            <?php echo wp_kses( $settings['layout_three_description'], 'cozmiq_allowed_tags' ); ?>
                        </p>
                        <div class="gt-hero-button wow fadeInUp" data-wow-delay=".4s">
                            <a href="<?php echo esc_url($settings['layout_three_button1_url']['url']); ?>" class="gt-theme-btn">
                                <?php echo wp_kses( $settings['layout_three_button1_text'], 'cozmiq_allowed_tags' ); ?>
                            </a>
                            <div class="gt-call-icon">
                                <div class="gt-call">
                                    <i class="flaticon-phone"></i>
                                </div>
                                <div class="gt-content">
                                    <span><?php echo wp_kses( $settings['layout_three_phone_text'], 'cozmiq_allowed_tags' ); ?></span>
                                    <a href="tel:<?php echo esc_attr($settings['layout_three_number']) ?>">
                                        <?php echo wp_kses( $settings['layout_three_number'], 'cozmiq_allowed_tags' ); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>