<?php

function get_data_categories()
{

   $args = array(
      'taxonomy' => 'product_cat',
      'hide_empty' => false,
   );
   $categories = get_categories($args);


   global $wpdb;

   $table_name = $wpdb->prefix . 'rmbt_categories_group';
   $groups = []; // Массив для хранения объектов
   $results = $wpdb->get_results("SELECT * FROM $table_name"); // Получить все записи

   foreach ($results as $row) {
      $group = new stdClass(); // Создать новый объект
      $group->id = $row->id;
      $group->name = $row->name;
      $group->img_id = $row->img_id;
      $group->img_url = $row->img_url;
      $group->description = $row->description;
      $group->categories = json_decode($row->categories); // Преобразовать JSON в массив
      $groups[] = $group; // Добавить объект в массив
   }

   if (count($categories) > 0) {
      $data = new stdClass();
      $data->categories = $categories;
      $data->groups = $groups;
      wp_send_json_success($data);
   } else {
      wp_send_json_error('Product categories are absent');
   }

   wp_die();
}
add_action('wp_ajax_get_data_categories', 'get_data_categories');


function get_last_category_id()
{




   global $wpdb;

   $table_name = $wpdb->prefix . 'rmbt_categories_group';

   $sql = "SELECT MAX(id) AS last_id FROM $table_name";
   $result = $wpdb->get_var($sql);

   if (
      $result !== false
   ) {
      // echo $result;

      wp_send_json_success($result);
   } else {
      echo "Error getting last ID: " . $wpdb->last_error;
   }

   wp_die();
}
add_action('wp_ajax_get_last_category_id', 'get_last_category_id');





function get_obj_category()
{

   if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      wp_die('Данная конечная точка принимает только POST-запросы');
   }

   $group = json_decode(file_get_contents('php://input'), true);

   if (!$group || json_last_error() !== JSON_ERROR_NONE) {
      wp_die('Неверный формат JSON-данных');
   }

   // if (!wp_verify_nonce($_POST['nonce'], 'rstr-ajax-nonce-view')) {                    //!!!!
   //    die;
   // }


   global $wpdb;
   $table_name = $wpdb->prefix . 'rmbt_categories_group';

   $data = array(
      'id' => $group['id'], // Добавьте ID группы в массив данных
      'name' => $group['name'],
      'img_id' => $group['img_id'],
      'img_url' => $group['img_url'],
      'description' => $group['description'],
      'categories' => json_encode($group['categories']), // Преобразовать массив в JSON
   );

   // Проверка существования записи
   $existing_record = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $group['id']));

   if ($existing_record) {
      // Запись уже существует, обновить ее
      $result = $wpdb->update($table_name, $data, array('id' => $group['id']));
      if ($result !== false) {
         log_in_file("Record updated successfully.");
      } else {
         log_in_file($wpdb->last_error);
      }
   } else {
      // Запись не существует, добавить новую
      $result = $wpdb->insert(
         $table_name,
         $data
      );
      if ($result !== false) {
         log_in_file("Record added successfully.");
      } else {
         log_in_file($wpdb->last_error);
      }
   }

   // Отправка успешного ответа (замените на желаемые данные ответа)
   wp_send_json_success(['message' => 'Данные успешно обработаны']);
}
add_action('wp_ajax_get_obj_category', 'get_obj_category');

function rmbt_del_group()
{


   if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      wp_die('Данная конечная точка принимает только POST-запросы');
   }

   $data = json_decode(file_get_contents('php://input'), true);

   if (!$data || json_last_error() !== JSON_ERROR_NONE) {
      wp_die('Неверный формат JSON-данных');
   }

   // if (!wp_verify_nonce($_POST['nonce'], 'rstr-ajax-nonce-view')) {                    //!!!!
   //    die;
   // }

   global $wpdb;

   $table_name = $wpdb->prefix . 'rmbt_categories_group';
   $record_id = $data['group_id']; // Замените 123 на ID записи, которую хотите удалить

   $result = $wpdb->delete($table_name, array('id' => $record_id));

   if ($result === false) {
      wp_send_json_error('Failed to delete record.');
   } else {
      wp_send_json_success('Record deleted successfully.');
   }

   wp_die();
}
add_action('wp_ajax_rmbt_del_group', 'rmbt_del_group');
