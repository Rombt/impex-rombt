<?php
global $rmbt_impex_options;
if (isset($rmbt_impex_options['main_slider_screen-gallery'])) {
   $arr_main_slider_screen_gallery = explode(",", $rmbt_impex_options['main_slider_screen-gallery']);
}
?>




<div class="main-slider-screen swiper rmbt-full-width">
   <div class="swiper-wrapper">
      <?php if (!empty($arr_main_slider_screen_gallery[0])) :
         foreach ($arr_main_slider_screen_gallery as $image_id) :
            try {
               $image_data = wp_get_attachment_image_src($image_id, 'rmbt_largest-img');
               $image_url = $image_data[0];
            } catch (\Throwable $th) {
            }
      ?>


            <div class="swiper-slide">
               <div class="wrap-img main-slider-screen__wrap-img">
                  <img src=" <?php echo $image_url ?> " alt="">
               </div>
            </div>
      <?php
         endforeach;
      endif;
      ?>
   </div>
   <div class="main-slider-screen__pagination"></div>
</div>