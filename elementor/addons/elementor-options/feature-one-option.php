<?php 
use Elementor\Controls_Manager;

    $this->start_controls_section(
        'layout_one_banner_content',
        [
            'label' => esc_html__('Content', 'cozmiq-cv'),
            'tab' => Controls_Manager::TAB_CONTENT,
            'condition' => [
                'layout_type' => 'layout_one'
            ]
        ]
    );

    $layout_one_feature_one_lists = new \Elementor\Repeater();

    $layout_one_feature_one_lists->add_control(
        'title',
        [
            'label' => __('title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '2',
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Default title', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_feature_one_lists->add_control(
        'desc',
        [
            'label' => __('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'placeholder' => __('Add Description', 'cozmiq-cv'),
            'default' => __('Default Description', 'cozmiq-cv'),
        ]
    );

    $layout_one_feature_one_lists->add_control(
        'icon',
    [
            'label' => __('Icon', 'cozmiq-addon'),
            'type' => Controls_Manager::ICONS,
            'default' => [
                'value' => '',
                'library' => 'brand',
            ],
        ]
    );

    $this->add_control(
        'layout_one_feature_one_lists',
        [
            'label' => __('Facilities List', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_feature_one_lists->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ title }}}',
        ]
    );

    $this->end_controls_section();