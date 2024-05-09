<?php
/* Template Name: Redacting content */
?>

<?php get_header(); ?>

<?php
$args = array(
   'posts_per_page' => -1,
);
$arr_all_products = wc_get_products($args);
?>

<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-equipment-categories-full-width">
         <section class="rmbt-container rmbt-equipment-categories">
            <?php get_template_part('template-parts/components/title', 'page', ['title' => get_the_title()]); ?>
            <div class="rmbt-equipment-categories__text"><?php the_content() ?></div>
            <div class="rmbt-equipment-categories__row">

               <?php
               if (count($arr_all_products) > 0) {
                  foreach ($arr_all_products as $product) {

                     get_template_part('template-parts/components/equipment_categories_card', null, [
                        'src' => get_permalink($product->id),
                        'title' => rmbt_trim_excerpt(4, $product->name),
                        'text' => rmbt_trim_excerpt(10, $product->description),
                        'id-img' => $product->image_id,
                        'alt-img' => rmbt_trim_excerpt(4, $product->name),
                     ]);
                  }
               }
               ?>

            </div>
         </section>
      </div>
   </div>
</main>


<?php get_footer();
