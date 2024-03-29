<?php 
defined( 'ABSPATH' ) || exit;


// Menu page sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('Search Page', 'restaurant-site'),
      'id'               => 'search-page',
      'customizer_width' => '450',
      'subsection' => true,
      // 'icon'             => 'el el-home',
      'fields'           => array(
         array(
            'id'       => 'search-page_title',
            'type'     => 'text',
            'title'    => esc_html__('Search Page Title', 'restaurant-site'),
            'default'  => esc_html__('Search Results','restaurant-site'),
         ),
      ),
   )
);