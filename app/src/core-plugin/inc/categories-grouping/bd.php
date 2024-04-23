<?php

global $wpdb;

$table_name = $wpdb->prefix . 'rmbt_categories_group';

$sql = "SHOW TABLES LIKE '$table_name'";
$result = $wpdb->get_var($sql);
if ($result === $table_name) {
   return;
}


$table_structure = array(
   'id' => array(
      'data_type' => 'INT',
      'primary_key' => true,
      'auto_increment' => true,
   ),
   'name' => array(
      'data_type' => 'VARCHAR(255)',
      'not_null' => true,
   ),
   'description' => array(
      'data_type' => 'TEXT',
   ),
   'img_id' => array(
      'data_type' => 'INT',
      'not_null' => true,
   ),
   'img_url' => array(
      'data_type' => 'VARCHAR(255)',
      'not_null' => true,
   ),
   'categories' => array(
      'data_type' => 'JSON',
   ),
);

// Подготовить SQL-запрос для создания таблицы
$sql = 'CREATE TABLE ' . $table_name . ' (' . "\n";
foreach ($table_structure as $field_name => $field_data) {
   $sql .= '`' . $field_name . '` ' . $field_data['data_type'];
   if (isset($field_data['primary_key'])) {
      $sql .= ' PRIMARY KEY';
   }
   if (isset($field_data['auto_increment'])) {
      $sql .= ' AUTO_INCREMENT';
   }
   if (isset($field_data['not_null'])) {
      $sql .= ' NOT NULL';
   }
   $sql .= ",\n";
}
$sql = rtrim($sql, ",\n") . ')';

// Выполнить SQL-запрос с помощью $wpdb
$wpdb->query($sql);
