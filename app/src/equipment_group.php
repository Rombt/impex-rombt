<?php
/* Template Name: Equipment group */
?>

<?php get_header(); ?>

<?php
$arr_all_products = [];
$id_group = isset($_GET['id_group']) ? $_GET['id_group'] : false;
$group = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $id_group))[0];
$categories = json_decode($group->categories);
if (count($categories) > 0) {
   $args = array(
      'post_status'    => 'publish',
      'posts_per_page' => -1,
      'product_category_id' => $categories
   );
   $arr_all_products = wc_get_products($args);
}
?>



<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-equipment-categories-full-width">
         <section class="rmbt-container rmbt-equipment-categories">
            <?php get_template_part('template-parts/components/title', 'page', ['title' => $group->name]); ?>
            <div class="rmbt-equipment-categories__text"><?php echo $group->description ?></div>
            <div class="rmbt-equipment-categories__row">

               <?php
               if (count($arr_all_products) > 0) {
                  foreach ($arr_all_products as $product) {

                     get_template_part('template-parts/components/equipment_categories_card', null, [
                        'src' => get_permalink($product->id),
                        'title' => rmbt_trim_excerpt(4, $product->name),
                        'text' => rmbt_trim_excerpt(10, $product->description),
                        'id-img' => $product->image_id,
                        'alt-img' =>  rmbt_trim_excerpt(4, $product->name),
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
