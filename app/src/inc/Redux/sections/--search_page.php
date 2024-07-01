<?php 
defined( 'ABSPATH' ) || exit;


// Menu page sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Search Page', 'rmbt_impex'),
      'id'               => 'search-page',
      'customizer_width' => '450',
      'subsection' => true,
      // 'icon'             => 'el el-home',
      'fields'           => array(
         array(
            'id'       => 'search-page_title',
            'type'     => 'text',
            'title'    => esc_html__('Search Page Title', 'rmbt_impex'),
            'default'  => esc_html__('Search Results','rmbt_impex'),
         ),
      ),
   )
);