<?php

Kirki::add_config( 'stack_config', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
) );


Kirki::add_panel( 'stack_panel', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Stack Options', 'stack' ),
    'description' => esc_html__( 'Stack panel description', 'stack' ),
) );

Kirki::add_field( 'stack_config', [
    'type'        => 'custom',
    'settings'    => 'banner_content_setting',
    // 'label'       => esc_html__( 'This is the label', 'kirki' ), // optional
    'section'     => 'banner_section',
    'default'         => '<h3 style="padding:15px 10px; background:#fff; margin:0;">' . __( 'Banner Content', 'stack' ) . '</h3>',
    'priority'    => 10,
] );

//Banner Section
Kirki::add_section( 'banner_section', array(
    'title'          => esc_html__( 'Banner Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//banner Heading
Kirki::add_field( 'stack_config', [
    'type'     => 'text',
    'settings' => 'banner_heading',
    'label'    => esc_html__( 'Banner Heading Text', 'stack' ),
    'section'  => 'banner_section',
    'default'  => esc_html__( 'We Discover, Design & Build Digital Presence of Businesses', 'stack' ),
    'priority' => 10,
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.head-title',
            'function' => 'html',
        ],
    ]

] );

//Banner Heading color
Kirki::add_field( 'stack_config', [
    'type'        => 'typography',
    'settings'    => 'banner_heading_typo',
    'label'       => esc_html__( 'Banner Heading Typography', 'stack' ),
    'section'     => 'banner_section',
    'default'     => [
        'font-family'    => 'Roboto',
        'variant'        => 'regular',
        'font-size'      => '30px',
        'line-height'    => '1.5',
        'letter-spacing' => '0',
        'color'          => '#333333',
        'text-transform' => 'uppercase',
        'text-align'     => 'center',
    ],
    'priority'    => 10,
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '#hero-area .contents .head-title',
        ],
    ],
] );

//Button Text
Kirki::add_field( 'stack_config', [
    'type'     => 'text',
    'settings' => 'btn_text',
    'label'    => esc_html__( 'Banner Button Text', 'stack' ),
    'section'  => 'banner_section',
    'default'  => esc_html__( 'Explore', 'stack' ),
    'priority' => 10,
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.btn-common',
            'function' => 'html',
        ],
    ]
] );

//Banner Link
Kirki::add_field( 'stack_config', [
    'type'     => 'link',
    'settings' => 'btn_link',
    'label'    => __( 'Button Link', 'stack' ),
    'section'  => 'banner_section',
    'default'  => 'https://google.com/',
    'priority' => 10,
] );

//Banner Image
Kirki::add_field( 'stack_config', [
    'type'        => 'image',
    'settings'    => 'banner_image',
    'label'       => esc_html__( 'Banner Image', 'stack' ),
    'section'     => 'banner_section',
    'default'     => '',

] );


Kirki::add_field( 'stack_config', [
    'type'        => 'custom',
    'settings'    => 'banner_section_setting',
    // 'label'       => esc_html__( 'This is the label', 'kirki' ), // optional
    'section'     => 'banner_section',
    'default'         => '<h3 style="padding:15px 10px; background:#fff; margin:0;">' . __( 'Banner Section', 'stack' ) . '</h3>',
    'priority'    => 10,
] );

//Banenr Background Image
Kirki::add_field( 'stack_config', [
    'type'        => 'background',
    'settings'    => 'banner_section_image',
    'label'       => esc_html__( 'Banner Background Image', 'stack' ),
    'section'     => 'banner_section',
    'default'     => [
        'background-color'      => 'rgba(20,20,20,.8)',
        'background-image'      => '',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '#hero-area',
        ],
    ],
] );


//About Section
Kirki::add_section( 'about_section', array(
    'title'          => esc_html__( 'About Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );

//About Heading
Kirki::add_field( 'stack_config', [
    'type'     => 'text',
    'settings' => 'about_heading',
    'label'    => esc_html__( 'About Heading Text', 'stack' ),
    'section'  => 'about_section',
    'default'  => esc_html__( 'We are helping to grow your business.', 'stack' ),
    'priority' => 10,
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.title-hl',
            'function' => 'html',
        ],
    ]

] );

//About Description
Kirki::add_field( 'stack_config', [
    'type'     => 'textarea',
    'settings' => 'about_descricption',
    'label'    => esc_html__( 'About Description', 'stack' ),
    'section'  => 'about_section',
    'default'  => esc_html__( 'A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential.', 'stack' ),
    'priority' => 10,
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.mb-4',
            'function' => 'html',
        ],
    ]
] );

