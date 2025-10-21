<?php
use Elementor\Controls_Manager;

    $this->start_controls_section(
        'content_section',
        [
            'label' => __('Content', 'cozmiq-cv'),
            'tab' => Controls_Manager::TAB_CONTENT,
            'condition' => [
                'layout_type' => 'layout_one'
            ]
        ]
    );

    $this->add_control(
        'layout_one_before_icon',
        [
            'label' => __('Before Icon', 'cozmiq-addon'),
            'type' => Controls_Manager::ICONS,
            'default' => [
                'value' => '',
                'library' => 'brand',
            ],
        ]
    );

    $this->add_control(
        'layout_one_subtitle',
        [
            'label' => esc_html__('Subtitle', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('G A L L E R Y', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_after_icon',
        [
            'label' => __('After Icon', 'cozmiq-addon'),
            'type' => Controls_Manager::ICONS,
            'default' => [
                'value' => '',
                'library' => 'brand',
            ],
        ]
    );

    $this->add_control(
        'layout_one_title',
        [
            'label' => esc_html__('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Our Restaurant Gallery", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $gallery_images = new \Elementor\Repeater();

    $gallery_images->add_control(
        'image',
        [
            'label' => __('Add Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $gallery_images->add_control(
        'gallery_col',
        [ 
            'label' => __( 'Column Number', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __( 'Add Column', 'cozmiq-cv' ),
            'default' => __( '6', 'cozmiq-cv' ),
            'label_block' => true
        ]
    );

    $this->add_control(
        'layout_one_gallery_images',
        [
            'label' => __('Gallery Items', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $gallery_images->get_controls(),
        ]
    );

$this->end_controls_section();