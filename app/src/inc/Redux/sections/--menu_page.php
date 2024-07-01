<?php
defined( 'ABSPATH' ) || exit;


// Menu page sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Menu Page', 'rmbt_impex' ),
		'id' => 'settings_menu-page',
		'desc' => esc_html__( 'Menu page settings', 'rmbt_impex' ),
		'customizer_width' => '450',
		'subsection' => true,
		// 'icon'             => 'el el-home',
		'fields' => array(
			array(
				'id' => 'menu_title',
				'type' => 'text',
				'title' => esc_html__( 'Title of Menu page', 'rmbt_impex' ),
				'default' => esc_html__( 'Menu Grid View', 'rmbt_impex' ),
			),
			array(
				'id' => 'menu_page_grid_posts_per_page',
				'type' => 'text',
				'title' => esc_html__( 'Posts Per Page Grid', 'rmbt_impex' ),
				'default' => esc_html__( 9, 'rmbt_impex' ),
			),
			array(
				'id' => 'menu_page_list_posts_per_page',
				'type' => 'text',
				'title' => esc_html__( 'Posts Per Page List', 'rmbt_impex' ),
				'default' => esc_html__( 12, 'rmbt_impex' ),
			),
			array(
				'id' => 'title_into_background_title_image_food_menu_items',
				'type' => 'checkbox',
				'title' => esc_html__( 'Title into Background title image', 'rmbt_impex' ),
				'desc' => esc_html__( 'You need the Title into Background title image', 'rmbt_impex' ),
				'default' => '0',
			),
		),
	)
);