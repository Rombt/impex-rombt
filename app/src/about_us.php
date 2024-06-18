<?php
/* Template Name: rmbt About us page */
?>

<?php get_header(); ?>
<main>

   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-about-us-full-width">
         <section class="rmbt-container rmbt-about-us text-content">
            <?php get_template_part('template-parts/components/title', 'page', ['title' => get_the_title()]); ?>
            <div class="rmbt-about-as__row">
               <div class="rmbt-about-us__col">
                  <?php the_content(); ?>
               </div>
            </div>
         </section>
      </div>
   </div>
</main>
<?php get_footer();
