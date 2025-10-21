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
        'layout_one_subtitle',
        [
            'label' => esc_html__('Subtitle', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('E N J O Y Y O U R D A Y', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_title',
        [
            'label' => esc_html__('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Locate the Greatest Cozmiq City Hotel", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_desc',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __(" Discover the perfect stay in the heart of the city. Our hotel is strategically located near major business districts, top attractions,", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_tab_lists = new \Elementor\Repeater();

    $layout_one_tab_lists->add_control(
        'title',
        [
            'label' => __('Tab Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'rows' => '2',
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Default title', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_tab_lists->add_control(
        'list_title',
        [
            'label' => __('List Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'rows' => '2',
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Default title', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_tab_lists->add_control(
        'tab_desc',
        [
            'label' => __('Lists', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'rows' => '2',
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('<li>
                                        <span>Breakfast     :</span>
                                        7:00am - 11:30am
                                    </li>
                                    <li>
                                        <span>Lunch     :</span>
                                        0:30pm - 4:30pm
                                    </li>
                                    <li>
                                        <span>Dinner     :</span>
                                        7:30pm - 10:30pm
                                    </li>
                                    <li>
                                        <span>Evening Bar      :</span>
                                        11:00pm - 02:00pm
                                    </li>', 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_tab_lists->add_control(
        'layout_one_button1_text',
        [
            'label' => __( 'Button Label', 'cozmiq-cv' ),
            'type' => Controls_Manager::TEXT,
            'default' => __( 'READ MORE', 'cozmiq-cv' ),
            'label_block' => true,
        ]
    );

    $layout_one_tab_lists->add_control(
        'layout_one_button1_url',
        [
            'label' => esc_html__( 'Button Url', 'cozmiq-cv' ),
            'type' => Controls_Manager::URL,
            'default' => [
                'url' => '#',
                'is_external' => false,
                'nofollow' => false,
            ],
        ]
    );

    $layout_one_tab_lists->add_control(
        'border_right',
        [
            'label' => esc_html__( 'Active Tab', 'cozmiq-cv' ),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__( 'Show', 'cozmiq-cv' ),
            'label_off' => esc_html__( 'Hide', 'cozmiq-cv' ),
            'return_value' => 'yes',
            'default' => 'no',
        ]
    );

    $this->add_control(
        'layout_one_tab_lists',
        [
            'label' => __('Tab Lists', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_tab_lists->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ title }}}',
        ]
    );

    $this->add_control(
        'layout_one_year_experience',
        [
            'label' => esc_html__('Experience Years', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("46", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_symble',
        [
            'label' => esc_html__('Symble', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("+", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_year_text',
        [
            'label' => esc_html__('Experience Text', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Experience <br> Hoteler", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $this->add_control(
        'layout_one_feature_img', [
            'label' => esc_html__('Feature Images', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->add_control(
        'layout_one_feature_two_img', [
            'label' => esc_html__('Feature Images Two', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );
    
    $this->add_control(
        'layout_one_shape_img', [
            'label' => esc_html__('Shape Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->end_controls_section();