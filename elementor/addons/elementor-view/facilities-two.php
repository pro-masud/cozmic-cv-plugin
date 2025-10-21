<?php if ('layout_two' === $settings['layout_type']) : ?>
    <section class="gt-why-choose-us-section-2 section-padding fix">
        <div class="gt-choose-us-shape">
            <?php cozmiq_elementor_rendered_image($settings, 'layout_two_shape_image' ); ?>
        </div>
        <div class="container">
            <div class="gt-section-title text-center">
                <h6 class="justify-content-center wow fadeInUp">
                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_before_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                        <?php echo wp_kses( $settings['layout_two_subtitle'], 'cozmiq_allowed_tags' ); ?>
                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_after_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                </h6>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                    <?php echo wp_kses( $settings['layout_two_title'], 'cozmiq_allowed_tags' ); ?>
                </h2>
            </div>
            <div class="row">
                <?php $i = 1; foreach ($settings['layout_two_facilities_one_lists'] as $key => $single) : ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="gt-why-choose-us-images">
                            <div class="gt-choose-us-image">
                                <?php cozmiq_elementor_rendered_image($single, 'image' ); ?>
                                <div class="gt-content">
                                    <h3><?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?></h3>
                                    <p>
                                        <?php echo wp_kses( $single['desc'], 'cozmiq_allowed_tags' ); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php  $i++; endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>