<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="team-section-3 fix section-padding section-bg"> 
        <div class="container">
            <div class="gt-section-title text-center">
                <h6 class="wow fadeInUp justify-content-center">
                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_sub_title_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                    <?php echo wp_kses( $settings['layout_one_subtitle'], 'cozmiq_allowed_tags' ); ?>
                </h6>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                    <?php echo wp_kses( $settings['layout_one_title'], 'cozmiq_allowed_tags' ); ?>
                </h2>
            </div>
            <div class="row">
                <?php $i= 3; foreach ($settings['layout_one_team_list'] as $key => $single) : ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".<?php echo esc_attr($i); ?>s">
                        <div class="team-card-item-3">
                            <div class="team-image">
                                <?php cozmiq_elementor_rendered_image($single, 'layout_one_team_image'); ?>
                                <div class="team-content">
                                    <h4>
                                        <a href="<?php echo esc_url($single['layout_one_button_url']['url']); ?>">
                                            <?php echo wp_kses( $single['name'], 'cozmiq_allowed_tags' ); ?>
                                        </a>
                                    </h4>
                                    <p>
                                        <?php echo wp_kses( $single['designation'], 'cozmiq_allowed_tags' ); ?>
                                    </p>
                                </div>
                                <div class="social-icon d-flex align-items-center">
                                    <?php echo wp_kses(  $single['social_media'], 'cozmiq_allowed_tags' ); ?>
                                    <span><?php echo wp_kses( $single['social_text'], 'cozmiq_allowed_tags' ); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php $i++; endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>