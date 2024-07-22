<?php

defined('ABSPATH') || exit;


Redux::set_section(
   $opt_name,
   array(
      'title' => esc_html__('Archive Bakery Page', 'rmbt_impex'),
      'id' => 'settings_archive-bakery-page',
      'desc' => esc_html__('Archive Bakery page settings', 'rmbt_impex'),
      'customizer_width' => '450',
      // 'subsection' => true,
      // 'icon'             => 'el el-front',
      'fields' => array(


         array(
            'id' => 'archive-bakery_page-title_uk',
            'type' => 'text',
            'title' => esc_html__('Заголовок архівної сторінки виробів', 'rmbt_impex'),
            'default' => esc_html__('Вироби', 'rmbt_impex'),
         ),

         array(
            'id' => 'archive-bakery_page-title_en',
            'type' => 'text',
            'title' => esc_html__('Title of Archive Bakery Page', 'rmbt_impex'),
            'default' => esc_html__('Products', 'rmbt_impex'),
         ),

         array(
            'id' => 'archive-bakery_page-title_ru',
            'type' => 'text',
            'title' => esc_html__('Заголовок архивной страницы изделий', 'rmbt_impex'),
            'default' => esc_html__('Изделия', 'rmbt_impex'),
         ),

         array(
            'id' => 'archive-bakery_page-text_uk',
            'type' => 'textarea',
            'title' => esc_html__('Опис архівної сторінки виробів', 'rmbt_impex'),
         ),

         
         array(
            'id' => 'archive-bakery_page-text_en',
            'type' => 'textarea',
            'title' => esc_html__('Archive Bakery Page Description', 'rmbt_impex'),
         ),

         
         array(
            'id' => 'archive-bakery_page-text_ru',
            'type' => 'textarea',
            'title' => esc_html__('Описание  архивной страницы изделий', 'rmbt_impex'),
         ),


      ),
   ),
);