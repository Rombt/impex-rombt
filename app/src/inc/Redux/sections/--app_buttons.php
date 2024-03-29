<?php
defined('ABSPATH') || exit;


// APP buttons sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('APP buttons', 'restaurant-site'),
      'id'               => 'settings_app-buttons',
      'desc'             => esc_html__('APP buttons settings', 'restaurant-site'),
      'customizer_width' => '450',
      'subsections' => true,
      // 'icon'             => 'el el-home',
      'fields'           => array(
         array(
            'id'           => 'icon-app-apple',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Apple APP Icon', 'restaurant-site'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => '/assets/img/icon_apple.png'
            ),
         ),
         array(
            'id'       => 'linck-app-apple',
            'type'     => 'text',
            'title'    => esc_html__('Linck APP Apple', 'restaurant-site'),
            'default'  => esc_url('#'),
         ),

         array(
            'id'           => 'icon-app-google',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Google APP icon', 'restaurant-site'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => '/assets/img/icon_google-play.png'
            ),
         ),
         array(
            'id'       => 'linck-app-google',
            'type'     => 'text',
            'title'    => esc_html__('Linck APP Google', 'restaurant-site'),
            'default'  => esc_url('#'),
         ),

      ),
   )
);
