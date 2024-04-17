<?php

defined('ABSPATH') || exit;


Redux::set_section(
   $opt_name,
   array(
      'title' => esc_html__('Equipment Categories Group Page', 'rmbt_impex'),
      'id' => 'equipment-categories-group_page',
      'desc' => esc_html__('Equipment Categories Group Page Settings', 'rmbt_impex'),
      'customizer_width' => '450',
      // 'subsection' => true,
      // 'icon'             => 'el el-front',
      'fields' => array(


         array(
            'id' => 'equipment-categories-group_page-title',
            'type' => 'text',
            'title' => esc_html__('Title of Equipment Categories Page', 'rmbt_impex'),
            'default' => esc_html__('Equipments', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipment-categories-group_page-text',
            'type' => 'textarea',
            'title' => esc_html__('Equipment Categories Group Page Text', 'rmbt_impex'),
         ),


         // /*------------------ the start ovens accordion ------------------*/
         // array(
         //    'id' => 'equipment-categories-group_start',
         //    'type' => 'accordion',
         //    'title' => esc_html__('Ovens Section', 'rmbt_impex'),
         //    'subtitle' => 'Add your content to the section \'ovens\'',
         //    'position' => 'start',
         // ),

         // /*------------------ the start ****** section ------------------*/
         array(
            'id' => 'rmbt-equipment-categories-group_section-start',
            'type' => 'section',
            'title' => esc_html__('****** section', 'rmbt_impex'),
            // 'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_impex'),
            'indent' => true
         ),


         array(
            'id' => 'equipment-categories-group_multi-text',
            'type' => 'multi_text',
            'title' => esc_html__('Enter Categories Ids', 'rmbt_impex'),
            'validate' => 'numeric',
            'subtitle' => esc_html__('******', 'rmbt_impex'),
            'desc' => esc_html__('------', 'rmbt_impex')
         ),




         array(
            'id'     => 'rmbt-equipment-categories-group_section-end',
            'type'   => 'section',
            'indent' => false,
         ),

         /*------------------ the end ******** section ------------------*/


         // /*------------------ the start ****** section ------------------*/
         array(
            'id' => 'rmbt-equipment-categories-group_2_section-start',
            'type' => 'section',
            'title' => esc_html__('****** section', 'rmbt_impex'),
            // 'subtitle' => esc_html__('Enter phone number and set his name', 'rmbt_impex'),
            'indent' => true
         ),


         array(
            'id' => 'equipment-categories-group_2_multi-text',
            'type' => 'multi_text',
            'title' => esc_html__('Enter Categories Ids', 'rmbt_impex'),
            'validate' => 'numeric',
            'subtitle' => esc_html__('******', 'rmbt_impex'),
            'desc' => esc_html__('------', 'rmbt_impex')
         ),




         array(
            'id'     => 'rmbt-equipment-categories-group_2_section-end',
            'type'   => 'section',
            'indent' => false,
         ),

         /*------------------ the end ******** section ------------------*/


         // array(
         //    'id' => 'equipment-categories-group_end',
         //    'type' => 'accordion',
         //    'position' => 'end'
         // ),
         /*------------------ the end ******* accordion ------------------*/
      ),
   ),
);
