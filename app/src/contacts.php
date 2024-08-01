<?php
/* Template Name: rmbt Contacts  page */
?>
<?php 
if ( function_exists('pll_current_language') ) {
   $locale = explode('_', pll_current_language('locale'))[0]; 
}


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
            <div class="rmbt-contacts__row">
               <div class="rmbt-contacts__col">
                  <ul class="rmbt-contacts__departments">
                     <div class="selling-department">
                        <!-- <h3>Відділ продажу:</h3> -->
                        <h3><?php echo rmbt_get_redux_field('rmbt-title-section-1_'. $locale);  ?> </h3>
                        <?php get_template_part('template-parts/components/card', 'contact', [
                           'name' => 'rmbt-manager-1-name_'. $locale,
                           'number' => 'rmbt-manager-1-phone',
                           'email' => 'rmbt-manager-1-email',
                           // 'id-img' => 'selling-department_8',
                           'id-img' => 'selling-department_5',
                        ]); ?>
                        <?php get_template_part('template-parts/components/card', 'contact', [
                           'name' => 'rmbt-manager-2-name_'. $locale,
                           'number' => 'rmbt-manager-2-phone',
                           'email' => 'rmbt-manager-2-email',
                           // 'id-img' => 'selling-department_8',
                           'id-img' => 'selling-department_5',
                        ]); ?>
                     </div>

                     <div class="service-department">
                        <!-- <h3>Відділ сервісного обслуговування:</h3> -->
                        <h3><?php echo rmbt_get_redux_field('rmbt-title-section-2_'. $locale);  ?> </h3>
                        <?php get_template_part('template-parts/components/card', 'contact', [
                           'name' => 'rmbt-manager-4-name_'. $locale,
                           'number' => 'rmbt-manager-4-phone',
                           'email' => 'rmbt-manager-4-email',
                           'id-img' => 'service-department_3',
                        ]); ?>
                        <?php get_template_part('template-parts/components/card', 'contact', [
                           'name' => 'rmbt-manager-5-name_'. $locale,
                           'number' => 'rmbt-manager-5-phone',
                           'email' => 'rmbt-manager-5-email',
                           'id-img' => 'service-department_4',
                        ]); ?>
                     </div>
                     <?php get_template_part('template-parts/components/card', 'contact', [
                        'name' => 'rmbt-manager-3-name_'. $locale,
                        'number' => 'rmbt-manager-3-phone',
                        'email' => 'rmbt-manager-3-email',
                        'id-img' => 'phone_2',
                     ]); ?>
                     <?php
                     //  get_template_part('template-parts/components/card', 'contact', [
                     //  'name' => 'rmbt-manager-6-name',
                     //  'number' => 'rmbt-manager-6-phone',
                     //  'email' => 'rmbt-manager-6-email',
                     //  'id-img' => 'phone_2',
                     //  ]); 
                     ?>
                  </ul>
               </div>
               <div class="rmbt-contacts__col">
                  <div id="contact-feedback-form" action="" method="POST">
                     <?php echo do_shortcode('[contact-form-7 id="912ba89" title="rmbt страница контактов"]') ?>
                  </div>
                  <div class="rmbt-contacts__post-address">
                     <?php echo rmbt_get_redux_field('rmbt-address_'. $locale, 1) ?>
                  </div>
               </div>
            </div>
            <div class="rmbt-contacts__row">
               <div class="rmbt-contacts__col rmbt-contacts-map">
                  <div class="rmbt-contacts__map"><?php the_content(); ?></div>
               </div>
            </div>
         </section>
      </div>
   </div>


</main>
<?php get_footer();