//About Btn Text
Kirki::add_field( 'stack_config', [
    'type'     => 'text',
    'settings' => 'about_btn_text',
    'label'    => esc_html__( 'About Button Text', 'stack' ),
    'section'  => 'about_section',
    'default'  => esc_html__( 'More About Us', 'stack' ),
    'priority' => 10,
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.btn-common',
            'function' => 'html',
        ],
    ]
] );

//Banner Items
Kirki::add_field( 'stack_config', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'About Items', 'stack' ),
    'section'     => 'about_section',
    'priority'    => 10,
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Add New Item', 'stack' ),
        'field' => 'about_item_title',
    ],
    'button_label' => esc_html__('Add new about item ', 'stack' ),
    'settings'     => 'about_item',
    'default'      => [
        [
            'about_item_icon' => 'lni-microphone',
            'about_item_title' => __( 'What we do', 'stack' ),
            'about_item_desc'  => __( 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores', 'stack' ),
        ],
    ],
    'fields' => [
        'about_item_icon' => [
            'type'        => 'select',
            'label'       => esc_html__( 'About Item Icon', 'stack' ),
            'default'     => '',
            'choices'     =>array(
                'lni-microphone'  => __('Icon One','stack'),
                'lni-users'  => __('Icon Two','stack'),
                'lni-medall-alt'  => __('Icon Three','stack'),
            )

        ],

        'about_item_title' => [
            'type'        => 'text',
            'label'       => esc_html__( 'About Item Title', 'stack' ),
            'default'     => '',

        ],
        'about_item_desc' => [
            'type'        => 'textarea',
            'label'       => __( 'About Item Description', 'stack' ),
            'default'     => '',
        ],

    ],
    'choices' => [
        'limit' => 3
    ],

] );

//Service section
Kirki::add_section( 'service_section', array(
    'title'          => esc_html__( 'Service Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );


//Service section show hide
Kirki::add_field( 'stack_config', [
    'type'        => 'checkbox',
    'settings'    => 'show_hide_checkbox',
    'label'       => esc_html__( 'Show or Hide the section', 'stack' ),
    'section'     => 'service_section',
    'default'     => true,
] );

//Service Heading
Kirki::add_field( 'stack_config', [
    'type'     => 'text',
    'settings' => 'service_heading',
    'label'    => esc_html__( 'Service Heading Text', 'stack' ),
    'section'  => 'service_section',
    'default'  => esc_html__( 'Our Services', 'stack' ),
    'priority' => 10,
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-title',
            'function' => 'html',
        ],
    ]

] );

//Service Description
Kirki::add_field( 'stack_config', [
    'type'     => 'textarea',
    'settings' => 'service_descricption',
    'label'    => esc_html__( 'Service Description', 'stack' ),
    'section'  => 'service_section',
    'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'stack' ),
    'priority' => 10,
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-header p',
            'function' => 'html',
        ],
    ]
] );

//Service Items
Kirki::add_field( 'stack_config', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'About Items', 'stack' ),
    'section'     => 'service_section',
    'priority'    => 10,
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Service New Item', 'stack' ),
        'field' => 'service_item_title',
    ],
    'button_label' => esc_html__('Add new service item ', 'stack' ),
    'settings'     => 'service_item',
    'default'      => [
        [
            'service_item_icon'     => 'lni-pencil',
            'service_item_title'    => __( 'Content Writing', 'stack' ),
            'service_item_desc'     => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'stack' ),
        ],
    ],
    'fields' => [
        'service_item_icon' => [
            'type'        => 'select',
            'label'       => esc_html__( 'Service Item Icon', 'stack' ),
            'default'     => '',
            'choices'     =>array(
                'lni-microphone'    => __('Icon One','stack'),
                'lni-briefcase'     => __('Icon Two','stack'),
                'lni-cog'           => __('Icon Three','stack'),
                'lni-mobile'        => __('Icon Four','stack'),
                'lni-layers'        => __('Icon Five','stack'),
                'lni-rocket'        => __('Icon Six','stack'),
            )

        ],

        'service_item_title' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Service Item Title', 'stack' ),
            'default'     => '',

        ],
        'service_item_desc' => [
            'type'        => 'textarea',
            'label'       => __( 'Service Item Description', 'stack' ),
            'default'     => '',
        ],

    ],
    'choices' => [
        'limit' => 6
    ],

] );


