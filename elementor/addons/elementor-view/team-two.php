<?php if ('layout_two' === $settings['layout_type']) : ?>
    <section class="team-section-3 fix section-padding"> 
        <div class="container">
            <div class="row g-4">
                <?php $i= 3; foreach ($settings['layout_two_team_list'] as $key => $single) : ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".<?php echo esc_attr($i); ?>s">
                        <div class="team-card-item-3">
                            <div class="team-image">
                                <?php cozmiq_elementor_rendered_image($single, 'layout_two_team_image'); ?>
                                <div class="team-content">
                                    <h4>
                                        <a href="<?php echo esc_url($single['layout_two_button_url']['url']); ?>">
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