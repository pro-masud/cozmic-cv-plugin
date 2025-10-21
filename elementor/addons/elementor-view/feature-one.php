<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-hotel-feature-section-2 section-padding fix pt-0">
        <div class="container">
            <div class="gt-hotel-feature-area">
                <?php $i = 1; foreach ($settings['layout_one_feature_one_lists'] as $key => $single) : ?>
                    <div class="gt-hotel-feature-items wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <?php \Elementor\Icons_Manager::render_icon($single['icon'], ['aria-hidden' => 'true'], 'i'); ?>
                        </div>
                        <div class="content">
                            <h3><?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?></h3>
                            <p><?php echo wp_kses( $single['desc'], 'cozmiq_allowed_tags' ); ?></p>
                        </div>
                    </div>
                <?php  $i++; endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>