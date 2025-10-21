<?php 

// plugin core work
if ( ! function_exists( 'cozmiq_kses_allowed_html' ) ) :
    function cozmiq_kses_allowed_html( $tags, $context ) {
        switch ( $context ) {
            case 'cozmiq_allowed_tags':
                $tags = array(
                    'a' => array( 'href' => array(), 'class' => array() ),
                    'b' => array(),
                    'br' => array(),
                    'span' => array( 'class' => array(), 'data-count' => array() ),
                    'img' => array( 'class' => array(), 'decoding' => array(), 'src' => array(), 'alt' => array(), 'title' => array() ),
                    'i' => array( 'class' => array() ),
                    'p' => array( 'class' => array() ),
                    'ul' => array( 'class' => array() ),
                    'li' => array( 'class' => array() ),
                    'div' => array( 'class' => array() ),
                    'strong' => array(),
                    'sup' => array(),
                    
                    'svg' => array(
                        'xmlns' => array(),
                        'width' => array(),
                        'height' => array(),
                        'viewBox' => array(),
                        'fill' => array(),
                    ),
                    'path' => array(
                        'fill' => array(),
                        'd' => array(),
                        'fill-rule' => array(),
                        'clip-rule' => array(),
                    ),
                );
                return $tags;
            default:
                return $tags;
        }
    }

    add_filter( 'wp_kses_allowed_html', 'cozmiq_kses_allowed_html', 10, 2 );

endif;


if ( ! function_exists( 'cozmiq_elementor_rendered_image' ) ) {
    function cozmiq_elementor_rendered_image( $content, $name, $class = '', $duration = '', $delay = '' ) {
        if ( empty( $content[ $name ] ) ) {
            return;
        }

        $image = ( $content[ $name ]["id"] != "" ) ? wp_get_attachment_image_url( $content[ $name ]["id"], "full" ) : $content[ $name ]["url"];
        if ( empty( $image ) ) {
            return;
        }

        $image_attr = '';
        $title = \Elementor\Control_Media::get_image_title( $content[ $name ] );

        if ( ! empty( $title ) ) {
            $image_attr .= 'title="' . esc_attr( $title ) . '" ';
        }

        if ( ! empty( $class ) ) {
            $image_attr .= 'class="' . esc_attr( $class ) . '" ';
        }

        if ( ! empty( $duration ) ) {
            $image_attr .= 'data-wow-duration="' . esc_attr( $duration ) . '" ';
        }

        if ( ! empty( $delay ) ) {
            $image_attr .= 'data-wow-delay="' . esc_attr( $delay ) . '" ';
        }

        printf(
            '<img src="%s" alt="%s" %s>',
            esc_url( $image ),
            esc_attr( \Elementor\Control_Media::get_image_alt( $content[ $name ] ) ),
            $image_attr
        );
    }
}


