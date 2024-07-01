<?php
defined( 'ABSPATH' ) || exit;


// Copyright settings start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__( 'Copyright settings', 'rmbt_impex' ),
		'desc' => esc_html__( 'Add a description of your copyright ownership here', 'rmbt_impex' ),
		'id' => 'settings_copyright',
		'customizer_width' => '400px',
		// 'icon'             => 'el el-network',
		'fields' => array(
			array(
				'id' => 'copyright',
				'type' => 'editor',
				'args' => array(
					'media_buttons' => false,
					// 'textarea_rows' => 5,
				),
				'title' => esc_html__( 'Copyright', 'rmbt_impex' ),
				'default' => esc_html__( '2024 Cool RestaurantWebsite based for Luxury RestaurAnt' ),
			),

		),
	)

);