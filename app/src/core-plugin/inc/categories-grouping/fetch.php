<?php

function get_all_categories()
{

   // log_in_file($_GET);
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

// function get_obj_category()
// {

//    // $data = json_decode(file_get_contents('php://input'), true);
//    // log_in_file($data);


//    $json = json_decode(file_get_contents('php://input'), true);
//    log_in_file(json_decode($json));
//    // log_in_file(var_dump(json_decode($json, true)));


//    wp_die();
// }
// add_action('wp_ajax_get_obj_category', 'get_obj_category');


function get_obj_category()
{
   // Проверка метода запроса
   if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
      wp_die('Данная конечная точка принимает только POST-запросы');
   }

   // Декодирование JSON-данных из тела запроса
   $group = json_decode(file_get_contents('php://input'), true);

   // Обработка потенциальной ошибки декодирования
   if (!$group || json_last_error() !== JSON_ERROR_NONE) {
      wp_die('Неверный формат JSON-данных');
   }

   // // Обработка данных (замените на свою логику)
   // // $name = $group['name']; // Пример: доступ к данным по ключу
   // // ...

   // // Необязательное ведение журнала (при условии, что log_in_file - безопасная функция)
   // log_in_file($group);






   // // Получить данные из JavaScript-объекта
   // $group = array(
   //    'name' => 'Название группы',
   //    'img_id' => 123, // ID изображения
   //    'description' => 'Описание группы',
   //    'categories' => array(275, 11, 38
   //    ), // ID категорий
   // );

   global $wpdb;
   // Определить имя таблицы
   $table_name = $wpdb->prefix . 'rmbt_categories_group';

   // Подготовить данные для вставки
   $data = array(
      'name' => $group['name'],
      // 'img_id' => $group['img_id'],
      'description' => $group['description'],
      'categories' => json_encode($group['categories']), // Преобразовать массив в JSON
   );

   // Вставить данные в таблицу
   $result = $wpdb->insert($table_name, $data);

   if ($result !== false) {
      log_in_file("Success");
   } else {
      log_in_file($wpdb->last_error);
   }















   // Отправка успешного ответа (замените на желаемые данные ответа)
   wp_send_json_success(['message' => 'Данные успешно обработаны']);
}
add_action('wp_ajax_get_obj_category', 'get_obj_category');
