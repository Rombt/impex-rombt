<?php get_header(); ?>

<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-equipment-categories-full-width">
         <section class="rmbt-container rmbt-equipment-categories">
            <?php get_template_part('template-parts/components/title', 'page', ['title' => $group->name]); ?>
            <div class="rmbt-equipment-categories__text"><?php echo $group->description ?></div>
            <div class="rmbt-equipment-categories__row">

               <?php

               echo '<pre> $post = ';
               print_r($post);
               echo "</pre>";



               // if (have_posts()) {
               //    while (have_posts()) :
               //       the_post();
               //       // the_content();


               //       get_template_part('template-parts/components/equipment_categories_card', null, [
               //          'src' => get_permalink($post->ID),
               //          'title' => rmbt_trim_excerpt(4, $post->name),
               //          // 'text' => rmbt_trim_excerpt(10, the_content()),
               //          'text' => '',
               //          'id-img' => get_post_thumbnail_id($post->ID),
               //          'alt-img' =>  rmbt_trim_excerpt(4, $post->post_title),
               //       ]);




               //    endwhile;
               // } else {
               //    //   get_template_part('partials/notfound');
               // }
               ?>

            </div>
         </section>
      </div>
   </div>
</main>



<?php get_footer();
