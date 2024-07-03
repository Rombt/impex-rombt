<?php


function get_data_categories() {
    $current_language = pll_current_language();

   //  log_in_file(determine_locale());
   //  log_in_file($current_language);
    
    // Получение категорий для текущего языка
    $args = array(
        'taxonomy' => 'product_cat',
        'hide_empty' => false,
      //   'lang' => $current_language,
    );
    $categories = get_categories($args);

    global $wpdb;
   //  $table_name = $wpdb->prefix . 'rmbt_categories_group';
    $table_name = $wpdb->prefix . 'rmbt_categories_group_lang';
    $groups = []; // Массив для хранения объектов

       // Получение групп категорий для текущего языка
      $results = $wpdb->get_results("SELECT * FROM $table_name"); // Получить все записи

   //  $results = $wpdb->get_results(
   //      $wpdb->prepare(
   //          "SELECT * FROM $table_name WHERE language_code = %s", 
   //          $current_language
   //      )
   //  );



    foreach ($results as $row) {
        $group = new stdClass(); // Создать новый объект
        $group->id = $row->id;
        $group->page_id = $row->page_id;
        $group->name = $row->name;
        $group->description = $row->description;
        $group->img_id = $row->img_id;
        $group->img_url = $row->img_url;
        $group->categories = json_decode($row->categories); // Преобразовать JSON в массив
        $group->languageCode = $row->language_code; // Преобразовать JSON в массив
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
      wp_send_json_success($result);
   } else {
      echo "Error getting last ID: " . $wpdb->last_error;
   }

   wp_die();
}
add_action('wp_ajax_get_last_category_id', 'get_last_category_id');

function rmbt_del_group()
{


   if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      wp_die('Данная конечная точка принимает только POST-запросы');
   }

   $data = json_decode(file_get_contents('php://input'), true);

   if (!$data || json_last_error() !== JSON_ERROR_NONE) {
      wp_die('Неверный формат JSON-данных');
   }

   if (!wp_verify_nonce($data['nonce'], 'rmbt-cat-groping-nonce')) {
      die;
   }

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

function publish_group()
{

   if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      wp_die('Данная конечная точка принимает только POST-запросы');
   }

   $group = json_decode(file_get_contents('php://input'), true);

   if (!$group || json_last_error() !== JSON_ERROR_NONE) {
      wp_die('Неверный формат JSON-данных');
   }

   if (!wp_verify_nonce($group['nonce'], 'rmbt-cat-groping-nonce')) {
      die;
   }


   global $wpdb;
   // $table_name = $wpdb->prefix . 'rmbt_categories_group';
   $table_name = $wpdb->prefix . 'rmbt_categories_group_lang';

   $data = array(
      'id' => $group['id'],
      'page_id' => $group['page_id'],
      'name' => $group['name'],
      'description' => $group['description'],
      'img_id' => $group['img_id'],
      'img_url' => $group['img_url'],
      'categories' => json_encode($group['categories']), // Преобразовать массив в JSON
      'language_code' =>$group['languageCode'],
   );

   $data['page_id'] = createGroupPage($data);

   $existing_record = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $group['id']));

   if ($existing_record) {
      $result = $wpdb->update($table_name, $data, array('id' => $group['id']));
      if ($result !== false) {
      } else {
         log_in_file($wpdb->last_error);
      }
   } else {
      $result = $wpdb->insert(
         $table_name,
         $data
      );
      if ($result !== false) {
      } else {
         log_in_file($wpdb->last_error);
      }
   }

   wp_send_json_success($data);
}
add_action('wp_ajax_publish_group', 'publish_group');

function createGroupPage($data)
{

   $page_data = array(
      'post_title'    => 'Группа категорий ' . $data['name'],
      'post_name'     => 'группа категорий ' . $data['name'],  // slug
      'post_content'  => '',
      'post_status'   => 'publish',
      'post_type'     => 'page',
      'page_template' => 'equipment_group.php',
   );

   $page_id = $data['page_id'];
   $page = get_post($page_id);

   if ($page !== null) {
      $page_data['ID'] = $page->ID;
      if ($page->post_status == 'trash') {
         $page_data['post_status'] = 'publish';
      }
      wp_update_post($page_data);
   } else {
      $page_id = wp_insert_post($page_data);
   }
   return $page_id;
}