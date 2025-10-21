<?php if ('layout_three' === $settings['layout_type']) : ?>
    <section class="gt-room-section fix section-padding bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_three_background_image']['url']); ?>);">
        <div class="container">
            <div class="gt-room-wrapper-3">
                <div class="gt-section-title-area">
                    <div class="gt-section-title">
                        <h6 class="wow fadeInUp">
                            <?php \Elementor\Icons_Manager::render_icon($settings['layout_three_sub_title_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                            <?php echo wp_kses( $settings['layout_three_subtitle'], 'cozmiq_allowed_tags' ); ?>
                        </h6>
                        <h2 class="text-white fadeInUp" data-wow-delay=".2s">
                            <?php echo wp_kses( $settings['layout_three_title'], 'cozmiq_allowed_tags' ); ?>
                        </h2>
                    </div>
                    <a href="<?php echo esc_url($settings['layout_three_button_url']['url']); ?>" class="gt-theme-btn wow fadeInUp" data-wow-delay=".4s">
                        <?php echo wp_kses( $settings['layout_three_button_label'], 'cozmiq_allowed_tags' ); ?>
                    </a>
                </div>
                <div class="gt-room-top-items">
                    <div class="row justify-content-center">
                        <?php foreach ($settings['layout_three_feature_room_list'] as $key => $single) : ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="top-title">
                                    <a href="<?php echo esc_url($single['url']['url']); ?>">
                                        <?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?> <?php cozmiq_elementor_rendered_image($single, 'layout_three_feature_room_image'); ?>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="room-slider-image-3">
            <div class="swiper room-slider-3">
                <div class="swiper-wrapper">
                    <?php foreach ($settings['layout_three_room_list'] as $key => $single) : ?>
                        <div class="swiper-slide">
                            <div class="room-thumb">
                                <?php cozmiq_elementor_rendered_image($single, 'layout_three_room_image'); ?>
                                <div class="room-content">
                                    <span><?php echo wp_kses( $single['price'], 'cozmiq_allowed_tags' ); ?></span>
                                    <div class="content">
                                        <h3><a href="<?php echo esc_url($single['url']['url']); ?>"><?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?></a></h3>
                                        <ul>
                                            <?php echo wp_kses( $single['service_list'], 'cozmiq_allowed_tags' ); ?>
                                        </ul>
                                        <a href="<?php echo esc_url($single['url']['url']); ?>" class="gt-theme-btn">
                                            <?php echo wp_kses( $single['button_label'], 'cozmiq_allowed_tags' ); ?>
                                        </a>
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