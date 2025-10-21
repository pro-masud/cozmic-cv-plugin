<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-testimonial-section section-padding fix section-bg-3">
        <div class="gt-shape">
            <?php cozmiq_elementor_rendered_image($settings, 'layout_one_shape' ); ?>
        </div>
        <div class="container">
            <div class="gt-testimonial-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="gt-testimonial-left-content">
                            <div class="gt-section-title mb-0">
                                <h6 class="wow fadeInUp">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_before_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                    <?php echo wp_kses( $settings['layout_one_subtitle'], 'cozmiq_allowed_tags' ); ?>
                                </h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                    <?php echo wp_kses( $settings['layout_one_title'], 'cozmiq_allowed_tags' ); ?>
                                </h2>
                            </div>
                            <p class="gt-testimonial-text wow fadeInUp" data-wow-delay=".4s">
                               <?php echo wp_kses( $settings['layout_one_desc'], 'cozmiq_allowed_tags' ); ?>
                            </p>
                            <div class="gt-client-info wow fadeInUp" data-wow-delay=".6s">
                                <div class="gt-client-image">
                                    <?php cozmiq_elementor_rendered_image($settings, 'layout_one_client_image' ); ?>
                                </div>
                                <h3><?php echo wp_kses( $settings['layout_one_client_text'], 'cozmiq_allowed_tags' ); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="swiper gt-testimonial-slider">
                            <div class="swiper-wrapper">
                                <?php foreach ($settings['layout_one_testimonial'] as $key => $single) : ?>
                                    <div class="swiper-slide">
                                        <div class="gt-testimonial-box">
                                            <div class="quote-icon">
                                                <?php cozmiq_elementor_rendered_image($single, 'shape' ); ?>
                                            </div>
                                            <div class="star">
                                                 <?php
                                                    $rating = $single['rating']['size'];
                                                    $emptyStar = 5 - $rating;

                                                    for ($i = 0; $i < $rating; $i++): ?>
                                                        <i class="fa-solid fa-star"></i>
                                                    <?php endfor;

                                                    for ($j = 0; $j < $emptyStar; $j++): ?>
                                                        <i class="fa-solid fa-star color-2"></i>
                                                <?php endfor; ?>

                                            </div>
                                            <p class="gt-testi-text">
                                                <?php echo wp_kses( $single['description'], 'cozmiq_allowed_tags' ); ?>
                                            </p>
                                            <div class="gt-client-info">
                                                <div class="gt-client-image">
                                                    <?php cozmiq_elementor_rendered_image($single, 'image' ); ?>
                                                </div>
                                                <div class="gt-client-content">
                                                    <h4><?php echo wp_kses( $single['name'], 'cozmiq_allowed_tags' ); ?></h4>
                                                    <p><?php echo wp_kses( $single['designation'], 'cozmiq_allowed_tags' ); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="array-button-2 justify-content-center">
                            <button class="array-prev"><i class="fa-solid fa-chevron-left"></i></button>
                            <div class="swiper-dot1">
                                <div class="dot"></div>
                            </div>
                            <button class="array-next"><i class="fa-solid fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>