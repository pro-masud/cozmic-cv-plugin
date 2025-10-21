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
            'label' => esc_html__('Sub Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('TESTIMONIAL', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_title',
        [
            'label' => esc_html__('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("What Our Guests Sayz", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_desc',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __("We pride ourselves on delivering unforgettable experiences — but don’t just take our word for it. Our guests return time and again for the impeccable service, exquisite surroundings, and the feeling of true indulgence.", 'cozmiq-cv'),
        ]
    );

    
    $this->add_control(
        'layout_one_client_text',
        [
            'label' => esc_html__('Client Text', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("More then <span>25K</span> clients Reviews", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );
    
    $this->add_control(
        'layout_one_client_image',
        [
            'label' => __('Client Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->add_control(
        'layout_one_shape',
        [
            'label' => __('Shape Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $layout_one_testimonial = new \Elementor\Repeater();

    $layout_one_testimonial->add_control(
        'name',
        [
            'label' => __('Name', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __('Kevin martin', 'cozmiq-cv'),
            'label_block' => true
        ]
    );

    $layout_one_testimonial->add_control(
        'designation',
        [
            'label' => __('Designation', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __('Customer', 'cozmiq-cv'),
            'label_block' => true
        ]
    );

    $layout_one_testimonial->add_control(
        'description',
        [
            'label' => __('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __('Default Testimonial Content', 'cozmiq-cv'),
        ]
    );

    $layout_one_testimonial->add_control(
        'rating',
        [
            'label' => __('Average Rating', 'cozmiq-cv'),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['count'],
            'range' => [
                'count' => [
                    'min' => 1,
                    'max' => 5,
                    'step' => 1,
                ],
            ],
            'default' => [
                'unit' => 'count',
                'size' => 5,
            ],
        ]
    );

    $layout_one_testimonial->add_control(
        'image',
        [
            'label' => __('Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $layout_one_testimonial->add_control(
        'shape',
        [
            'label' => __('Shape', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->add_control(
        'layout_one_testimonial',
        [
            'label' => __('Testimonial Items', 'cozmiq-cv'),
            'prevent_empty' => false,
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_testimonial->get_controls(),
            'title_field' => '{{{ name }}}',
        ]
    );

    $this->end_controls_section();