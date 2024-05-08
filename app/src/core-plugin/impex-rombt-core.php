<?php
/*
Plugin Name: Impex rombt core 
Plugin URI: #
Description: A plugin that implements Impex rombt theme functionality
Version: 1.0
Author: Automattic - Rombt
Author URI: #
License: Proprietary
Text Domain: rmbt_impex
*/

if (!function_exists('add_action')) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}



function rmbt_impex_scripts_admin()
{
	wp_enqueue_style('rmbt_impex-admin_main', plugins_url() . '/impex-rombt-core/assets/styles/main-style.min.css', array(), '1.0', 'all');
	wp_enqueue_script('rmbt_impex-admin_core', plugins_url() . '/impex-rombt-core/assets/js/admin.main.min.js', array('jquery'), '1.0', true);


	wp_add_inline_script('rmbt_impex-admin_core', 'const rmbtCategoriesGrouping = ' . json_encode([
		'rmbtCatGropingNonce' => wp_create_nonce('rmbt-cat-groping-nonce'),
	]), 'before');

	if (get_post_type() === 'bakery') {


		wp_add_inline_script('rmbt_impex-admin_core', 'const rmbtBakery = ' . json_encode([
			'rmbtBakery_nonce' => wp_create_nonce('rmbt_bakery_meta_box'),
			'rmbtPluginUrl' => plugins_url(),
		]), 'before');
	}
}
add_action('admin_enqueue_scripts', 'rmbt_impex_scripts_admin');

require_once plugin_dir_path(__FILE__) . 'inc/general-admin.php';
require_once plugin_dir_path(__FILE__) . 'inc/ajax.php';
require_once plugin_dir_path(__FILE__) . 'inc/categories-grouping/index.php';
require_once plugin_dir_path(__FILE__) . 'inc/bakeries_meta_boxes/index.php';

// require_once plugin_dir_path(__FILE__) . 'inc/acf.php';

function rmbt_get_images_sizes()
{

	return array(
		'post' => array(

			array(
				'name' => 'rmbt_largest-img',
				'width' => 1970,
				'height' => 570,
				'crop' => true,
			),

			array(
				'name' => 'rmbt_clients_logo_img',
				'width' => 200,
				'height' => 100,
				'crop' => true,
			),

			array(
				'name' => 'rmbt_equipment_group_img',
				'width' => 340,
				'height' => 450,
				'crop' => true,
			),
			array(
				'name' => 'rmbt_main_slider_img',
				'width' => 590,
				'height' => 590,
				'crop' => true,
			),
		)
	);
}
add_action('plugin_loaded', 'rmbt_register_image_size');
function rmbt_register_image_size()
{
	if (function_exists('rmbt_get_images_sizes')) {
		foreach (rmbt_get_images_sizes() as $post_type => $sizes) {
			foreach ($sizes as $config) {
				add_image_size($config['name'], $config['width'], $config['height'], $config['crop']);
			}
		}
	}
}

/**
 * For processing type errors "warning" in blocks try-catch
 */
function errorWarning($errno, $errmbt, $errfile, $errline)
{
	// the code of error  processing must be here if it need you
	// echo "Ошибка: [$errno] $errmbt в файле $errfile на строке $errline\n";
	return true;
	// return false; // прервать обработку ошибки
}
set_error_handler("errorWarning");




//==============================================================================================
//==============================================================================================