//Service item align
Kirki::add_field( 'stack_config', [
    'type'        => 'radio',
    'settings'    => 'service_text_align',
    'label'       => __( 'sevice text align', 'stack' ),
    'section'     => 'service_section',
    'default'     => 'center',
    'priority'    => 10,
    'choices'     => [
        'left'   => esc_html__( 'left', 'stack' ),
        'center' => esc_html__( 'center', 'stack' ),
        'right'  => esc_html__( 'right', 'stack' ),
    ],
    'output' =>array(
        array(
            'element' => '.services-item',
            'property' =>'text-align',
        )
    )
] );


//Service item Number
Kirki::add_field( 'stack_config', [
    'type'        => 'select',
    'settings'    => 'service_item_number',
    'label'       => __( 'Service Items Number', 'stack' ),
    'section'     => 'service_section',
    'default'     => 'col-lg-4',
    'priority'    => 10,
    'choices'     => [
        'col-lg-3'   => esc_html__( '4 column', 'stack' ),
        'col-lg-4' => esc_html__( '3 column', 'stack' ),
        'col-lg-6'  => esc_html__( '2 column', 'stack' ),
    ],

] );

//Service section
Kirki::add_section( 'video_section', array(
    'title'          => esc_html__( 'Video Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );


//Video show hide
Kirki::add_field( 'stack_config', [
    'type'        => 'checkbox',
    'settings'    => 'show_video_section',
    'label'       => esc_html__( 'Show the section', 'stack' ),
    'section'     => 'video_section',
    'default'     => true,
] );

//Video Title
Kirki::add_field( 'stack_config', [
    'type'     => 'text',
    'settings' => 'video_title',
    'label'    => esc_html__( 'Video Heading Text', 'stack' ),
    'section'  => 'video_section',
    'default'  => esc_html__( 'Watch Video', 'stack' ),
    'priority' => 10,
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.video-promo-content h2',
            'function' => 'html',
        ],
    ]

] );


//Banner Link
Kirki::add_field( 'stack_config', [
    'type'     => 'link',
    'settings' => 'video_link',
    'label'    => __( 'Video Link', 'stack' ),
    'section'  => 'video_section',
    'default'  => 'https://google.com/',
    'priority' => 10,
] );


//Banenr Background Image
Kirki::add_field( 'stack_config', [
    'type'        => 'background',
    'settings'    => 'video_background_image',
    'label'       => esc_html__( 'Video Background Image', 'stack' ),
    'section'     => 'video_section',
    'default'     => [
        'background-color'      => 'rgba(20,20,20,.8)',
        'background-image'      => '',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '.video-promo',
        ],
    ],
] );


//Team section
Kirki::add_section( 'team_section', array(
    'title'          => esc_html__( 'Team Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );


//Team section show hide
Kirki::add_field( 'stack_config', [
    'type'        => 'checkbox',
    'settings'    => 'team_show',
    'label'       => esc_html__( 'Show or Hide the section', 'stack' ),
    'section'     => 'team_section',
    'default'     => true,
] );

//Team Heading
Kirki::add_field( 'stack_config', [
    'type'     => 'text',
    'settings' => 'team_heading',
    'label'    => esc_html__( 'Team Heading Text', 'stack' ),
    'section'  => 'team_section',
    'default'  => esc_html__( 'Meet our team', 'stack' ),
    'priority' => 10,
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-header h2',
            'function' => 'html',
        ],
    ]

] );

//Team Description
Kirki::add_field( 'stack_config', [
    'type'     => 'textarea',
    'settings' => 'team_descricption',
    'label'    => esc_html__( 'Team Description', 'stack' ),
    'section'  => 'team_section',
    'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'stack' ),
    'priority' => 10,
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-header p',
            'function' => 'html',
        ],
    ]
] );

