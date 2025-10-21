<?php if ('layout_one' == $settings['layout_type']) : ?>
    <section class="gt-food-menu-section section-padding fix section-bg">
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
            <ul class="nav">
                <?php foreach ($settings['layout_one_food_list'] as $single_food) : ?>
                    <li class="nav-item wow fadeInUp" data-wow-delay=".2s">
                        <a href="#<?php echo esc_attr($single_food['layout_one_food_slug']); ?>" data-bs-toggle="tab" class="nav-link <?php echo $single_food['active'] === 'yes' ? 'active' : ''; ?>">
                            <?php cozmiq_elementor_rendered_image($single_food, 'icon_image'); ?>
                            <?php echo wp_kses( $single_food['layout_one_food_title'], 'cozmiq_allowed_tags' ); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="tab-content">
                <div id="<?php echo esc_attr($settings['layout_one_fast_food_slug']); ?>" class="tab-pane fade show active">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php foreach ($settings['layout_one_fast_food_list_one'] as $single_food) : ?>
                                <ul class="gt-food-menu-list">
                                    <li>
                                        <div class="food-image">
                                            <?php cozmiq_elementor_rendered_image($single_food, 'food_image'); ?>
                                        </div>
                                        <div class="food-content">
                                            <h3><?php echo wp_kses( $single_food['layout_one_fast_food_title'], 'cozmiq_allowed_tags' ); ?></h3>
                                            <p><?php echo wp_kses( $single_food['layout_one_fast_food_desc'], 'cozmiq_allowed_tags' ); ?></p>
                                        </div>
                                        <span><?php echo wp_kses( $single_food['layout_one_fast_food_price'], 'cozmiq_allowed_tags' ); ?></span>
                                    </li>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-lg-6">
                            <?php foreach ($settings['layout_one_fast_food_list_two'] as $single_food) : ?>
                                <ul class="gt-food-menu-list">
                                    <li>
                                        <div class="food-image">
                                            <?php cozmiq_elementor_rendered_image($single_food, 'food_image'); ?>
                                        </div>
                                        <div class="food-content">
                                            <h3><?php echo wp_kses( $single_food['layout_one_fast_food_title'], 'cozmiq_allowed_tags' ); ?></h3>
                                            <p><?php echo wp_kses( $single_food['layout_one_fast_food_desc'], 'cozmiq_allowed_tags' ); ?></p>
                                        </div>
                                        <span><?php echo wp_kses( $single_food['layout_one_fast_food_price'], 'cozmiq_allowed_tags' ); ?></span>
                                    </li>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div id="<?php echo esc_attr($settings['layout_one_fresh_pasta_slug']); ?>" class="tab-pane fade">
                    <div class="row">
                        <div class="col-lg-6">
                            <?php foreach ($settings['layout_one_fresh_pasta_list_one'] as $single_food) : ?>
                                <ul class="gt-food-menu-list">
                                    <li>
                                        <div class="food-image">
                                            <?php cozmiq_elementor_rendered_image($single_food, 'food_image'); ?>
                                        </div>
                                        <div class="food-content">
                                            <h3><?php echo wp_kses( $single_food['layout_one_fast_food_title'], 'cozmiq_allowed_tags' ); ?></h3>
                                            <p><?php echo wp_kses( $single_food['layout_one_fast_food_desc'], 'cozmiq_allowed_tags' ); ?></p>
                                        </div>
                                        <span><?php echo wp_kses( $single_food['layout_one_fast_food_price'], 'cozmiq_allowed_tags' ); ?></span>
                                    </li>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-lg-6">
                            <?php foreach ($settings['layout_one_fresh_pasta_list_two'] as $single_food) : ?>
                                <ul class="gt-food-menu-list">
                                    <li>
                                        <div class="food-image">
                                            <?php cozmiq_elementor_rendered_image($single_food, 'food_image'); ?>
                                        </div>
                                        <div class="food-content">
                                            <h3><?php echo wp_kses( $single_food['layout_one_fast_food_title'], 'cozmiq_allowed_tags' ); ?></h3>
                                            <p><?php echo wp_kses( $single_food['layout_one_fast_food_desc'], 'cozmiq_allowed_tags' ); ?></p>
                                        </div>
                                        <span><?php echo wp_kses( $single_food['layout_one_fast_food_price'], 'cozmiq_allowed_tags' ); ?></span>
                                    </li>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div id="<?php echo esc_attr($settings['layout_one_chicken_pizza_slug']); ?>" class="tab-pane fade">
                        <div class="row">
                        <div class="col-lg-6">
                            <?php foreach ($settings['layout_one_fresh_pasta_list_one'] as $single_food) : ?>
                                <ul class="gt-food-menu-list">
                                    <li>
                                        <div class="food-image">
                                            <?php cozmiq_elementor_rendered_image($single_food, 'food_image'); ?>
                                        </div>
                                        <div class="food-content">
                                            <h3><?php echo wp_kses( $single_food['layout_one_fast_food_title'], 'cozmiq_allowed_tags' ); ?></h3>
                                            <p><?php echo wp_kses( $single_food['layout_one_fast_food_desc'], 'cozmiq_allowed_tags' ); ?></p>
                                        </div>
                                        <span><?php echo wp_kses( $single_food['layout_one_fast_food_price'], 'cozmiq_allowed_tags' ); ?></span>
                                    </li>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-lg-6">
                            <?php foreach ($settings['layout_one_chicken_pizza_list_two'] as $single_food) : ?>
                                <ul class="gt-food-menu-list">
                                    <li>
                                        <div class="food-image">
                                            <?php cozmiq_elementor_rendered_image($single_food, 'food_image'); ?>
                                        </div>
                                        <div class="food-content">
                                            <h3><?php echo wp_kses( $single_food['layout_one_fast_food_title'], 'cozmiq_allowed_tags' ); ?></h3>
                                            <p><?php echo wp_kses( $single_food['layout_one_fast_food_desc'], 'cozmiq_allowed_tags' ); ?></p>
                                        </div>
                                        <span><?php echo wp_kses( $single_food['layout_one_fast_food_price'], 'cozmiq_allowed_tags' ); ?></span>
                                    </li>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div id="<?php echo esc_attr($settings['layout_one_drink_juice_slug']); ?>" class="tab-pane fade">
                        <div class="row">
                        <div class="col-lg-6">
                            <?php foreach ($settings['layout_one_drink_juice_list_one'] as $single_food) : ?>
                                <ul class="gt-food-menu-list">
                                    <li>
                                        <div class="food-image">
                                            <?php cozmiq_elementor_rendered_image($single_food, 'food_image'); ?>
                                        </div>
                                        <div class="food-content">
                                            <h3><?php echo wp_kses( $single_food['layout_one_fast_food_title'], 'cozmiq_allowed_tags' ); ?></h3>
                                            <p><?php echo wp_kses( $single_food['layout_one_fast_food_desc'], 'cozmiq_allowed_tags' ); ?></p>
                                        </div>
                                        <span><?php echo wp_kses( $single_food['layout_one_fast_food_price'], 'cozmiq_allowed_tags' ); ?></span>
                                    </li>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-lg-6">
                            <?php foreach ($settings['layout_one_drink_juice_list_two'] as $single_food) : ?>
                                <ul class="gt-food-menu-list">
                                    <li>
                                        <div class="food-image">
                                            <?php cozmiq_elementor_rendered_image($single_food, 'food_image'); ?>
                                        </div>
                                        <div class="food-content">
                                            <h3><?php echo wp_kses( $single_food['layout_one_fast_food_title'], 'cozmiq_allowed_tags' ); ?></h3>
                                            <p><?php echo wp_kses( $single_food['layout_one_fast_food_desc'], 'cozmiq_allowed_tags' ); ?></p>
                                        </div>
                                        <span><?php echo wp_kses( $single_food['layout_one_fast_food_price'], 'cozmiq_allowed_tags' ); ?></span>
                                    </li>
                                </ul>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>