<?php


$arr_blocks = [];


add_action('add_meta_boxes', 'rmbt_bakeries_meta_box', 10, 2);
function rmbt_bakeries_meta_box($post_type, $post)
{
	add_meta_box('rmbt-bakery_mb', esc_html__('Recipe data', 'restaurant-site'), 'rmbt_bakery_mb_html', 'bakery', 'normal');
}

function rmbt_bakery_mb_html($post)
{
?>

	<div class="bakery-data-block">
	</div>

<?php
}

function rmbt_save_meta_box_bakeries($post_id, $post)
{
	global $arr_blocks;

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

	foreach ($_POST as $field_name => $field_value) {

		if (!wp_verify_nonce($_POST['_bakery_meta_box'], 'rmbt_bakery_field')) {
			return $post_id;
		}

		if (isset($_POST[$field_name])) {
			update_post_meta($post_id, $field_name, sanitize_text_field($_POST[$field_name]));
		} else {
			delete_post_meta($post_id, $field_name);
		}
	}

	return $post_id;
}
add_action('save_post', 'rmbt_save_meta_box_bakeries', 10, 2);
