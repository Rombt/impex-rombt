<?php
/* Template Name: Equipment  categories groups  page */
?>

<?php get_header(); ?>



<?php
global $wpdb;

$table_name = $wpdb->prefix . 'rmbt_categories_group';
$arr_groups = [];
$results = $wpdb->get_results("SELECT * FROM $table_name");

foreach ($results as $row) {
   $group = new stdClass();
   $group->id = $row->id;
   $group->page_id = $row->page_id;
   $group->name = $row->name;
   $group->img_id = $row->img_id;
   $group->img_url = $row->img_url;
   $group->description = $row->description;
   $group->categories = json_decode($row->categories);
   $arr_groups[] = $group;
}
?>


<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-equipment-categories-full-width">
         <section class="rmbt-container rmbt-equipment-categories">
            <?php get_template_part('template-parts/components/redux_title', 'page', ['title' => 'equipCatPage-equipment-categories_page-title']); ?>
            <div class="rmbt-equipment-categories__text"><?php echo rmbt_get_redux_field('equipCatPage-equipment-categories_page-text') ?></div>
            <div class="rmbt-equipment-categories__row">
               <?php foreach ($arr_groups as $group) {
                  get_template_part('template-parts/components/equipment_categories_card', null, [
                     'src' => get_permalink($group->page_id) . '?id_group=' . $group->id,
                     'title' => $group->name,
                     'text' => $group->description,
                     'id-img' => $group->img_id,
                     'alt-img' => $group->name,
                  ]);
               } ?>
            </div>
         </section>
      </div>
   </div>
</main>


<?php get_footer();
