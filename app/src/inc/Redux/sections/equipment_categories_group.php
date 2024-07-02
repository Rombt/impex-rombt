<?php

defined('ABSPATH') || exit;


Redux::set_section(
   $opt_name,
   array(
      'title' => esc_html__('Equipment Categories Group Page', 'rmbt_impex'),
      'id' => 'equipment-categories-group_page',
      'desc' => esc_html__('Equipment Categories Group Page Settings', 'rmbt_impex'),
      'customizer_width' => '450',
      'fields' => array(


         array(
            'id' => 'rmbt-equipment-categories-group_page-title_uk',
            'type' => 'text',
            'title' => esc_html__('Title of Equipment Categories Page on Ukrainian', 'rmbt_impex'),
            'default' => esc_html__('Equipments', 'rmbt_impex'),
         ),
         array(
            'id' => 'rmbt-equipment-categories-group_page-title_en',
            'type' => 'text',
            'title' => esc_html__('Title of Equipment Categories Page on England', 'rmbt_impex'),
            'default' => esc_html__('Equipments', 'rmbt_impex'),
         ),
         array(
            'id' => 'rmbt-equipment-categories-group_page-title_ru',
            'type' => 'text',
            'title' => esc_html__('Title of Equipment Categories Page on russian', 'rmbt_impex'),
            'default' => esc_html__('Equipments', 'rmbt_impex'),
         ),
         array(
            'id' => 'rmbt-equipment-categories-group_page-text_uk',
            'type' => 'textarea',
            'title' => esc_html__('Equipment Categories Group Page Text on Ukrainian', 'rmbt_impex'),
         ),
         array(
            'id' => 'rmbt-equipment-categories-group_page-text_en',
            'type' => 'textarea',
            'title' => esc_html__('Equipment Categories Group Page Text on England', 'rmbt_impex'),
         ),
         array(
            'id' => 'rmbt-equipment-categories-group_page-text_ru',
            'type' => 'textarea',
            'title' => esc_html__('Equipment Categories Group Page Text on russian', 'rmbt_impex'),
         ),

         
         array(
            'id'     => 'rmbt-equipment-categories-group_section-end',
            'type'   => 'section',
            'indent' => false,
         ),

      ),
   ),
);