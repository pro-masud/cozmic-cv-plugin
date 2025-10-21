<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-special-offer-section fix section-padding">
        <div class="gt-right-shape">
            <?php cozmiq_elementor_rendered_image($settings, 'layout_one_shape_image'); ?>
        </div>
        <div class="container">
            <div class="gt-section-title text-center">
                 <h6 class="justify-content-center wow fadeInUp">
                     <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_before_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                    <?php echo wp_kses( $settings['layout_one_subtitle'], 'cozmiq_allowed_tags' ); ?>
                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_after_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                </h6>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                    <?php echo wp_kses( $settings['layout_one_title'], 'cozmiq_allowed_tags' ); ?>
                </h2>
            </div>
        </div>
        <div class="gt-special-offer-wrapper">
            <div class="swiper gt-special-offer-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($settings['layout_one_special_offer_list'] as $key => $single) : ?>
                        <div class="swiper-slide">
                            <div class="gt-special-offer-box-items">
                                <div class="gt-thumb">
                                    <?php cozmiq_elementor_rendered_image($single, 'layout_one_feature_image'); ?>
                                    <?php cozmiq_elementor_rendered_image($single, 'layout_one_feature_image'); ?>
                                </div>
                                <div class="gt-content">
                                    <span><?php echo wp_kses( $single['category'], 'cozmiq_allowed_tags' ); ?></span>
                                    <h3><a href="<?php echo esc_url($single['url']['url']); ?>"><?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?></a></h3>
                                    <p><?php echo wp_kses( $single['desc'], 'cozmiq_allowed_tags' ); ?></p>
                                    <div class="gt-list-area">
                                        <?php echo wp_kses( $single['features'], 'cozmiq_allowed_tags' ); ?>
                                    </div>
                                    <div class="gt-price-list">
                                        <del><?php echo wp_kses( $single['regular_price'], 'cozmiq_allowed_tags' ); ?></del>
                                        <h4><?php echo wp_kses( $single['sale_price'], 'cozmiq_allowed_tags' ); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>