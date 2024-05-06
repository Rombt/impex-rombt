<?php


function get_data_bakery_equipments() {

	$args = array(
		'post_type' => 'product',
		'status' => 'publish',
		'limit' => -1,
	);

	$query_products = wc_get_products( $args );

	$arr_products = [];
	foreach ( $query_products as $key => $value ) {
		$product = $value->get_data();
		$product['imgSrc'] = wp_get_attachment_image_src( intval( $product['image_id'] ) )[0];
		$arr_products[] = $product;
	}

	wp_send_json_success( $arr_products );

	wp_die();
}
add_action( 'wp_ajax_get_data_bakery_equipments', 'get_data_bakery_equipments' );


