<?php

function get_all_categories()
{
   $args = array(
      'taxonomy' => 'product_cat',
      'hide_empty' => false,
   );
   $categories = get_categories($args);

   if (count($categories) > 0) {
      wp_send_json_success($categories);
   } else {
      wp_send_json_error('Product categories are absent');
   }
   wp_die();
}
add_action('wp_ajax_get_all_categories', 'get_all_categories');

function get_obj_category()
{

   global $rmbt_GROUP;

   $rmbt_GROUP = $_POST;
}
add_action('wp_ajax_get_obj_category', 'get_obj_category');
