<?php get_header(); ?>


<?php
$technological_card_img_id = get_post_meta($post->ID, 'technological_card_id', true);

$arr_equipments_ids = array_filter(explode(',', get_post_meta($post->ID, 'cards_ids', true)), function ($value) {
   return $value !== "";
});

if (count($arr_equipments_ids) > 0) {
   $args = array(
      'post_type' => 'product',
      'status' => 'publish',
      'include' => $arr_equipments_ids,
   );
   $query_products = wc_get_products($args);
}
?>

<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-single-bakery-full-width">
         <section class="rmbt-container rmbt-single-bakery">
            <?php get_template_part('template-parts/components/title', 'page', ['title' => $post->post_title]); ?>
            <div class="rmbt-single-bakery__row">
               <?php if ($technological_card_img_id !== 'false' && $technological_card_img_id != '') : ?>
                  <div class="wrap-img rmbt-technology-card">
                     <img src="<?php echo wp_get_attachment_url(intval($technological_card_img_id)) ?>" alt="technology card">
                  </div>
               <?php endif; ?>
               <div class="rmbt-single-bakery__text"><?php echo strip_tags(get_the_content()) ?></div>
               <section class="wrap-bakery-equipment">

                  <?php
                  if (count($arr_equipments_ids) > 0) {
                     foreach ($query_products as $equipment) {
                        get_template_part('template-parts/components/equipment_categories_card', null, [
                           'src' => get_permalink($equipment->get_id()),
                           'title' => rmbt_trim_excerpt(4, $equipment->get_name()),
                           'text' => rmbt_trim_excerpt(10, strip_tags($equipment->get_short_description())),
                           'id-img' => $equipment->get_image_id(),
                           'alt-img' =>  rmbt_trim_excerpt(4, $equipment->get_name()),
                        ]);
                     }
                  }
                  ?>

               </section>
            </div>
         </section>
      </div>
   </div>
</main>



<?php get_footer();
