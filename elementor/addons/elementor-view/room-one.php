<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-room-section fix section-padding section-bg">
        <div class="container">
            <div class="gt-section-title-area">
                <div class="gt-section-title">
                    <h6 class="wow fadeInUp">
                        <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_sub_title_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                        <?php echo wp_kses( $settings['layout_one_subtitle'], 'cozmiq_allowed_tags' ); ?>
                    </h6>
                    <h2 class="wow fadeInUp" data-wow-delay=".2s">
                        <?php echo wp_kses( $settings['layout_one_title'], 'cozmiq_allowed_tags' ); ?>
                    </h2>
                </div>
            </div>
        </div>
        <div class="gt-room-wrapper">
            <div class="swiper gt-room-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($settings['layout_one_room_list'] as $key => $single) : ?>
                        <div class="swiper-slide">
                            <div class="gt-room-box-items <?php echo $single['active_margin'] == 'yes' ? "style-margin" : ""; ?> ">
                                <div class="gt-thumb">
                                    <?php cozmiq_elementor_rendered_image($single, 'layout_one_room_image'); ?>
                                    <?php cozmiq_elementor_rendered_image($single, 'layout_one_room_image'); ?>
                                    <span class="gt-post-box">
                                       <?php echo wp_kses( $single['per_night'], 'cozmiq_allowed_tags' ); ?>
                                    </span>
                                </div>
                                <div class="gt-content">
                                    <a href="<?php echo esc_url($single['url']['url']); ?>" class="gt-post-cat">
                                        <?php echo wp_kses( $single['category'], 'cozmiq_allowed_tags' ); ?>
                                    </a>
                                    <h3>
                                        <a href="<?php echo esc_url($single['url']['url']); ?>">
                                            <?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?>
                                        </a>
                                    </h3>
                                    <ul class="gt-list">
                                        <li>
                                            <i class="flaticon-bed-1"></i>
                                            <?php echo wp_kses( $single['sqft_room'], 'cozmiq_allowed_tags' ); ?>
                                        </li>
                                        <li>
                                            <i class="flaticon-user"></i>
                                            <?php echo wp_kses( $single['guests'], 'cozmiq_allowed_tags' ); ?>
                                        </li>
                                    </ul>
                                    <a href="<?php echo esc_url($single['url']['url']); ?>" class="gt-link-btn">
                                        <?php echo wp_kses( $single['button_label'], 'cozmiq_allowed_tags' ); ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div> 
            </div>
        </div>
    </section>
<?php endif; ?>