//Team Items
Kirki::add_field( 'stack_config', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'Team Items', 'stack' ),
    'section'     => 'team_section',
    'priority'    => 10,
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Add New Item', 'stack' ),
        'field' => 'team_title',
    ],
    'button_label' => esc_html__('Add new team item ', 'stack' ),
    'settings'     => 'team_repeater',
    'fields' => [
        'team_image' => [
            'type'        => 'image',
            'label'       => esc_html__( 'Team Image', 'stack' ),
            'default'     => '',

        ],

        'team_facebook' => [
            'type'        => 'link',
            'label'       => esc_html__( 'Facebook URL', 'stack' ),
            'default'     => 'https://www.facebook.com',

        ],
        'team_twitter' => [
            'type'        => 'link',
            'label'       => __( 'Twitter URL', 'stack' ),
            'default'     => 'https://www.twitter.com',
        ],
        'team_instragram' => [
            'type'        => 'link',
            'label'       => __( 'Instragram URL', 'stack' ),
            'default'     => 'https://www.instragram.com',
        ],
        'team_title' => [
            'type'        => 'text',
            'label'       => __( 'Team Name', 'stack' ),
            'default'     => __('John Doe', 'stack'),
        ],
        'team_desgination' => [
            'type'        => 'text',
            'label'       => __( 'Team Desination', 'stack' ),
            'default'     => __('Web Developar', 'stack'),
        ],

    ],
    'choices' => [
        'limit' => 4
    ],

] );

//Counter Section

Kirki::add_section( 'counter_section', array(
    'title'          => esc_html__( 'Counter Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );


//Team section show hide
Kirki::add_field( 'stack_config', [
    'type'        => 'checkbox',
    'settings'    => 'counter_show',
    'label'       => esc_html__( 'Show or Hide the section', 'stack' ),
    'section'     => 'counter_section',
    'default'     => true,
] );



//Counter Items
Kirki::add_field( 'stack_config', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'Counter Items', 'stack' ),
    'section'     => 'counter_section',
    'priority'    => 10,
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Add New Item', 'stack' ),
        'field' => 'counter_title',
    ],
    'button_label' => esc_html__('Add new counter item ', 'stack' ),
    'settings'     => 'counter_repeater',
    'fields' => [
        'counter_icon' => [
            'type'        => 'select',
            'label'       => esc_html__( 'Counter Icon', 'stack' ),
            'default'     => '',
            'choices'     => array(
                'lni-users' =>__('Users', 'stack'),
                'lni-emoji-smile' =>__('Emoji', 'stack'),
                'lni-download' =>__('Download', 'stack'),
                'lni-thumbs-up' =>__('Thums Up', 'stack'),
            )

        ],

        'counter_number' => [
            'type'        => 'number',
            'label'       => esc_html__( 'Counter Number', 'stack' ),
            'default'     => '100',

        ],
        'counter_title' => [
            'type'        => 'text',
            'label'       => __( 'Counter Title', 'stack' ),
            'default'     => 'Users',
        ],
        'counter_animation_name' => [
            'type'        => 'select',
            'label'       => esc_html__( 'Counter Animation Name', 'stack' ),
            'default'     => 'fadeInUp',
            'choices'     => array(
                'fadeInUp' =>__('fadeInUp', 'stack'),
                'fadeInLeft' =>__('fadeInLeft', 'stack'),
                'fadeInRight' =>__('fadeInRight', 'stack'),
            )

        ],
        'counter_animation_duration' => [
            'type'        => 'select',
            'label'       => esc_html__( 'Counter Animation Duration', 'stack' ),
            'default'     => '0.2s',
            'choices'     => array(
                '0.02s' =>__('0.2s', 'stack'),
                '0.04s' =>__('0.4s', 'stack'),
                '0.06s' =>__('0.6s', 'stack'),
                '0.08s' =>__('0.8s', 'stack'),
            )

        ],

    ],
    'choices' => [
        'limit' => 4
    ],

] );

//background
Kirki::add_field( 'stack_config', [
    'type'        => 'background',
    'settings'    => 'counter_background',
    'label'       => esc_html__( 'Counter Background ', 'stack' ),
    'description' => esc_html__( 'Background conrols are pretty complex - but extremely useful if properly used.', 'stack' ),
    'section'     => 'counter_section',
    'default'     => [
        'background-color'      => 'rgba(20,20,20,.8)',
        'background-image'      => '',
        'background-repeat'     => 'repeat',
        'background-position'   => 'center center',
        'background-size'       => 'cover',
        'background-attachment' => 'scroll',
    ],
    'transport'   => 'auto',
    'output'      => [
        [
            'element' => '#counter',
        ],
    ],
] );


