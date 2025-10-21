<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-team-Experience-section section-padding fix section-bg-3">
        <div class="container">
            <div class="gt-team-experience-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="gt-team-experience-content">
                            <div class="gt-list-item">
                                <h3><?php echo wp_kses( $settings['layout_one_title'], 'cozmiq_allowed_tags' ); ?></h3>
                                <p class="mt-3">
                                    <?php echo wp_kses( $settings['layout_one_desc'], 'cozmiq_allowed_tags' ); ?>
                                </p>
                            </div>
                            <div class="gt-skill-feature-items">
                                <?php $i = 1; foreach ($settings['layout_one_progress_bar_one_lists'] as $key => $single) : ?>
                                    <div class="gt-skill-feature">
                                        <h3 class="gt-box-title"><?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?></h3>
                                        <div class="gt-progress">
                                            <div class="gt-progress-bar" style="width: <?php echo esc_attr( $single['percentage'] ); ?>%; animation: 2.6s ease 0s 1 normal none running animate-positive; opacity: 1;">
                                                <div class="gt-progress-value"><span class="counter-number2"><?php echo wp_kses( $single['percentage'], 'cozmiq_allowed_tags' ); ?></span><?php echo wp_kses( $single['percentage_symble'], 'cozmiq_allowed_tags' ); ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php  $i++; endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form-items">
                            <h3><?php echo wp_kses( $settings['layout_one_contact_title'], 'cozmiq_allowed_tags' ); ?></h3>
                            <div id="contact-form">
                                <?php echo str_replace("<br />", "", trim(do_shortcode('[contact-form-7 id="' . $settings['layout_one_select_wpcf7_form'] . '" ]'))); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>