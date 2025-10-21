<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-service-section fix section-padding fix section-padding">
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
            <div class="row">
                <?php $i = 1; foreach ($settings['layout_one_facilities_one_lists'] as $key => $single) : ?>
                <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 wow fadeInUp" data-wow-delay=".<?php echo esc_attr($i + 2); ?>s">
                    <div class="service-box-items">
                        <div class="icon">
                            <?php \Elementor\Icons_Manager::render_icon($single['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                        </div>
                        <h4><?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?></h4>
                    </div>    
                </div>
                <?php  $i++; endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>