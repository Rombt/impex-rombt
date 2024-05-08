<?php


$arr_fields = [
	'cards_ids',
	'technological_card_id',
];


add_action('add_meta_boxes', 'rmbt_bakeries_meta_box', 10, 2);
function rmbt_bakeries_meta_box($post_type, $post)
{
	add_meta_box('rmbt-bakery_mb', esc_html__('Bakery data', 'rmbt_impex'), 'rmbt_bakery_mb_html', 'bakery', 'normal');
}

function rmbt_bakery_mb_html($post)
{
	echo '<div class="bakery-data-block"></div>';
}

function rmbt_save_meta_box_bakeries($post_id, $post)
{
	global $arr_fields;

	if (!wp_verify_nonce($_POST['_bakery_nonce'], 'rmbt_bakery_meta_box')) {
		return $post_id;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}
	if ($post->post_type != 'bakery') {
		return $post_id;
	}
	$post_type = get_post_type_object($post->post_type);
	if (!current_user_can($post_type->cap->edit_post, $post_id)) {
		return $post_id;
	}

	foreach ($arr_fields  as $field_value) {

		if (isset($_POST[$field_value])) {
			update_post_meta($post_id, $field_value, sanitize_text_field($_POST[$field_value]));
		} else {
			delete_post_meta($post_id, $field_value);
		}
	}

	return $post_id;
}
add_action('save_post', 'rmbt_save_meta_box_bakeries', 10, 2);
