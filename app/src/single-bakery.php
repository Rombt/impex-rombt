<?php get_header(); ?>

<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-single-bakery-full-width">
         <section class="rmbt-container rmbt-single-bakery">
            <?php get_template_part('template-parts/components/title', 'page', ['title' => $post->post_title]); ?>
            <div class="rmbt-single-bakery__row">
               <div class="wrap-img rmbt-technology-card">
                  <img src="#" alt="technology card">
               </div>
               <div class="rmbt-single-bakery__text"><?php echo strip_tags(get_the_content()) ?></div>
               <section class="wrap-bakery-equipment">

                  <?php
                  // перебор массива оборудования
                  get_template_part('template-parts/components/equipment_categories_card', null, [
                     'src' => get_permalink($post->ID),
                     'title' => rmbt_trim_excerpt(4, $post->post_title),
                     'text' => rmbt_trim_excerpt(10, strip_tags(get_the_content())),
                     'id-img' => get_post_thumbnail_id($post->ID),
                     'alt-img' =>  rmbt_trim_excerpt(4, $post->post_title),
                  ]);


                  ?>

               </section>
            </div>
         </section>
      </div>
   </div>
</main>



<?php get_footer();
