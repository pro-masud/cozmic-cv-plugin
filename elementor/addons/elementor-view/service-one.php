<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-service-section fix section-padding section-bg-3">
        <div class="left-shape">
            <img src="<?php echo esc_url($settings['layout_one_background_image']['url']); ?>" alt="img">
        </div>
        <div class="container">
            <div class="gt-service-wrapper-3">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="service-content">
                            <div class="gt-section-title mb-0">
                                <h6 class="wow fadeInUp">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_sub_title_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                    <?php echo wp_kses( $settings['layout_one_subtitle'], 'cozmiq_allowed_tags' ); ?>
                                </h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                    <?php echo wp_kses( $settings['layout_one_title'], 'cozmiq_allowed_tags' ); ?>
                                </h2>
                            </div>
                            <p class="service-text wow fadeInUp" data-wow-delay=".4s">
                                <?php echo wp_kses( $settings['layout_one_desc'], 'cozmiq_allowed_tags' ); ?>
                            </p>
                            <?php foreach ($settings['layout_one_service_list'] as $key => $single) : ?>
                                <div class="faq-item <?php echo $single['active'] == 'yes' ? 'active' : ''; ?> wow fadeInUp" data-wow-delay=".6s">
                                    <h3>
                                        <i class="fa-solid fa-circle-chevron-right"></i>
                                        <?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?>
                                    </h3>
                                    <p class="faq-text">
                                        <?php echo wp_kses( $single['desc'], 'cozmiq_allowed_tags' ); ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                            <a href="<?php echo esc_url($settings['layout_one_button1_url']['url']); ?>" class="gt-theme-btn wow fadeInUp" data-wow-delay=".9s">
                                <?php echo wp_kses( $settings['layout_one_button1_text'], 'cozmiq_allowed_tags' ); ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="swiper service-image-slider">
                            <div class="swiper-wrapper">
                                <?php foreach ($settings['layout_one_service_list'] as $key => $single) : ?>
                                    <div class="swiper-slide">
                                        <div class="service-image">
                                            <?php cozmiq_elementor_rendered_image($single, 'layout_one_service_image'); ?>
                                            <span class="offer-text"><?php echo wp_kses( $single['price'], 'cozmiq_allowed_tags' ); ?></span>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="array-button-2 justify-content-center">
                                <button class="array-next"><i class="fa-solid fa-chevron-left"></i></button>
                                <button class="array-prev"><i class="fa-solid fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>