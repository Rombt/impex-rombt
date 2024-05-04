<?php


function get_data_bakery_equipments()
{

$query = new WC_Product_Query(array(
    'limit' => -1,
));
$products = $query->get_products();


wp_send_json_success($products);


   wp_die();
}
add_action('wp_ajax_get_data_bakery_equipments', 'get_data_bakery_equipments');


