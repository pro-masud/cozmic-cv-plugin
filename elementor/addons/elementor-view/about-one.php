<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-about-section fix section-padding pt-0">
        <div class="gt-right-shape">
            <?php cozmiq_elementor_rendered_image($settings, 'layout_one_shape_img' ); ?>
        </div>
        <div class="container">
            <div class="gt-about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="gt-about-image-items">
                            <div class="gt-about-image wow fadeInUp" data-wow-delay=".2s">
                                <?php cozmiq_elementor_rendered_image($settings, 'layout_one_feature_img', 'wow fadeInUp', '', '.2s'); ?>
                                <div class="gt-about-image-2 wow fadeInUp" data-wow-delay=".4s">
                                    <?php cozmiq_elementor_rendered_image($settings, 'layout_one_feature_two_img' ); ?>
                                </div>
                            </div>
                            <div class="gt-award-box wow fadeInUp" data-wow-delay=".6s">
                                <div class="gt-icon">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_awad_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                </div>
                                <h4><?php echo wp_kses( $settings['layout_one_awad_text'], 'cozmiq_allowed_tags' ); ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="gt-about-content">
                            <div class="gt-section-title mb-0">
                                <h6 class="wow fadeInUp">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_sub_title_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                    <?php echo wp_kses( $settings['layout_one_subtitle'], 'cozmiq_allowed_tags' ); ?>
                                </h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                    <?php echo wp_kses( $settings['layout_one_title'], 'cozmiq_allowed_tags' ); ?>
                                </h2>
                            </div>
                            <p class="gt-about-text wow fadeInUp" data-wow-delay=".4s">
                                <?php echo wp_kses( $settings['layout_one_description'], 'cozmiq_allowed_tags' ); ?>
                            </p>
                            <ul class="gt-icon-list wow fadeInUp" data-wow-delay=".6s">
                                <?php foreach ($settings['layout_one_feature_one_lists'] as $key => $single) : ?>
                                    <li>
                                        <?php cozmiq_elementor_rendered_image($single, 'icon'); ?>
                                        <span><?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <ul class="gt-list wow fadeInUp" data-wow-delay=".8s">
                               <?php echo wp_kses( $settings['layout_one_list_items'], 'cozmiq_allowed_tags' ); ?>
                            </ul>
                            <div class="gt-about-button wow fadeInUp" data-wow-delay="1s">
                                <a href="<?php echo esc_url($settings['layout_one_button1_url']['url']); ?>" class="gt-theme-btn"><?php echo wp_kses( $settings['layout_one_button1_text'], 'cozmiq_allowed_tags' ); ?></a>
                                <div class="gt-call-icon">
                                    <div class="gt-call">
                                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_phone_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                    </div>
                                    <div class="gt-content">
                                        <span><?php echo wp_kses( $settings['layout_one_booking_text'], 'cozmiq_allowed_tags' ); ?></span>
                                        <a href="tel:<?php echo esc_attr( $settings['layout_one_booking_number']); ?>"><?php echo wp_kses( $settings['layout_one_booking_number'], 'cozmiq_allowed_tags' ); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>