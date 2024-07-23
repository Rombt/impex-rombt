<?php

defined('ABSPATH') || exit;


// Blog page sections start
Redux::set_section(
	$opt_name,
	array(
		'title' => esc_html__('Blog page', 'rmbt_impex'),
		'id' => 'settings_blog-page',
		'desc' => esc_html__('Blog page settings', 'rmbt_impex'),
		'customizer_width' => '450',
		// 'subsection' => true,
		// 'icon'             => 'el el-blog',
		'fields' => array(

			array(
				'id' => 'rmbt-news-block_section-title_uk',
				'type' => 'text',
				'title' => esc_html__('Title of News Block on Ukrainian', 'rmbt_impex'),
				'default' => esc_html__('Новини нашої компанії', 'rmbt_impex'),
			),
			array(
				'id' => 'rmbt-news-block_section-title_en',
				'type' => 'text',
				'title' => esc_html__('Title of News Block on England', 'rmbt_impex'),
				'default' => esc_html__('News of our company', 'rmbt_impex'),
			),
			array(
				'id' => 'rmbt-news-block_section-title_ru',
				'type' => 'text',
				'title' => esc_html__('Title of News Block on russian', 'rmbt_impex'),
				'default' => esc_html__('Новости нашей компании', 'rmbt_impex'),
			),
			
		),
	),
);