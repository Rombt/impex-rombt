<?php
/* Template Name: Equipment categories group */
?>

<?php get_header(); ?>

<?php
global $rmbt_impex_options;


$args = array(
   'product_category_id' => $rmbt_impex_options['equipment-categories-group_multi-text'],
);
$arr_products = wc_get_products($args);


global $wpdb;

$table_name = $wpdb->prefix . 'rmbt_categories_group';

$groups = []; // Массив для хранения объектов

$results = $wpdb->get_results("SELECT * FROM $table_name"); // Получить все записи

foreach ($results as $row) {
   $group = new stdClass(); // Создать новый объект

   $group->id = $row->id;
   $group->name = $row->name;
   $group->img_id = $row->img_id;
   $group->description = $row->description;
   $group->categories = json_decode($row->categories); // Преобразовать JSON в массив

   $groups[] = $group; // Добавить объект в массив
}






?>

<div class="test-block">
   <?php
   echo '<pre> $groups = ';
   print_r($groups);
   echo "</pre>";
   ?>


</div>




<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-equipment-categories-full-width">
         <section class="rmbt-container rmbt-equipment-categories">
            <?php get_template_part('template-parts/components/title', 'page', ['title' => 'rmbt-equipment-categories-group_page-title']); ?>
            <div class="rmbt-equipment-categories__text"><?php echo rmbt_get_redux_field('equipCatPage-equipment-categories_page-text') ?></div>
            <div class="rmbt-equipment-categories__row">

               <?php
               // foreach ($arr_products as $product) {

               //    get_template_part('template-parts/components/equipment_categories_card', null, [
               //       'title' => $product->name,
               //       'text' => $product->description,
               //       'id-img' => 'equipCatPage-dough-rounders_article-img-id',
               //       'alt-img' => 'img',
               //    ]);
               // }
               ?>


            </div>
         </section>
      </div>
   </div>
</main>


<?php get_footer();
