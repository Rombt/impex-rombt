<?php

defined('ABSPATH') || exit;


// Home page sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('Home page', 'restaurant-site'),
		'id' => 'settings_home-page',
		'desc' => esc_html__('Home page settings', 'restaurant-site'),
		'customizer_width' => '450',
		'subsection' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(
			array(
				'id' => 'title-accordion-start',
				'type' => 'accordion',
				'title' => esc_html__('Title Section', 'restaurant-site'),
				'subtitle' => 'Add your content to the section \'Title\'',
				'position' => 'start',
			),

			array(
				'id' => 'home_page_title',
				'type' => 'text',
				'title' => esc_html__('Home page title', 'restaurant-site'),
				'default' => __(wp_kses('Teast your fav dish', 'post'), 'restaurant-site'),
			),
			array(
				'id' => 'home_page_sub_title',
				'type' => 'text',
				'title' => esc_html__('Home page subtitle', 'restaurant-site'),
				'default' => __(wp_kses('from <span>luxury restaurent.</span>', 'post'), 'restaurant-site'),
			),
			array(
				'id' => 'dish-gallery',
				'type' => 'gallery',
				'title' => esc_html__('Add/Edit Dish Gallery', 'restaurant-site'),
			),
			array(
				'id' => 'home_page_slogan',
				'type' => 'text',
				'title' => esc_html__('Home page slogan', 'restaurant-site'),
				'default' => esc_html__('Explore food Menu'),
			),
			array(
				'id' => 'home_page_slogan_label',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Home Page label', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/exlore-food-menu.png'
				),
			),

			array(
				'id' => 'title-accordion-end',
				'type' => 'accordion',
				'position' => 'end'
			),

			array(
				'id' => 'about-section-start',
				'type' => 'accordion',
				'title' => esc_html__('About Section', 'restaurant-site'),
				'subtitle' => 'Add your content to the section \'About\'',
				'position' => 'start',
			),
			array(
				'id' => 'about_section_title',
				'type' => 'text',
				'title' => esc_html__('About Section Title', 'restaurant-site'),
				'default' => esc_html__('About Restaurant ', 'restaurant-site'),
			),
			array(
				'id' => 'about_section_text',
				'type' => 'textarea',
				'title' => esc_html__('About Section Text', 'restaurant-site'),
			),
			array(
				'id' => 'about_section_button_title',
				'type' => 'text',
				'title' => esc_html__('About Button Title', 'restaurant-site'),
				'default' => esc_html__('READ MORE', 'restaurant-site'),
			),
			array(
				'id' => 'about_section_button_href',
				'type' => 'text',
				'title' => esc_html__('About Button link', 'restaurant-site'),
				'default' => get_home_url() . "/about/",
			),
			array(
				'id' => 'about_section_img_1',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Imag 1', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/about-row-bg.jpg'
				),
			),
			array(
				'id' => 'about_section_img_2',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Imag 2', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/about-row-bg.jpg'
				),
			),
			array(
				'id' => 'about_section_img_3',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Imag 3', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/about-row-bg.jpg'
				),
			),
			array(
				'id' => 'about_section_img_4',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Imag 4', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/about-row-bg.jpg'
				),
			),
			array(
				'id' => 'read_revie_button',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Read Revie Button', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/orang-sercle.png'
				),
			),
			array(
				'id' => 'read_revie_icon',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Read Revie Icon', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/icon_reviews.png'
				),
			),
			array(
				'id' => 'read_revie_text',
				'type' => 'text',
				'title' => esc_html__('Read Revie Text', 'restaurant-site'),
				'default' => __(wp_kses('READ <p>REVIEWS</p>', array('p' => array())), 'restaurant-site'),
			),
			array(
				'id' => 'home_delivery_icon',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Home Delivery Icon', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/icon_phone.png'
				),
			),
			array(
				'id' => 'home_delivery_text',
				'type' => 'text',
				'title' => esc_html__('Home Delivery Text', 'restaurant-site'),
				'default' => __(wp_kses('CALL US NOW FOR <p>HOME DELIVERY</p>', array('p' => array())), 'restaurant-site'),
			),
			array(
				'id' => 'about-accordion-end',
				'type' => 'accordion',
				'position' => 'end'
			),

			array(
				'id' => 'today-accordion-start',
				'type' => 'accordion',
				'title' => esc_html__('Today Section', 'restaurant-site'),
				'subtitle' => 'Add your content to the section \'Today\'',
				'position' => 'start',
			),

			array(
				'id' => 'today_section_title',
				'type' => 'text',
				'title' => esc_html__('Home page title', 'restaurant-site'),
				'default' => esc_html__('Today Special', 'restaurant-site'),
			),
			array(
				'id' => 'today-gallery',
				'type' => 'gallery',
				'title' => esc_html__('Add/Edit Today Gallery', 'restaurant-site'),
			),
			array(
				'id' => 'today_section_footer_text',
				'type' => 'text',
				'title' => esc_html__('Footer Text', 'restaurant-site'),
				'default' => __(wp_kses('home <p> delivery </p>', array('p' => array())), 'restaurant-site'),
			),

			array(
				'id' => 'today-accordion-end',
				'type' => 'accordion',
				'position' => 'end'
			),

			array(
				'id' => 'restaurant_menu-accordion-start',
				'type' => 'accordion',
				'title' => esc_html__('Restaurant Menu', 'restaurant-site'),
				'subtitle' => 'Add your content to the section \'Restaurant Menu\'',
				'position' => 'start',
			),
			array(
				'id' => 'restaurant_menu-section_title',
				'type' => 'text',
				'title' => esc_html__('Restaurant Menu Section Title', 'restaurant-site'),
				'default' => esc_html__('Food Menu', 'restaurant-site'),
			),
			array(
				'id' => 'restaurant_menu-section_button_title',
				'type' => 'text',
				'title' => esc_html__('Restaurant Menu Button Title', 'restaurant-site'),
				'default' => esc_html__('Explor food menu', 'restaurant-site'),
			),
			array(
				'id' => 'restaurant_menu-section_button_href',
				'type' => 'text',
				'title' => esc_html__('Restaurant Menu Button link', 'restaurant-site'),
				'default' => get_home_url() . "/food-menu-items/",
			),
			array(
				'id' => 'restaurant_menu-section_img_1',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Imag right', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/Image_311x311.jpg'
				),
			),
			array(
				'id' => 'restaurant_menu-section_img_2',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Imag left', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/Image_267x414.jpg'
				),
			),
			array(
				'id' => 'restaurant_menu-section_img_3',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Imag down', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/Image_241x241.jpg'
				),
			),
			array(
				'id' => 'restaurant_menu-section_icon_first_item_menu',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Icon of the first menu item', 'restaurant-site'),
				'subtitle' => esc_html__('Set if this item is for all food categories', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/icon_all.png'
				),
			),

			array(
				'id' => 'restaurant_menu-accordion-end',
				'type' => 'accordion',
				'position' => 'end'
			),


			array(
				'id' => 'clients-accordion-start',
				'type' => 'accordion',
				'title' => esc_html__('Clients section', 'restaurant-site'),
				'subtitle' => 'Add your content to the section \'Clients Menu\'',
				'position' => 'start',
			),

			array(
				'id' => 'clients-section_title',
				'type' => 'text',
				'title' => esc_html__('Clients menu section title', 'restaurant-site'),
				'default' => esc_html__('Happy Clients', 'restaurant-site'),
			),
			array(
				'id' => 'clients-section_background_img',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Background Img', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/background-clients-block.jpg'
				),
			),
			array(
				'id' => 'clients-section_avatar_default',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Default avatar of client', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'thumbnail',
				'default' => array(
					'url' => '/assets/img/icons/sprite.svg#avatar_default'
				),
			),

			array(
				'id' => 'clients-accordion-end',
				'type' => 'accordion',
				'position' => 'end'
			),

			array(
				'id' => 'reserve-accordion-start',
				'type' => 'accordion',
				'title' => esc_html__('Reserve section', 'restaurant-site'),
				'subtitle' => 'Add your content to the section \'Reserve Menu\'',
				'position' => 'start',
			),

			array(
				'id' => 'reserve-section_title',
				'type' => 'text',
				'title' => esc_html__('Reserve section title', 'restaurant-site'),
				'default' => esc_html__('Reserve your table', 'restaurant-site'),
			),

			array(
				'id' => 'reserve-section_background_img',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Reserve Section Img', 'restaurant-site'),
				'compiler' => 'true',
				'preview_size' => 'full',
				'default' => array(
					'url' => '/assets/img/Image_559x334.jpg'
				),
			),
			array(
				'id' => 'reserve-section_text',
				'type' => 'text',
				'title' => esc_html__('Reserve section title', 'restaurant-site'),
				'default' => esc_html__(wp_kses('<span>for a reservation</span>', 'restaurant-site')),
			),
			array(
				'id' => 'reserve-section_text',
				'type' => 'text',
				'title' => esc_html__('Reserve section text', 'restaurant-site'),
				'default' => esc_html__(wp_kses('You can also call <span>for a reservation</span>', 'restaurant-site')),
			),
			array(
				'id' => 'reserve-section_button-title',
				'type' => 'text',
				'title' => esc_html__('Reserve section button title', 'restaurant-site'),
				'default' => esc_html__('Make reservation', 'restaurant-site'),
			),
			array(
				'id' => 'reserve-section_button-href',
				'type' => 'text',
				'title' => esc_html__('Reserve section button href', 'restaurant-site'),
				'default' => esc_url('#'),
			),

			array(
				'id' => 'reserve-accordion-end',
				'type' => 'accordion',
				'position' => 'end'
			),
		),
	)
);
