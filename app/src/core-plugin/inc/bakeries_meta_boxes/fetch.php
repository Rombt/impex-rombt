<?php


function get_data_bakery_equipments()
{

	$post_id = $_GET['post'];
	$post_ids = get_post_meta($post_id, 'cards_ids', true);
	$technological_card_id = get_post_meta($post_id, 'technological_card_id', true);

	$arr_selected_post_ids = array_filter(explode(',', $post_ids), function ($value) {
		return $value !== "";
	});

	$technological_card_url = wp_get_attachment_url(intval($technological_card_id));

	$args = array(
		'post_type' => 'product',
		'status' => 'publish',
		'limit' => -1,
	);

	$query_products = wc_get_products($args);

	$arr_products = [];
	foreach ($query_products as $key => $value) {
		$product = $value->get_data();
		$product['imgSrc'] = wp_get_attachment_image_src(intval($product['image_id']))[0];
		$arr_products[] = $product;
	}

	// $data->technologicalCardUrl = $technological_card_url;
	$data = new stdClass();
	$data->arrProducts = $arr_products;
	$data->arrSelectedProductsId = $arr_selected_post_ids;
	$data->technologicalCard = array(
		'url' => $technological_card_url,
		'id' => $technological_card_id
	);

	wp_send_json_success($data);

	wp_die();
}
add_action('wp_ajax_get_data_bakery_equipments', 'get_data_bakery_equipments');
