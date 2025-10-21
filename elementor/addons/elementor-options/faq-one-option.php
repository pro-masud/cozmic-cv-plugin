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
        'layout_one_subtitle',
        [
            'label' => esc_html__('Subtitle', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('Ask Question', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_sub_title_icon',
    [
            'label' => __('Sub Title Icon', 'cozmiq-addon'),
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
            'default' => __("Frequently Asked Question", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_description',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __("Have questions about your stay, booking process, or our services? You're in the right place.  We’ve compiled answers to the most common inquiries from our guests to help you plan your trip with confidence. From check-in times to special amenities, this section is designed to give you quick and helpful information at a glance.", 'cozmiq-cv'),
        ]
    );

    $this->add_control(
        'layout_one_button1_text',
        [
            'label' => __( 'Button One Label', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'CONTACT US', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_button1_url',
        [
            'label' => esc_html__( 'Button One Url', 'cozmiq-cv' ),
            'type' => Controls_Manager::URL,
            'default' => [
                'url' => '#',
                'is_external' => false,
                'nofollow' => false,
            ],
        ]
    );

    $this->add_control(
        'layout_one_button2_text',
        [
            'label' => __( 'Button Two Label', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'ABOUT US', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_button2_url',
        [
            'label' => esc_html__( 'Button Two Link', 'cozmiq-cv' ),
            'type' => Controls_Manager::URL,
             'default' => [
                'url' => '#',
                'is_external' => false,
                'nofollow' => false,
            ],
        ]
    );

    $layout_one_faq_lists = new \Elementor\Repeater();

    $layout_one_faq_lists->add_control(
        'question',
        [
            'label' => __('Question', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '2',
            'placeholder' => __('Add Question', 'cozmiq-cv'),
            'default' => __('Default Question', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_faq_lists->add_control(
        'answer',
        [
            'label' => __('Answer', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '2',
            'placeholder' => __('Add Answer', 'cozmiq-cv'),
            'default' => __('Default Answer', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_faq_lists->add_control(
        'active_status',
        [
            'label' => __('Is active?', 'cozmiq-cv'),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => __('Yes', 'cozmiq-cv'),
            'label_off' => __('No', 'cozmiq-cv'),
            'return_value' => 'yes',
            'default' => 'no',
        ]
    );

    $this->add_control(
        'layout_one_faq_lists',
        [
            'label' => __('FAQ List', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_faq_lists->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ question }}}',
        ]
    );

    $this->end_controls_section();