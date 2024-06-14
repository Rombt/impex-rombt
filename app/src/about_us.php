<?php
/* Template Name: rmbt About us page */
?>

<?php get_header(); ?>
<main>

   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-contacts-full-width">
         <section class="rmbt-container rmbt-contacts text-content">
            <?php get_template_part('template-parts/components/title', 'page', ['title' => get_the_title()]);
            ?>
            <!-- <p><?php // echo rmbt_get_redux_field('rmbt-contacts_section-text') 
                     ?></p> -->
            <div class="rmbt-about-as__row">
               <div class="rmbt-contacts__col">

                  <?php the_content(); ?>


               </div>
            </div>
         </section>
      </div>
   </div>
</main>
<?php get_footer();
