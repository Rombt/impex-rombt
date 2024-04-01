<?php

defined('ABSPATH') || exit;


// Front page sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('Front page', 'rmbt_impex'),
		'id' => 'settings_front-page',
		'desc' => esc_html__('Front page settings', 'rmbt_impex'),
		'customizer_width' => '450',
		// 'subsection' => true,
		// 'icon'             => 'el el-front',
		'fields' => array(
			// array(
			// 	'id' => 'title-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Title Section', 'rmbt_impex'),
			// 	'subtitle' => 'Add your content to the section \'Title\'',
			// 	'position' => 'start',
			// ),

			array(
				'id' => 'main_slider_screen-gallery',
				'type' => 'gallery',
				'title' => esc_html__('Add/Edit Gallery on the main screen ', 'rmbt_impex'),
			),

			// array(
			// 	'id' => 'title-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),




			// array(
			// 	'id' => 'front_page_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Front page title', 'rmbt_impex'),
			// 	'default' => __(wp_kses('Teast your fav dish', 'post'), 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'front_page_sub_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Front page subtitle', 'rmbt_impex'),
			// 	'default' => __(wp_kses('from <span>luxury restaurent.</span>', 'post'), 'rmbt_impex'),
			// ),

			// array(
			// 	'id' => 'front_page_slogan',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Front page slogan', 'rmbt_impex'),
			// 	'default' => esc_html__('Explore food Menu'),
			// ),
			// array(
			// 	'id' => 'front_page_slogan_label',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Front Page label', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/exlore-food-menu.png'
			// 	),
			// ),



			// array(
			// 	'id' => 'about-section-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('About Section', 'rmbt_impex'),
			// 	'subtitle' => 'Add your content to the section \'About\'',
			// 	'position' => 'start',
			// ),
			// array(
			// 	'id' => 'about_section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('About Section Title', 'rmbt_impex'),
			// 	'default' => esc_html__('About Restaurant ', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'about_section_text',
			// 	'type' => 'textarea',
			// 	'title' => esc_html__('About Section Text', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'about_section_button_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('About Button Title', 'rmbt_impex'),
			// 	'default' => esc_html__('READ MORE', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'about_section_button_href',
			// 	'type' => 'text',
			// 	'title' => esc_html__('About Button link', 'rmbt_impex'),
			// 	'default' => get_front_url() . "/about/",
			// ),
			// array(
			// 	'id' => 'about_section_img_1',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 1', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'about_section_img_2',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 2', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'about_section_img_3',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 3', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'about_section_img_4',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag 4', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/about-row-bg.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'read_revie_button',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Read Revie Button', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/orang-sercle.png'
			// 	),
			// ),
			// array(
			// 	'id' => 'read_revie_icon',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Read Revie Icon', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/icon_reviews.png'
			// 	),
			// ),
			// array(
			// 	'id' => 'read_revie_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Read Revie Text', 'rmbt_impex'),
			// 	'default' => __(wp_kses('READ <p>REVIEWS</p>', array('p' => array())), 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'front_delivery_icon',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Front Delivery Icon', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/icon_phone.png'
			// 	),
			// ),
			// array(
			// 	'id' => 'front_delivery_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Front Delivery Text', 'rmbt_impex'),
			// 	'default' => __(wp_kses('CALL US NOW FOR <p>FRONT DELIVERY</p>', array('p' => array())), 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'about-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),

			// array(
			// 	'id' => 'today-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Today Section', 'rmbt_impex'),
			// 	'subtitle' => 'Add your content to the section \'Today\'',
			// 	'position' => 'start',
			// ),

			// array(
			// 	'id' => 'today_section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Front page title', 'rmbt_impex'),
			// 	'default' => esc_html__('Today Special', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'today-gallery',
			// 	'type' => 'gallery',
			// 	'title' => esc_html__('Add/Edit Today Gallery', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'today_section_footer_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Footer Text', 'rmbt_impex'),
			// 	'default' => __(wp_kses('front <p> delivery </p>', array('p' => array())), 'rmbt_impex'),
			// ),

			// array(
			// 	'id' => 'today-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),

			// array(
			// 	'id' => 'restaurant_menu-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Restaurant Menu', 'rmbt_impex'),
			// 	'subtitle' => 'Add your content to the section \'Restaurant Menu\'',
			// 	'position' => 'start',
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Restaurant Menu Section Title', 'rmbt_impex'),
			// 	'default' => esc_html__('Food Menu', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_button_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Restaurant Menu Button Title', 'rmbt_impex'),
			// 	'default' => esc_html__('Explor food menu', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_button_href',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Restaurant Menu Button link', 'rmbt_impex'),
			// 	'default' => get_front_url() . "/food-menu-items/",
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_img_1',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag right', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_311x311.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_img_2',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag left', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_267x414.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_img_3',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Imag down', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_241x241.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'restaurant_menu-section_icon_first_item_menu',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Icon of the first menu item', 'rmbt_impex'),
			// 	'subtitle' => esc_html__('Set if this item is for all food categories', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/icon_all.png'
			// 	),
			// ),

			// array(
			// 	'id' => 'restaurant_menu-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),


			// array(
			// 	'id' => 'clients-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Clients section', 'rmbt_impex'),
			// 	'subtitle' => 'Add your content to the section \'Clients Menu\'',
			// 	'position' => 'start',
			// ),

			// array(
			// 	'id' => 'clients-section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Clients menu section title', 'rmbt_impex'),
			// 	'default' => esc_html__('Happy Clients', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'clients-section_background_img',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Background Img', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/background-clients-block.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'clients-section_avatar_default',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Default avatar of client', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'thumbnail',
			// 	'default' => array(
			// 		'url' => '/assets/img/icons/sprite.svg#avatar_default'
			// 	),
			// ),

			// array(
			// 	'id' => 'clients-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),

			// array(
			// 	'id' => 'reserve-accordion-start',
			// 	'type' => 'accordion',
			// 	'title' => esc_html__('Reserve section', 'rmbt_impex'),
			// 	'subtitle' => 'Add your content to the section \'Reserve Menu\'',
			// 	'position' => 'start',
			// ),

			// array(
			// 	'id' => 'reserve-section_title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section title', 'rmbt_impex'),
			// 	'default' => esc_html__('Reserve your table', 'rmbt_impex'),
			// ),

			// array(
			// 	'id' => 'reserve-section_background_img',
			// 	'type' => 'media',
			// 	'url' => true,
			// 	'title' => esc_html__('Reserve Section Img', 'rmbt_impex'),
			// 	'compiler' => 'true',
			// 	'preview_size' => 'full',
			// 	'default' => array(
			// 		'url' => '/assets/img/Image_559x334.jpg'
			// 	),
			// ),
			// array(
			// 	'id' => 'reserve-section_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section title', 'rmbt_impex'),
			// 	'default' => esc_html__(wp_kses('<span>for a reservation</span>', 'rmbt_impex')),
			// ),
			// array(
			// 	'id' => 'reserve-section_text',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section text', 'rmbt_impex'),
			// 	'default' => esc_html__(wp_kses('You can also call <span>for a reservation</span>', 'rmbt_impex')),
			// ),
			// array(
			// 	'id' => 'reserve-section_button-title',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section button title', 'rmbt_impex'),
			// 	'default' => esc_html__('Make reservation', 'rmbt_impex'),
			// ),
			// array(
			// 	'id' => 'reserve-section_button-href',
			// 	'type' => 'text',
			// 	'title' => esc_html__('Reserve section button href', 'rmbt_impex'),
			// 	'default' => esc_url('#'),
			// ),

			// array(
			// 	'id' => 'reserve-accordion-end',
			// 	'type' => 'accordion',
			// 	'position' => 'end'
			// ),
		),
	)
);
