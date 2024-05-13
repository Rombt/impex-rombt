<?php get_header(); ?>

<?php
$content = get_the_content();

$pattern_img = '/<img[^>]*>/';
$pattern_youtube_video = '/<iframe.*?src="https:\/\/www\.youtube\.com\/embed\/([a-zA-Z0-9_-]+)".*?<\/iframe>/';
$pattern_wp_video = '/\[video(.*?)\](.*?)\[\/video\]/i';
preg_match_all($pattern_img, $content, $arr_img);
preg_match_all($pattern_youtube_video, $content, $arr_youtube);
preg_match_all($pattern_wp_video, $content, $arr_short_codes);
$arr_wp_video = array_map(function ($short_code) {
   return do_shortcode($short_code);
}, $arr_short_codes[0]);

$arr_sliders = array_merge($arr_youtube[0], $arr_wp_video, $arr_img[0]);

$allowed_tags = array(
   'p' => array(),
   'strong' => array(),
   'a' => array(
      'href' => array()
   )
);
$text = strip_shortcodes(wp_kses($content, $allowed_tags));

?>


<div class="wrapper-section">
   <div class="rmbt-full-width rmbt-single-page-full-width">
      <section class="rmbt-container rmbt-single-page">
         <div class="rmbt-single-page__row">
            <div class="rmbt-single-page__col">
               <?php get_template_part('template-parts/components/title', 'page', ['title' => get_the_title()]); ?>

               <div class="rmbt-single-page__text text-content"> <?php echo $text; ?> </div>

               <?php if (isset($arr_sliders) && count($arr_sliders) > 2) : ?>
                  <div class="rmbt-single-post-swiper-wrap">
                     <div class="button-prev">
                        <svg>
                           <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow-left_1">
                           </use>
                        </svg>
                     </div>
                     <div class="rmbt-single-post-swiper swiper">
                        <div class="swiper-wrapper">
                           <?php foreach ($arr_sliders as $image) : ?>
                              <div class="swiper-slide rmbt-shadow ">
                                 <div class="wrap-img rmbt-single-post-swiper__wrap-img">
                                    <?php echo $image; ?>
                                 </div>
                              </div>
                           <?php endforeach;  ?>
                        </div>
                        <!-- <div class="rmbt-single-post-swiper__pagination"></div> -->
                     </div>
                     <div class="button-next">
                        <svg>
                           <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow-right_1">
                           </use>
                        </svg>
                     </div>
                  </div>
               <?php else :  ?>
                  <!-- <div class="rmbt-single-page__img"> -->
                  <?php foreach ($arr_sliders as $image) : ?>
                     <div class="wrap-img rmbt-single-page__wrap-img rmbt-shadow ">
                        <?php echo $image; ?>
                     </div>
                  <?php endforeach;  ?>
                  <!-- </div> -->
               <?php endif; ?>


            </div>
         </div>
      </section>
   </div>
</div>
<!-- </div> -->

<?php get_footer();
