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
            'label' => esc_html__('Subtitle', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('GETTING A SEAT', 'cozmiq-cv'),
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
            'default' => __("Locate and Reserve Your Seats", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_special_offer_list = new \Elementor\Repeater();

    $layout_one_special_offer_list->add_control(
        'title',
        [
            'label' => __('Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'placeholder' => __('Add title', 'cozmiq-cv'),
            'default' => __('Family Fun Package', 'cozmiq-cv'),
            'label_block'  => true,
        ]
    );

    $layout_one_special_offer_list->add_control(
        'desc',
        [
            'label' => __('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __('Escape with your loved one and enjoy a luxury suite, champagne on arrival', 'cozmiq-cv'),
        ]
    );
    
    $layout_one_special_offer_list->add_control(
        'regular_price',
        [
            'label' => __('Regular Price', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __('$99.00', 'cozmiq-cv'),
            'label_block'  => true,
        ]
    );

    $layout_one_special_offer_list->add_control(
        'sale_price',
        [
            'label' => __('Sale Price', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __('$99.00', 'cozmiq-cv'),
            'label_block'  => true,
        ]
    );

    $layout_one_special_offer_list->add_control(
        'category',
        [
            'label' => __('Category', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __('Experience Services', 'cozmiq-cv'),
            'label_block'  => true,
        ]
    );

    $layout_one_special_offer_list->add_control(
        'features',
        [
            'label' => __('Feature Items', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXTAREA,
            'default' => __('
                <ul class="gt-list">
                    <li>
                        <i class="flaticon-arrow-right"></i>
                    15% off on family suites
                    </li>
                    <li>
                        <i class="flaticon-arrow-right"></i>
                        The local amusement park
                    </li>
                </ul>
                <ul class="gt-list">
                    <li>
                        <i class="flaticon-arrow-right"></i>
                    Complimentary tickets
                    </li>
                    <li>
                        <i class="flaticon-arrow-right"></i>
                        Free meals for kids under 12
                    </li>
                </ul>', 'cozmiq-cv'),
        ]
    );

    $layout_one_special_offer_list->add_control(
        'url',
        [
            'label' => __('Url', 'cozmiq-cv'),
            'type' => Controls_Manager::URL,
            'default' => [
                'url' => '#',
                'is_external' => false,
                'nofollow' => false,
            ],
        ]
    );

    $layout_one_special_offer_list->add_control(
        'layout_one_feature_image',
        [
            'label' => __('Feature Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->add_control(
        'layout_one_special_offer_list',
        [
            'label' => __('Special Offer Lists', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_special_offer_list->get_controls(),
            'prevent_empty' => false,
            'title_field' => '{{{ title }}}',
        ]
    );

    $this->add_control(
        'layout_one_shape_image',
        [
            'label' => __('Shape Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $this->end_controls_section();