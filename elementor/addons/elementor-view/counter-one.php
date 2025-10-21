<?php if ('layout_one' === $settings['layout_type']) : ?>
    <div class="gt-counter-section fix">
        <div class="container">
            <div class="gt-counter-wrapper">
                <?php foreach ($settings['layout_one_counter_one_lists'] as $key => $single) : ?>
                    <div class="gt-counter <?php echo $single['border_right'] === 'yes' ? 'border-none' : ''; ?>">
                        <h2>
                            <span class="gt-count"><?php echo wp_kses( $single['counter_number'], 'cozmiq_allowed_tags' ); ?></span><?php echo wp_kses( $single['symble'], 'cozmiq_allowed_tags' ); ?>
                        </h2>
                        <p><?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>