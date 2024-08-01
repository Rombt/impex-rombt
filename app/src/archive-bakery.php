<?php get_header(); ?>
<?php 
if ( function_exists('pll_current_language') ) {
   $locale = explode('_', pll_current_language('locale'))[0];
}
?>

<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-equipment-categories-full-width">
         <section class="rmbt-container rmbt-equipment-categories">
            <?php get_template_part('template-parts/components/title', 'page', ['title' => rmbt_get_redux_field('archive-bakery_page-title_'. $locale, 10)]); ?>

            <?php
            if (rmbt_get_redux_field('archive-bakery_page-text_'. $locale) !== '') { ?>
            <div class="rmbt-equipment-categories__text">
               <?php echo rmbt_get_redux_field('archive-bakery_page-text_'. $locale) ?></div>
            <?php } ?>

            <div class="rmbt-equipment-categories__row">

               <?php if (have_posts()) {
                  while (have_posts()) :
                     the_post();
                     get_template_part('template-parts/components/equipment_categories_card', null, [
                        'src' => get_permalink($post->ID),
                        'title' => rmbt_trim_excerpt(4, $post->post_title),
                        'text' => rmbt_trim_excerpt(10, strip_tags(get_the_content())),
                        'id-img' => get_post_thumbnail_id($post->ID),
                        'alt-img' =>  rmbt_trim_excerpt(4, $post->post_title),
                     ]);

                  endwhile;
               } else {
                  //   get_template_part('partials/notfound');
               }

               ?>

            </div>
         </section>

         <?php get_template_part('template-parts/components/pagination'); ?>


      </div>
   </div>
</main>



<?php get_footer();