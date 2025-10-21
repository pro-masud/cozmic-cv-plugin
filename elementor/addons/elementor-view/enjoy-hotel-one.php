<?php if ('layout_one' === $settings['layout_type']) : ?>
    <section class="gt-enjoy-hotel-section-3 section-padding">
        <div class="right-shape">
            <?php cozmiq_elementor_rendered_image($settings, 'layout_one_shape_img' ); ?>
        </div>
        <div class="container">
            <div class="gt-enjoy-hotel-wrapper-3">
                <div class="row g-4 align-items-end">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="gt-hotel-images-items">
                            <div class="gt-hotel-image">
                                <?php cozmiq_elementor_rendered_image($settings, 'layout_one_feature_img' ); ?>
                                <div class="gt-counter">
                                    <h2>
                                        <span class="gt-count"><?php echo wp_kses( $settings['layout_one_year_experience'], 'cozmiq_allowed_tags' ); ?></span><?php echo wp_kses( $settings['layout_one_symble'], 'cozmiq_allowed_tags' ); ?>
                                    </h2>
                                    <p>
                                        <?php echo wp_kses( $settings['layout_one_year_text'], 'cozmiq_allowed_tags' ); ?>
                                    </p>
                                </div>
                                <div class="gt-hotel-image-2">
                                    <?php cozmiq_elementor_rendered_image($settings, 'layout_one_feature_two_img' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="gt-enjoy-hotel-content">
                            <div class="gt-section-title mb-0">
                                <h6 class="wow fadeInUp">
                                    <?php \Elementor\Icons_Manager::render_icon($settings['layout_one_sub_title_icon'], ['aria-hidden' => 'true'], 'i'); ?>
                                    <?php echo wp_kses( $settings['layout_one_subtitle'], 'cozmiq_allowed_tags' ); ?>
                                </h6>
                                <h2 class="wow fadeInUp" data-wow-delay=".2s">
                                    <?php echo wp_kses( $settings['layout_one_title'], 'cozmiq_allowed_tags' ); ?>
                                </h2>
                            </div>
                            <p class="gt-hotel-text wow fadeInUp" data-wow-delay=".4s">
                                <?php echo wp_kses( $settings['layout_one_desc'], 'cozmiq_allowed_tags' ); ?>
                            </p>
                            <ul class="nav">
                                <?php $i = 1;  foreach ($settings['layout_one_tab_lists'] as $key => $single) :
                                    $tabTitle = $single['title'];
                                    $replace_title = str_replace(' ','-', $tabTitle );
                                    $replace_title = str_replace("'",'-', $replace_title );
                                    ?>
                                    <li class="nav-item wow fadeInUp" data-wow-delay=".<?php echo esc_attr($i); ?>s">
                                        <a href="#<?php echo esc_attr(strtolower($replace_title )); ?>" data-bs-toggle="tab" class="nav-link <?php echo $single['border_right'] === 'yes' ? 'active' : ''; ?>">
                                            <?php echo wp_kses( $single['title'], 'cozmiq_allowed_tags' ); ?>
                                        </a>
                                    </li>
                                <?php $i++; endforeach; ?>
                            </ul>
                            <div class="tab-content">
                                <?php foreach ($settings['layout_one_tab_lists'] as $key => $single) : 
                                    $tabTitle = $single['title'];
                                    $replace_title = str_replace(' ','-', $tabTitle );
                                    $replace_title = str_replace("'",'-', $replace_title );
                                    ?>
                                    <div id="<?php echo esc_attr(strtolower($replace_title )); ?>" class="tab-pane <?php echo $single['border_right'] === 'yes' ? 'fade show active' : ''; ?>">
                                        <div class="menu-list">
                                            <p><?php echo wp_kses( $single['list_title'], 'cozmiq_allowed_tags' ); ?></p>
                                            <ul>    
                                                <?php echo wp_kses( $single['tab_desc'], 'cozmiq_allowed_tags' ); ?>
                                            </ul>
                                            <a href="<?php echo esc_url($single['layout_one_button1_url']['url']); ?>" class="gt-theme-btn">
                                                <?php echo wp_kses( $single['layout_one_button1_text'], 'cozmiq_allowed_tags' ); ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>