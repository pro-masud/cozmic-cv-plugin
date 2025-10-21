<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-team-details-section fix section-padding">
        <div class="container">
            <div class="gt-team-details-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="gt-thumb">
                            <?php cozmiq_elementor_rendered_image($settings, 'layout_one_team_image'); ?>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="gt-details-content">
                            <h2> <?php echo wp_kses( $settings['name'], 'cozmiq_allowed_tags' ); ?></h2>
                            <span><?php echo wp_kses( $settings['designation'], 'cozmiq_allowed_tags' ); ?></span>
                            <p>
                               <?php echo wp_kses( $settings['designation'], 'cozmiq_allowed_tags' ); ?>
                            </p>
                            <ul class="gt-list">
                                <li>
                                    <i class="fa-solid fa-phone"></i>
                                    <a href="tel:<?php echo esc_attr( $settings['phone_number']); ?>"><?php echo wp_kses( $settings['phone_number'], 'cozmiq_allowed_tags' ); ?></a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-square-chevron-down"></i> 
                                    <a href="mailto:<?php echo esc_attr( $settings['mail']); ?>"><?php echo wp_kses( $settings['mail'], 'cozmiq_allowed_tags' ); ?></a>
                                </li>
                            </ul>
                            <div class="gt-social-icon">
                                <?php echo wp_kses( $settings['social_media'], 'cozmiq_allowed_tags' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>