if ( ! function_exists( 'cozmiq_elementor_general_style_options' ) ) :
    function cozmiq_elementor_general_style_options( $agrs, $label, $selector, $condition, $style = 'color', $typo = true, $color = true ) {
        //Label
        $agrs->add_control(
            str_replace( ' ', '_', $label ) . '_subtitle',
            [ 
                'type' => \Elementor\Controls_Manager::HEADING,
                'label' => __( $label, 'cozmiq-cv' ),
                'separator' => 'after',
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $agrs->add_responsive_control(
            str_replace( ' ', '_', $label ) . '_padding',
            [ 
                'label' => __( ' Padding', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [ 
                    $selector => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $agrs->add_responsive_control(
            str_replace( ' ', '_', $label ) . '_margin',
            [ 
                'label' => __( ' Margin', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [ 
                    $selector => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        if ( $typo ) :
            $agrs->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [ 
                    'name' => str_replace( ' ', '_', $label ) . '_typo',
                    'label' => esc_html__( ' Typography', 'cozmiq-cv' ),
                    'selector' => $selector,
                    'condition' => [ 
                        'layout_type' => $condition
                    ]
                ]
            );

        endif;
        if ( $color ) :
            $agrs->add_control(
                str_replace( ' ', '_', $label ) . '_color',
                [ 
                    'label' => __( 'Color', 'cozmiq-cv' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [ 
                        $selector => $style . ': {{VALUE}}',
                    ],
                    'condition' => [ 
                        'layout_type' => $condition
                    ]
                ]
            );
        endif;
    }
endif;

if ( ! function_exists( 'cozmiq_elementor_button_style_options' ) ) :
    function cozmiq_elementor_button_style_options( $init, $label, $selector, $hover_bg_selector = '', $condition = 'layout_one' ) {
        
        //Label
        $init->add_control(
            str_replace( ' ', '_', $label ) . '_subtitle_label',
            [ 
                'type' => \Elementor\Controls_Manager::HEADING,
                'label' => __( $label, 'cozmiq-cv' ),
                'separator' => 'after',
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_responsive_control(
            str_replace( ' ', '_', $label ) . '_padding',
            [ 
                'label' => __( 'Padding', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [ 
                    $selector => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [ 
                'name' => str_replace( ' ', '_', $label ) . '_typography',
                'selector' => $selector,
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [ 
                'name' => str_replace( ' ', '_', $label ) . '_border',
                'selector' => $selector,
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace( ' ', '_', $label ) . '_border_radius',
            [ 
                'label' => __( 'Border Radius', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [ 
                    $selector => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [ 
                'name' => str_replace( ' ', '_', $label ) . '_box_shadow',
                'selector' => $selector,
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace( ' ', '_', $label ) . '_hr',
            [ 
                'type' => \Elementor\Controls_Manager::DIVIDER,
                'style' => 'thick',
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->start_controls_tabs( str_replace( ' ', '_', $label ) . '_tabs_button' );

        $init->start_controls_tab(
            str_replace( ' ', '_', $label ) . '_tab_button_normal',
            [ 
                'label' => __( 'Normal', 'cozmiq-cv' ),
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace( ' ', '_', $label ) . '_color',
            [ 
                'label' => __( 'Text Color', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [ 
                    $selector => 'color: {{VALUE}};',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace( ' ', '_', $label ) . '_bg_color',
            [ 
                'label' => __( 'Background Color', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [ 
                    $selector => 'background-color: {{VALUE}};',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->end_controls_tab();

        $init->start_controls_tab(
            str_replace( ' ', '_', $label ) . '_tab_button_hover',
            [ 
                'label' => __( 'Hover', 'cozmiq-cv' ),
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace( ' ', '_', $label ) . '_hover_color',
            [ 
                'label' => __( 'Text Color', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [ 
                    $selector . ':hover,' . $selector . ':focus' => 'color: {{VALUE}};',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace( ' ', '_', $label ) . '_hover_bg_color',
            [ 
                'label' => __( 'Background Color', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [ 
                    $hover_bg_selector => 'background-color: {{VALUE}};',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace( ' ', '_', $label ) . '_hover_border_color',
            [ 
                'label' => __( 'Border Color', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'condition' => [ 
                    'button_border_border!' => '',
                ],
                'selectors' => [ 
                    $selector . ':hover,' . $selector . ':focus' => 'border-color: {{VALUE}};',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->end_controls_tab();
        $init->end_controls_tabs();
    }
endif;

if ( ! function_exists( 'cozmiq_elementor_form_style_options' ) ) :
    function cozmiq_elementor_form_style_options( $init, $label, $selector, $condition = 'layout_one' ) {
        
        //Label
        $init->add_control(
            str_replace( ' ', '_', $label ) . '_subtitle_label',
            [ 
                'type' => \Elementor\Controls_Manager::HEADING,
                'label' => __( $label, 'cozmiq-cv' ),
                'separator' => 'after',
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [ 
                'name' => str_replace( ' ', '_', $label ) . '_typography',
                'selector' => $selector,
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace( ' ', '_', $label ) . '_color',
            [ 
                'label' => __( 'Color', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [ 
                    $selector => 'color' . ': {{VALUE}}',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace( ' ', '_', $label ) . '_bg_color',
            [ 
                'label' => __( 'Background Color', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [ 
                    $selector => 'background-color' . ': {{VALUE}}',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_responsive_control(
            str_replace( ' ', '_', $label ) . '_margin',
            [ 
                'label' => __( ' Margin', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [ 
                    $selector => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_responsive_control(
            str_replace( ' ', '_', $label ) . '_padding',
            [ 
                'label' => __( 'Padding', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', 'em', '%' ],
                'selectors' => [ 
                    $selector => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [ 
                'name' => str_replace( ' ', '_', $label ) . '_border',
                'selector' => $selector,
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace( ' ', '_', $label ) . '_border_radius',
            [ 
                'label' => __( 'Border Radius', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%' ],
                'selectors' => [ 
                    $selector => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [ 
                'name' => str_replace( ' ', '_', $label ) . '_box_shadow',
                'selector' => $selector,
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace( ' ', '_', $label ) . '_width',
            [ 
                'label' => esc_html__( 'Width', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em' ],
                'range' => [ 
                    'px' => [ 
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [ 
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [ 
                    $selector => 'width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );

        $init->add_control(
            str_replace( ' ', '_', $label ) . '_height',
            [ 
                'label' => esc_html__( 'Height', 'cozmiq-cv' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em' ],
                'range' => [ 
                    'px' => [ 
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [ 
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [ 
                    $selector => 'height: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [ 
                    'layout_type' => $condition
                ]
            ]
        );
    }
endif;

if (! function_exists('cozmiq_post_query')) {
	function cozmiq_post_query($post_type)
	{
		$post_list = get_posts(array(
			'post_type' => $post_type,
			'showposts' => -1,
		));
		$posts = array();

		if (! empty($post_list) && ! is_wp_error($post_list)) {
			foreach ($post_list as $post) {
				$options[$post->ID] = $post->post_title;
			}
			return $options;
		}
	}
}

if ( ! function_exists( 'cozmiq_get_taxonoy' ) ) :
	function cozmiq_get_taxonoy( $taxonoy ) {
		$taxonomy_list = get_terms( array(
			'taxonomy' => $taxonoy,
			'hide_empty' => true,
		) );
		$options = [];
		if ( ! empty( $taxonomy_list ) && ! is_wp_error( $taxonomy_list ) ) {
			foreach ( $taxonomy_list as $taxonomy ) {
				$options[ $taxonomy->slug ] = $taxonomy->name;
			}
			return $options;
		}
	}
endif;

if ( ! function_exists( 'cozmiq_posted_by' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function cozmiq_posted_by() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( '%s', 'post author', 'karoons' ),
			'<a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( ucwords(get_the_author()) ) . '</a>'
		);

		echo $byline;

	}
endif;