//Price section
Kirki::add_section( 'price_section', array(
    'title'          => esc_html__( 'Price Section', 'stack' ),
    'panel'          => 'stack_panel',
    'priority'       => 160,
) );


//Price section show hide
Kirki::add_field( 'stack_config', [
    'type'        => 'checkbox',
    'settings'    => 'price_show_hide',
    'label'       => esc_html__( 'Show or Hide the section', 'stack' ),
    'section'     => 'price_section',
    'default'     => true,
] );

//Price Heading
Kirki::add_field( 'stack_config', [
    'type'     => 'text',
    'settings' => 'price_heading',
    'label'    => esc_html__( 'Price Heading Text', 'stack' ),
    'section'  => 'price_section',
    'default'  => esc_html__( 'Best Pricing', 'stack' ),
    'priority' => 10,
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-header h2',
            'function' => 'html',
        ],
    ]

] );

//Price Description
Kirki::add_field( 'stack_config', [
    'type'     => 'textarea',
    'settings' => 'price_descricption',
    'label'    => esc_html__( 'Price Description', 'stack' ),
    'section'  => 'price_section',
    'default'  => esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.', 'stack' ),
    'priority' => 10,
    'transport' => 'postMessage',
    'js_vars'   => [
        [
            'element'  => '.section-header p',
            'function' => 'html',
        ],
    ]
] );

//Price Items
Kirki::add_field( 'stack_config', [
    'type'        => 'repeater',
    'label'       => esc_html__( 'Price Items', 'stack' ),
    'section'     => 'price_section',
    'priority'    => 10,
    'row_label' => [
        'type'  => 'field',
        'value' => esc_html__( 'Price New Item', 'stack' ),
        'field' => 'price_name',
    ],
    'button_label' => esc_html__('Add new Price item ', 'stack' ),
    'settings'     => 'price_type',
    'default'      => [
        [
            'service_item_icon'     => 'lni-pencil',
            'service_item_title'    => __( 'Content Writing', 'stack' ),
            'service_item_desc'     => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'stack' ),
        ],
    ],
    'fields' => [
        'price_featured_highlight' => [
            'type'        => 'checkbox',
            'label'       => __( 'Price Feature', 'stack' ),
            'default'     => true,
        ],

        'price_name' => [
            'type'        => 'text',
            'label'       => __( 'Price Name', 'stack' ),
            'default'     => __('Basic','stack'),

        ],

        'price_amount' => [
            'type'        => 'number',
            'label'       => esc_html__( 'Price Amount', 'stack' ),
            'default'     => __('$12.90','stack'),

        ],

        'feature_1' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Feature 1', 'stack' ),
            'default'     => __('Business Analyzing','stack'),

        ],

        'feature_2' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Feature 2', 'stack' ),
            'default'     => __('24/7 Tech Suport','stack'),

        ],

        'feature_3' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Feature 3', 'stack' ),
            'default'     => __('Operational Excellence','stack'),

        ],

        'feature_4' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Feature 4', 'stack' ),
            'default'     => __('Business Idea Ready','stack'),

        ],

        'feature_5' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Feature 5', 'stack' ),
            'default'     => __('2 Database','stack'),

        ],

        'feature_6' => [
            'type'        => 'text',
            'label'       => esc_html__( 'Feature ', 'stack' ),
            'default'     => __('Customer Support','stack'),

        ],

        'price_type' => [
            'type'        => 'select',
            'label'       => __( 'Select your price Type', 'stack' ),
            'default'     => __('month','stack'),
            'choices' =>array(
                'month' => __('month','stack'),
                'year' => __('year','stack'),
            )
        ],
        'price_btn_text' => [
            'type'        => 'text',
            'label'       => __( 'Button Text', 'stack' ),
            'default'     => __('GET IT','stack'),

        ],
        'price_btn_link' => [
            'type'        => 'url',
            'label'       => __( 'Button URL', 'stack' ),
            'default'     => 'https://facebook.com',

        ],


    ],
    'choices' => [
        'limit' => 3
    ],

] );
