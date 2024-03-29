<?php
defined('ABSPATH') || exit;


Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('Social Networks Settings', 'rmbt_impex'),
		'id' => 'settings_social_networks',
		'customizer_width' => '400px',
		// 'icon'             => 'el el-network',
		'fields' => array(

			array(
				'id' => 'social_networks_fb-link',
				'type' => 'text',
				'title' => esc_html__('Facebook link', 'rmbt_impex'),
				'default' => esc_url('https://www.facebook.com/'),
			),
			array(
				'id' => 'fb-link_icon',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Facebook icon', 'rmbt_impex'),
				'compiler' => 'true',
				'preview_size' => 'full',
				// 'default' => array(
				// 	'url' => '/assets/img/icons/sprite.svg#facebook_1'
				// ),
			),

			array(
				'id' => 'social_networks_instagram-link',
				'type' => 'text',
				'title' => esc_html__('Instagram link', 'rmbt_impex'),
				'default' => 'https://www.instagram.com/',
			),
			array(
				'id' => 'social_networks_instagram_icon',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Instagram icon', 'rmbt_impex'),
				'compiler' => 'true',
				'preview_size' => 'full',
				// 'default' => array(
				// 	'url' => '/assets/img/icon_instagram.png'
				// ),
			),

			array(
				'id' => 'social_networks_twit-link',
				'type' => 'text',
				'title' => esc_html__('Twitter link', 'rmbt_impex'),
				'default' => esc_url('https://twitter.com/'),
			),
			array(
				'id' => 'social_networks_twit_icon',
				'type' => 'media',
				'url' => true,
				'title' => esc_html__('Twitter icon', 'rmbt_impex'),
				'compiler' => 'true',
				'preview_size' => 'full',
				// 'default' => array(
				// 	'url' => '/assets/img/icon_twitter.png'
				// ),
			),

		),
	)

);
