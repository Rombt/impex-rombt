<?php
global $rmbt_impex_options;
if (isset($rmbt_impex_options['main_slider_screen-gallery'])) {
   $arr_main_slider_screen_gallery = explode(",", $rmbt_impex_options['main_slider_screen-gallery']);
}
?>



<div class="wrapper-section">
   <div class="main-slider-screen swiper rmbt-full-width">
      <div class="background-picture wrap-img">
         <?php rmbt_redux_img('background_picture') ?>
         <span></span>
      </div>

      <div class="site-title">
         <div class="site-title__title">
            <h1><?php _e(rmbt_get_redux_field('front_page_title', 1), 'rmbt_impex') ?></h1>
         </div>
         <div class="site-title__subtitle">
            <?php echo rmbt_get_redux_field('front_page_sub_title') ?>
         </div>
         <?php
         // get_template_part('template-parts/components/button');
         get_template_part('template-parts/components/button-link', null, ['href' => rmbt_get_redux_field('button_href'), 'title' => rmbt_get_redux_field('button_title')]);
         ?>
      </div>

      <div class="swiper-wrapper">
         <?php if (!empty($arr_main_slider_screen_gallery[0])) :
            foreach ($arr_main_slider_screen_gallery as $image_id) :
         ?>
               <div class="swiper-slide">
                  <div class="wrap-img main-slider-screen__wrap-img">
                     <?php echo wp_get_attachment_image($image_id, 'rmbt_main_slider_img', false, ['alt' => 'main slider img']) ?>
                  </div>
               </div>
         <?php
            endforeach;
         endif;
         ?>
      </div>
      <div class="main-slider-screen__pagination"></div>
   </div>
</div>