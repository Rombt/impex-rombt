<?php
defined('ABSPATH') || exit;


// APP buttons sections start
Redux::set_section(
   $opt_name,
   array(
      'title'            => esc_html__('APP buttons', 'rmbt_impex'),
      'id'               => 'settings_app-buttons',
      'desc'             => esc_html__('APP buttons settings', 'rmbt_impex'),
      'customizer_width' => '450',
      'subsections' => true,
      // 'icon'             => 'el el-home',
      'fields'           => array(
         array(
            'id'           => 'icon-app-apple',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Apple APP Icon', 'rmbt_impex'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => '/assets/img/icon_apple.png'
            ),
         ),
         array(
            'id'       => 'linck-app-apple',
            'type'     => 'text',
            'title'    => esc_html__('Linck APP Apple', 'rmbt_impex'),
            'default'  => esc_url('#'),
         ),

         array(
            'id'           => 'icon-app-google',
            'type'         => 'media',
            'url'          => true,
            'title'        => esc_html__('Google APP icon', 'rmbt_impex'),
            'compiler'     => 'true',
            'preview_size' => 'full',
            'default' =>   array(
               'url' => '/assets/img/icon_google-play.png'
            ),
         ),
         array(
            'id'       => 'linck-app-google',
            'type'     => 'text',
            'title'    => esc_html__('Linck APP Google', 'rmbt_impex'),
            'default'  => esc_url('#'),
         ),

      ),
   )
);
