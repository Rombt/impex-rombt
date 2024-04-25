<?php
/* Template Name: redux Equipment  categories groups  page */
?>

<?php get_header(); ?>

<?php $arr_name_cat_equip = get_arr_names_cat_equip(); ?>

<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-equipment-categories-full-width">
         <section class="rmbt-container rmbt-equipment-categories">
            <?php get_template_part('template-parts/components/title', 'page', ['title' => 'equipCatPage-equipment-categories_page-title']); ?>
            <div class="rmbt-equipment-categories__text"><?php echo rmbt_get_redux_field('equipCatPage-equipment-categories_page-text') ?></div>
            <div class="rmbt-equipment-categories__row">
               <?php foreach ($arr_name_cat_equip as $value) {
                  get_template_part('template-parts/components/redux_equipment_categories_card', null, [
                     'title' => rmbt_get_redux_field('equipCatPage-' . $value . '_article-title'),
                     'text' => rmbt_get_redux_field('equipCatPage-' . $value . '_article-text'),
                     'id-img' => 'equipCatPage-' . $value . '_article-img-id',
                     'alt-img' => rmbt_get_redux_field('equipCatPage-' . $value . '_article-img-alt'),
                  ]);
               } ?>
            </div>
         </section>
      </div>
   </div>
</main>


<?php get_footer();
