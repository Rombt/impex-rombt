<?php get_header(); ?>

<div class="wrapper-section">
   <div class="rmbt-full-width rmbt-single-page-full-width">
      <section class="rmbt-container rmbt-single-page">
         <?php get_template_part('template-parts/components/title', 'section', ['title' => get_the_title()]); ?>
         <div class="rmbt-single-page__row">
            <div class="rmbt-single-page__col">

               <?php the_post_thumbnail(); ?>
               <?php the_content(); ?>
               <div class="test-block">
                  <?php
                  var_dump(get_the_content());
                  ?>
               </div>




            </div>
         </div>
      </section>
   </div>
</div>

<?php get_footer();
