<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="faq-section fix section-padding section-bg">
        <div class="container">
            <div class="gt-faq-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="gt-faq-content">
                            <div class="gt-section-title mb-0">
                                <h6 class="wow fadeInUp">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_sub_title_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                    <?php echo wp_kses( $settings['layout_one_subtitle'], 'cozmiq_allowed_tags' ); ?>
                                </h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                    <?php echo wp_kses( $settings['layout_one_title'], 'cozmiq_allowed_tags' ); ?>
                                </h2>
                            </div>
                            <p class="gt-faq-text wow fadeInUp" data-wow-delay=".5s">
                                <?php echo wp_kses( $settings['layout_one_description'], 'cozmiq_allowed_tags' ); ?>
                            </p>
                            <div class="gt-faq-button wow fadeInUp" data-wow-delay=".7s">
                                <a href="<?php echo esc_url($settings['layout_one_button1_url']['url']); ?>" class="gt-theme-btn">
                                    <span class="gt-text-btn">
                                        <span class="gt-text-2"><?php echo wp_kses( $settings['layout_one_button1_text'], 'cozmiq_allowed_tags' ); ?></span>
                                    </span>
                                </a>
                                <a href="<?php echo esc_url($settings['layout_one_button2_url']['url']); ?>" class="gt-theme-btn gt-border-style">
                                    <span class="gt-text-btn">
                                        <span class="gt-text-2"><?php echo wp_kses( $settings['layout_one_button2_text'], 'cozmiq_allowed_tags' ); ?></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp">
                        <div class="faq-items mt-0 ms-0">
                            <div class="accordion" id="accordionExample">
                                <?php foreach ($settings['layout_one_faq_lists'] as $key => $item) :
                                     $randomNumber = rand(1,10);
                                    ?>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".3s">
                                        <h2 class="accordion-header" id="heading<?php echo esc_attr($randomNumber); ?>">
                                            <button class="accordion-button <?php echo esc_attr(('yes' == $item['active_status'] ? '' : 'collapsed')); ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo esc_attr($randomNumber); ?>" aria-expanded="true" aria-controls="collapse<?php echo esc_attr($randomNumber); ?>">
                                                <?php echo wp_kses( $item['question'], 'cozmiq_allowed_tags' ); ?>
                                            </button>
                                        </h2>
                                        <div id="collapse<?php echo esc_attr($randomNumber); ?>" class="accordion-collapse collapse <?php echo esc_attr(('yes' == $item['active_status'] ? 'show' : '')); ?>" aria-labelledby="heading<?php echo esc_attr($randomNumber); ?>" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    <?php echo wp_kses( $item['answer'], 'cozmiq_allowed_tags' ); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php $randomNumber++; endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>