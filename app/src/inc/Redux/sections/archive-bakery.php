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
            'id' => 'archive-bakery_page-title',
            'type' => 'text',
            'title' => esc_html__('Title of Archive Bakery Page', 'rmbt_impex'),
            'default' => esc_html__('Вироби', 'rmbt_impex'),
         ),
         array(
            'id' => 'archive-bakery_page-text',
            'type' => 'textarea',
            'title' => esc_html__('Archive Bakery Page Description', 'rmbt_impex'),
         ),


      ),
   ),
);
