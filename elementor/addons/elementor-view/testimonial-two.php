<?php if ('layout_two' === $settings['layout_type']) : ?>
    <section class="gt-testimonial-section-2 fix section-padding bg-cover" style="background-image: url(<?php echo esc_url($settings['layout_two_section_bg']['url']); ?>);">
        <div class="container">
            <div class="gt-section-title text-center mb-0">
                <h6 class="wow fadeInUp justify-content-center">
                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_before_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                    <?php echo wp_kses( $settings['layout_two_subtitle'], 'cozmiq_allowed_tags' ); ?>
                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_two_after_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                </h6>
                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                   <?php echo wp_kses( $settings['layout_two_title'], 'cozmiq_allowed_tags' ); ?>
                </h2>
            </div>
            <div class="testimonial-wrapper-2">
                <div class="map-bg">
                    <?php cozmiq_elementor_rendered_image($settings, 'layout_two_map_image' ); ?>
                    <?php foreach ($settings['layout_two_testimonial'] as $key => $single) : ?>
                        <div class="testimonial-box-area <?php echo esc_attr( $single['testimonial_style'] ); ?>">
                            <div class="testimonial-box-2">
                                <div class="star">
                                    <?php
                                        $rating = $single['rating']['size'];
                                        $emptyStar = 5 - $rating;

                                        for ($i = 0; $i < $rating; $i++): ?>
                                            <i class="fa-solid fa-star"></i>
                                        <?php endfor;

                                        for ($j = 0; $j < $emptyStar; $j++): ?>
                                            <i class="fa-solid fa-star color-2"></i>
                                    <?php endfor; ?>
                                </div>
                                <p>
                                    <?php echo wp_kses( $single['description'], 'cozmiq_allowed_tags' ); ?>
                                </p>
                                <div class="client-info">
                                    <h4><?php echo wp_kses( $single['name'], 'cozmiq_allowed_tags' ); ?></h4>
                                    <span><?php echo wp_kses( $single['designation'], 'cozmiq_allowed_tags' ); ?></span>
                                </div>
                                <div class="arrow-shape">
                                    <?php cozmiq_elementor_rendered_image($single, 'shape' ); ?>
                                </div>
                            </div>
                            <div class="client-info-image">
                                <?php cozmiq_elementor_rendered_image($single, 'image' ); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>