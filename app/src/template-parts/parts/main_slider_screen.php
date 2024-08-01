<?php
global $rmbt_impex_options;
if ( function_exists('pll_current_language') ) {
         $locale = explode('_', pll_current_language('locale'))[0]; 
      }
if (isset($rmbt_impex_options['main_slider_screen-gallery'])) {
   $arr_main_slider_screen_gallery = explode(",", $rmbt_impex_options['main_slider_screen-gallery']);
}

if (rmbt_get_redux_field('button_href') === '' || rmbt_get_redux_field('button_href') === '#') {
   $contact_page_url = get_permalink('11702');
} else {
   $contact_page_url = rmbt_get_redux_field('button_href');
}

?>


<div class="wrapper-section wrapper-section-main-slider-screen">
   <div class="main-slider-screen rmbt-full-width">

      <div class="site-title">
         <div class="site-title__slogan"> <?php echo rmbt_get_redux_field('front_page_slogan_'. $locale) ?> </div>
         <div class="site-title__title">
            <h1><?php echo rmbt_get_redux_field('front_page_title_'. $locale, 1)?></h1>
            <p> <?php echo rmbt_get_redux_field('front_page_subtitle_'. $locale) ?> </p>
         </div>
         <?php get_template_part('template-parts/components/button-link', null, ['href' => $contact_page_url, 'title' => rmbt_get_redux_field('button_title_'. $locale)]);
         ?>
      </div>

      <div class="main-slider-screen__video">
         <iframe frameborder="0" allowfullscreen=""
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" title="Impexmash-PROMO"
            src="https://www.youtube.com/embed/off7w3-tptA?playlist=off7w3-tptA&amp;iv_load_policy=3&amp;enablejsapi=1&amp;disablekb=1&amp;autoplay=1&amp;controls=0&amp;mute=1&amp;showinfo=0&amp;rel=0&amp;loop=1&amp;wmode=transparent&amp;origin=<?php echo get_site_url(); ?>"></iframe>
      </div>



   </div>
   <?php get_template_part('template-parts/components/search_block', '3'); ?>
</div>