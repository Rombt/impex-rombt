<?php
/* Template Name: Equipment categories page */
?>

<?php get_header(); ?>




<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-equipment-categories-full-width">
         <section class="rmbt-container rmbt-equipment-categories">
            <h1 class="rmbt-equipment-categories__title"><?php echo rmbt_get_redux_field('rmbt-equipment-categories_page-title') ?></h1>
            <div class="rmbt-equipment-categories__text"><?php echo rmbt_get_redux_field('rmbt-equipment-categories_page-text') ?></div>
            <div class="rmbt-equipment-categories__row">
               <?php get_template_part('template-parts/components/equipment_categories_card', null, [
                  'title' => rmbt_get_redux_field('rmbt-ovens_article-title'),
                  'text' => rmbt_get_redux_field('rmbt-ovens_article-text'),
                  'id-img' => 'rmbt-ovens_article-img-id',
                  'alt-img' => rmbt_get_redux_field('rmbt-ovens_article-img-alt'),
               ]); ?>
               <?php get_template_part('template-parts/components/equipment_categories_card', null, [
                  'title' => rmbt_get_redux_field('rmbt-dropping-machines_article-title'),
                  'text' => rmbt_get_redux_field('rmbt-dropping-machines_article-text'),
                  'id-img' => 'rmbt-dropping-machines_article-img-id',
                  'alt-img' => rmbt_get_redux_field('rmbt-dropping-machines_article-img-alt'),
               ]); ?>
               <?php get_template_part('template-parts/components/equipment_categories_card', null, [
                  'title' => rmbt_get_redux_field('rmbt-enrobing-machine_article-title'),
                  'text' => rmbt_get_redux_field('rmbt-enrobing-machine_article-text'),
                  'id-img' => 'rmbt-enrobing-machine_article-img-id',
                  'alt-img' => rmbt_get_redux_field('rmbt-enrobing-machine_article-img-alt'),
               ]); ?>
               <?php get_template_part('template-parts/components/equipment_categories_card', null, [
                  'title' => rmbt_get_redux_field('rmbt-electric-proofer_article-title'),
                  'text' => rmbt_get_redux_field('rmbt-electric-proofer_article-text'),
                  'id-img' => 'rmbt-electric-proofer_article-img-id',
                  'alt-img' => rmbt_get_redux_field('rmbt-electric-proofer_article-img-alt'),
               ]); ?>
            </div>
         </section>
      </div>
   </div>
</main>





<?php get_template_part('template-parts/components/pagination'); ?>




<?php get_footer();
