<?php if ('layout_two' === $settings['layout_type']) : ?>
    <section class="gt-hero-section gt-hero-2 parallaxie fix bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_two_background_img']['url']) ?>);">
        <div class="hero-shape-bottom">
            <?php cozmiq_elementor_rendered_image($settings, 'layout_two_shape_two_img'); ?>
        </div>
        <?php if($settings['layout_two_socials']): ?>
            <div class="social-icon d-flex align-items-center">
                <?php foreach ($settings['layout_two_socials'] as $key => $single) : ?>
                    <a href="<?php echo esc_url($single['social_link']['url']); ?>"><?php \Elementor\Icons_Manager::render_icon($single['social_icon'], ['aria-hidden' => 'true'], 'i'); ?></a>
                <?php endforeach; ?>
                <span><?php echo wp_kses( $settings['layout_two_social_text'], 'cozmiq_allowed_tags' ); ?></span>
            </div>
        <?php endif; ?>
        <div class="hero-shape-right">
            <?php cozmiq_elementor_rendered_image($settings, 'layout_two_shape_one_img'); ?>
        </div>
        <?php if($settings['contact_info_repeater']): ?>
            <ul class="hero-contact">
                <?php foreach ($settings['contact_info_repeater'] as $key => $single) : ?>
                    <li>
                        <div class="icon">
                            <?php \Elementor\Icons_Manager::render_icon($single['contact_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                        </div>
                        <?php echo wp_kses( $single['contact_text'], 'cozmiq_allowed_tags' ); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="container">
            <div class="gt-hero-content text-center">
                <span class="wow fadeInUp">
                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_before_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                    <?php echo wp_kses( $settings['layout_two_subtitle'], 'cozmiq_allowed_tags' ); ?>
                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_after_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                </span>
                <h1 class="text-white wow fadeInUp" data-wow-delay=".2s">
                    <?php echo wp_kses( $settings['layout_two_title'], 'cozmiq_allowed_tags' ); ?>
                </h1>
                <p class="text-white mt-3 wow fadeInUp" data-wow-delay=".4s">
                    <?php echo wp_kses( $settings['layout_two_description'], 'cozmiq_allowed_tags' ); ?>
                </p>
                <div class="gt-hero-button wow fadeInUp" data-wow-delay=".6s">
                    <a href="<?php echo esc_url($settings['layout_two_button1_url']['url']); ?>" class="gt-theme-btn">
                        <?php echo wp_kses( $settings['layout_two_button1_text'], 'cozmiq_allowed_tags' ); ?>
                    </a>
                    <a href="<?php echo esc_url($settings['layout_two_button2_url']['url']); ?>" class="gt-theme-btn style-2">
                        <?php echo wp_kses( $settings['layout_two_button2_text'], 'cozmiq_allowed_tags' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>