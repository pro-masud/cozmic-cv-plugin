<?php if ('layout_one' === $settings['layout_type']) : ?>
    <div class="marquee-section fix section-padding pt-0">
        <div class="marquee">
            <div class="marquee-group">
                <?php foreach ($settings['layout_one_marquee_text_one_lists'] as $key => $single) : ?>
                    <div class="text"><?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?></div>
                    <div class="text">
                        <?php cozmiq_elementor_rendered_image($single, 'shape_image'); ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="marquee-group">
                <?php foreach ($settings['layout_one_marquee_text_one_lists'] as $key => $single) : ?>
                    <div class="text"><?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?></div>
                    <div class="text">
                        <?php cozmiq_elementor_rendered_image($single, 'shape_image'); ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="marquee-group">
                <?php foreach ($settings['layout_one_marquee_text_one_lists'] as $key => $single) : ?>
                    <div class="text"><?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?></div>
                    <div class="text">
                        <?php cozmiq_elementor_rendered_image($single, 'shape_image'); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>