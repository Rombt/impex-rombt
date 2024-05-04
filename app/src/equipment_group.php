<?php
/* Template Name: Equipment group */
?>

<?php get_header(); ?>

<?php
<<<<<<< HEAD

$id_group = isset($_GET['id_group']) ? $_GET['id_group'] : false;
$group = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id = %d", $id_group))[0];
$arr_all_products = [];
$arr_cat_products = [];
// foreach (json_decode($group->categories) as $cat_id) {
//    $arr_cat_products = wc_get_products($cat_id);
//    foreach ($arr_cat_products as $product) {
//       $arr_all_products[] = $product;
//    }
// }
=======
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
>>>>>>> de6f0d475e3409a86d1b502d922a9d724edb5a8c
?>

<div class="test-block">

   <?php

   echo '<pre> $group = ';
   print_r($group->categories);
   echo "</pre>";


<<<<<<< HEAD


   foreach (json_decode($group->categories) as $cat_id) {

      $args = array(
         'status' => 'publish', // Только опубликованные товары
         'limit' => -1, // Получить все товары, не ограничивая количество
         'category' => array($cat_id), // Укажите ID категории
      );
      // 
      // $WC_Report_Sales_By_Category = new WC_Report_Sales_By_Category();
      // $WC_Report_Sales_By_Category->get_products_in_category($category_id);

      // $arr_cat_products = wc_get_products($args);
      $arr_cat_products = wc_get_products(array(
         'category_id' => $cat_id
      ));

      echo '<pre> $arr_cat_products  = ';
      print_r($arr_cat_products[0]);
      echo "</pre>";

      foreach ($arr_cat_products as $product) {
         $arr_all_products[] = $product;
      }
   }



   ?>


</div>


=======
>>>>>>> de6f0d475e3409a86d1b502d922a9d724edb5a8c
<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-equipment-categories-full-width">
         <section class="rmbt-container rmbt-equipment-categories">
            <?php get_template_part('template-parts/components/title', 'page', ['title' => $group->name]); ?>
            <div class="rmbt-equipment-categories__text"><?php echo $group->description ?></div>
            <div class="rmbt-equipment-categories__row">

               <?php
<<<<<<< HEAD
               foreach ($arr_all_products as $product) {
                  get_template_part('template-parts/components/equipment_categories_card', null, [
                     'src' => get_permalink($product->id),
                     'title' => rmbt_trim_excerpt(4, $product->name),
                     'text' => rmbt_trim_excerpt(10, $product->description),
                     'id-img' => $product->image_id,
                     'alt-img' =>  rmbt_trim_excerpt(4, $product->name),
                  ]);
               }

               ?>






=======
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

>>>>>>> de6f0d475e3409a86d1b502d922a9d724edb5a8c
            </div>
         </section>
      </div>
   </div>
</main>


<?php get_footer();
