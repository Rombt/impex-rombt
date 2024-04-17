<?php
/* Template Name: test */
?>

<?php get_header(); ?>

<?php

global $rmbt_impex_options;


$args = array(
   // 'product_category_id' => array(2477, 2480),
   'product_category_id' => $rmbt_impex_options['equipment-categories-group_multi-text'],
);
$arr_products = wc_get_products($args);


?>

<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-equipment-categories-full-width">
         <section class="rmbt-container rmbt-equipment-categories">
            <?php get_template_part('template-parts/components/title', 'page', ['title' => 'equipCatPage-equipment-categories_page-title']); ?>
            <div class="rmbt-equipment-categories__text"><?php echo rmbt_get_redux_field('equipCatPage-equipment-categories_page-text') ?></div>
            <div class="rmbt-equipment-categories__row">
               <?php


               echo '<pre> $categories_id = ';
               print_r($arr_products);
               echo "</pre>";


               ?>
            </div>
         </section>
      </div>
   </div>
</main>


<?php get_footer();
