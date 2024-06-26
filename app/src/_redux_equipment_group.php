<?php
/* Template Name: redux Equipment group */
?>

<?php get_header(); ?>

<?php
global $rmbt_impex_options;


$args = array(
   'product_category_id' => $rmbt_impex_options['equipment-categories-group_multi-text'],
);
$arr_products = wc_get_products($args);

?>





<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-equipment-categories-full-width">
         <section class="rmbt-container rmbt-equipment-categories">
            <?php get_template_part('template-parts/components/title', 'page', ['title' => 'rmbt-equipment-categories-group_page-title']); ?>
            <div class="rmbt-equipment-categories__text"><?php echo rmbt_get_redux_field('equipCatPage-equipment-categories_page-text') ?></div>
            <div class="rmbt-equipment-categories__row">

               <?php
               foreach ($arr_products as $product) {

                  get_template_part('template-parts/components/equipment_categories_card', null, [
                     'title' => $product->name,
                     'text' => $product->description,
                     'id-img' => 'equipCatPage-dough-rounders_article-img-id',
                     'alt-img' => 'img',
                  ]);
               }
               ?>


            </div>
         </section>
      </div>
   </div>
</main>


<?php get_footer();
