<?php
use Elementor\Controls_Manager;

    $this->start_controls_section(
        'layout_one_content_section',
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

    $layout_one_food_list = new \Elementor\Repeater();

    $layout_one_food_list->add_control(
        'layout_one_food_title',
        [
            'label' => esc_html__('Food Title', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Fast Food", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_food_list->add_control(
        'layout_one_food_slug',
        [
            'label' => esc_html__('Food Slug', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("fast-food", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_food_list->add_control(
        'icon_image',
        [
            'label' => __('Food Icon', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [
                'url' => \Elementor\Utils::get_placeholder_image_src(),
            ],
        ]
    );

    $layout_one_food_list->add_control(
			'active',
			[
				'label' => esc_html__( 'Active', 'textdomain' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Active', 'textdomain' ),
				'label_off' => esc_html__( 'Hide', 'textdomain' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

    $this->add_control(
        'layout_one_food_list',
        [
            'label' => __('Food List Items', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_food_list->get_controls(),
        ]
    );


    $this->add_control(
        'layout_one_fast_food_slug',
        [
            'label' => esc_html__('Fast Food Slug', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("fast-food", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_fast_food_list_one = new \Elementor\Repeater();

    $layout_one_fast_food_list_one->add_control(
        'layout_one_fast_food_title',
        [
            'label' => esc_html__('Fast Food Slug', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Chinese Pasta", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_fast_food_list_one->add_control(
        'layout_one_fast_food_desc',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("It's a Hotel Testament to our.", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_fast_food_list_one->add_control(
        'layout_one_fast_food_price',
        [
            'label' => esc_html__('Price', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("$15.99", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_fast_food_list_one->add_control(
        'food_image',
        [
            'label' => __('Food Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->add_control(
        'layout_one_fast_food_list_one',
        [
            'label' => __('Fast Food List One', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_fast_food_list_one->get_controls(),
        ]
    );


     $layout_one_fast_food_list_two = new \Elementor\Repeater();

    $layout_one_fast_food_list_two->add_control(
        'layout_one_fast_food_title',
        [
            'label' => esc_html__('Fast Food Slug', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Chinese Pasta", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_fast_food_list_two->add_control(
        'layout_one_fast_food_desc',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("It's a Hotel Testament to our.", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_fast_food_list_two->add_control(
        'layout_one_fast_food_price',
        [
            'label' => esc_html__('Price', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("$15.99", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_fast_food_list_two->add_control(
        'food_image',
        [
            'label' => __('Food Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->add_control(
        'layout_one_fast_food_list_two',
        [
            'label' => __('Fast Food List Two', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_fast_food_list_two->get_controls(),
        ]
    );

    $this->add_control(
        'layout_one_fresh_pasta_slug',
        [
            'label' => esc_html__('Fresh Pasta Slug', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("fresh-pasta", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_fresh_pasta_list_one = new \Elementor\Repeater();

    $layout_one_fresh_pasta_list_one->add_control(
        'layout_one_fast_food_title',
        [
            'label' => esc_html__('Fast Food Slug', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Chinese Pasta", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_fresh_pasta_list_one->add_control(
        'layout_one_fast_food_desc',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("It's a Hotel Testament to our.", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_fresh_pasta_list_one->add_control(
        'layout_one_fast_food_price',
        [
            'label' => esc_html__('Price', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("$15.99", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_fresh_pasta_list_one->add_control(
        'food_image',
        [
            'label' => __('Food Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->add_control(
        'layout_one_fresh_pasta_list_one',
        [
            'label' => __('Fast Food List One', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_fresh_pasta_list_one->get_controls(),
        ]
    );


    $layout_one_fresh_pasta_list_two = new \Elementor\Repeater();

    $layout_one_fresh_pasta_list_two->add_control(
        'layout_one_fast_food_title',
        [
            'label' => esc_html__('Fast Food Slug', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Chinese Pasta", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_fresh_pasta_list_two->add_control(
        'layout_one_fast_food_desc',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("It's a Hotel Testament to our.", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_fresh_pasta_list_two->add_control(
        'layout_one_fast_food_price',
        [
            'label' => esc_html__('Price', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("$15.99", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_fresh_pasta_list_two->add_control(
        'food_image',
        [
            'label' => __('Food Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->add_control(
        'layout_one_fresh_pasta_list_two',
        [
            'label' => __('Fast Food List Two', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_fresh_pasta_list_two->get_controls(),
        ]
    );


    $this->add_control(
        'layout_one_chicken_pizza_slug',
        [
            'label' => esc_html__('Chicken Pizza Slug', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("chicken-pizza", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_chicken_pizza_list_one = new \Elementor\Repeater();

    $layout_one_chicken_pizza_list_one->add_control(
        'layout_one_fast_food_title',
        [
            'label' => esc_html__('Fast Food Slug', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Chinese Pasta", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_chicken_pizza_list_one->add_control(
        'layout_one_fast_food_desc',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("It's a Hotel Testament to our.", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_chicken_pizza_list_one->add_control(
        'layout_one_fast_food_price',
        [
            'label' => esc_html__('Price', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("$15.99", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_chicken_pizza_list_one->add_control(
        'food_image',
        [
            'label' => __('Food Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->add_control(
        'layout_one_chicken_pizza_list_one',
        [
            'label' => __('Fast Food List One', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_chicken_pizza_list_one->get_controls(),
        ]
    );


    $layout_one_chicken_pizza_list_two = new \Elementor\Repeater();

    $layout_one_chicken_pizza_list_two->add_control(
        'layout_one_fast_food_title',
        [
            'label' => esc_html__('Fast Food Slug', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Chinese Pasta", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_chicken_pizza_list_two->add_control(
        'layout_one_fast_food_desc',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("It's a Hotel Testament to our.", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_chicken_pizza_list_two->add_control(
        'layout_one_fast_food_price',
        [
            'label' => esc_html__('Price', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("$15.99", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_chicken_pizza_list_two->add_control(
        'food_image',
        [
            'label' => __('Food Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->add_control(
        'layout_one_chicken_pizza_list_two',
        [
            'label' => __('Fast Food List Two', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_chicken_pizza_list_two->get_controls(),
        ]
    );



    $this->add_control(
        'layout_one_drink_juice_slug',
        [
            'label' => esc_html__('Chicken Pizza Slug', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("drink-juice", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_drink_juice_list_one = new \Elementor\Repeater();

    $layout_one_drink_juice_list_one->add_control(
        'layout_one_fast_food_title',
        [
            'label' => esc_html__('Fast Food Slug', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Chinese Pasta", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_drink_juice_list_one->add_control(
        'layout_one_fast_food_desc',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("It's a Hotel Testament to our.", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_drink_juice_list_one->add_control(
        'layout_one_fast_food_price',
        [
            'label' => esc_html__('Price', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("$15.99", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_drink_juice_list_one->add_control(
        'food_image',
        [
            'label' => __('Food Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->add_control(
        'layout_one_drink_juice_list_one',
        [
            'label' => __('Fast Food List One', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_drink_juice_list_one->get_controls(),
        ]
    );


    $layout_one_drink_juice_list_two = new \Elementor\Repeater();

    $layout_one_drink_juice_list_two->add_control(
        'layout_one_fast_food_title',
        [
            'label' => esc_html__('Fast Food Slug', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("Chinese Pasta", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_drink_juice_list_two->add_control(
        'layout_one_fast_food_desc',
        [
            'label' => esc_html__('Description', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("It's a Hotel Testament to our.", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_drink_juice_list_two->add_control(
        'layout_one_fast_food_price',
        [
            'label' => esc_html__('Price', 'cozmiq-cv'),
            'type' => Controls_Manager::TEXT,
            'default' => __("$15.99", 'cozmiq-cv'),
            'label_block' => true,
        ]
    );

    $layout_one_drink_juice_list_two->add_control(
        'food_image',
        [
            'label' => __('Food Image', 'cozmiq-cv'),
            'type' => Controls_Manager::MEDIA,
            'default' => [],
        ]
    );

    $this->add_control(
        'layout_one_drink_juice_list_two',
        [
            'label' => __('Fast Food List Two', 'cozmiq-cv'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $layout_one_drink_juice_list_two->get_controls(),
        ]
    );

$this->end_controls_section();