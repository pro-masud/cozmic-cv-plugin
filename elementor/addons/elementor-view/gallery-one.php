<?php if ('layout_one' == $settings['layout_type']) : ?>
    <section class="gt-restaurant-gallery-section section-padding pt-0 fix">
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
                <?php foreach ($settings['layout_one_gallery_images'] as $image) : ?>
                    <div class="col-lg-4 wow fadeInUp">
                        <div class="gt-restaurant-gallery-image">
                            <?php cozmiq_elementor_rendered_image($image, 'image'); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>