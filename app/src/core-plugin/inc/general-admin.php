<?php

/**
 * This is the place for functions that will be used frequently in the admin part of your site.
 */












//===============================================================================================
//===============================================================================================
/*
   $mod 'w'	Открывает файл для записи; помещает указатель в начало файла и обрезает файл до нулевой длины. Если файл не существует - пытается его создать.
*/

function log_in_file($date, $mod = 'a')
{
   // Путь к файлу лога
   $path = plugin_dir_path(__FILE__) . 'log/log.txt';

   // Открываем файл для записи, 'a' означает, что будем добавлять данные в конец файла
   $file_handle = fopen($path, $mod);

   if ($file_handle) {
      $timestamp = date('d-m-y H:i:s');

      $log_entry = $timestamp . ': ' . json_encode($date) . PHP_EOL;

      fwrite($file_handle, $log_entry);
      fclose($file_handle);
   } else {
      // Если файл не удалось открыть для записи, вы можете обработать эту ситуацию соответственно
      echo 'Ошибка при открытии файла для записи';
   }
}
