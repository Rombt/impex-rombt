<?php
/* Template Name: rmbt Contacts  page */
?>

<?php get_header(); ?>
<main>


   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-contacts-full-width">
         <section class="rmbt-container rmbt-contacts text-content">
            <?php get_template_part('template-parts/components/title', 'page', ['title' => get_the_title()]);
            ?>
            <!-- <p><?php echo rmbt_get_redux_field('rmbt-contacts_section-text') ?></p> -->
            <div class="rmbt-contacts__row">
               <div class="rmbt-contacts__col">
                  <ul class="rmbt-contacts__departments">
                     <div class="selling-department">
                        <h3>Відділ продажу:</h3>
                        <?php get_template_part('template-parts/components/card', 'contact', [
                           'name' => 'rmbt-manager-1-name',
                           'number' => 'rmbt-manager-1-phone',
                           'email' => 'rmbt-manager-1-email',
                           // 'id-img' => 'selling-department_8',
                           'id-img' => 'selling-department_5',
                        ]); ?>
                        <?php get_template_part('template-parts/components/card', 'contact', [
                           'name' => 'rmbt-manager-2-name',
                           'number' => 'rmbt-manager-2-phone',
                           'email' => 'rmbt-manager-2-email',
                           // 'id-img' => 'selling-department_8',
                           'id-img' => 'selling-department_5',
                        ]); ?>
                     </div>

                     <div class="service-department">
                        <h3>Відділ сервісного обслуговування:</h3>
                        <?php get_template_part('template-parts/components/card', 'contact', [
                           'name' => 'rmbt-manager-4-name',
                           'number' => 'rmbt-manager-4-phone',
                           'email' => 'rmbt-manager-4-email',
                           'id-img' => 'service-department_3',
                        ]); ?>
                        <?php get_template_part('template-parts/components/card', 'contact', [
                           'name' => 'rmbt-manager-5-name',
                           'number' => 'rmbt-manager-5-phone',
                           'email' => 'rmbt-manager-5-email',
                           'id-img' => 'service-department_4',
                        ]); ?>
                     </div>
                     <?php get_template_part('template-parts/components/card', 'contact', [
                        'name' => 'rmbt-manager-3-name',
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
                  <form action="" class="rmbt-contacts__feedback-form">
                     <!-- <form action=""> -->
                     <div>
                        <p class="input-wrap">
                           <svg>
                              <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#name_1">
                              </use>
                           </svg>
                           <input type="text" name="name">
                        </p>
                        <p class="input-wrap">
                           <svg>
                              <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_1">
                              </use>
                           </svg>
                           <input type="tel" name="number">
                        </p>
                        <p class="input-wrap">
                           <svg>
                              <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#email_1">
                              </use>
                           </svg>
                           <input type="email" name="email">
                        </p>
                        <button type="submit" class="rmbt-impex-button">відправити</button>
                     </div>
                     <div>
                        <svg>
                           <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#chat-bubble_1">
                           </use>
                        </svg>
                        <textarea name="massage" class="contact-form-field"></textarea>
                     </div>
                     <!-- </form> -->
                  </form>
                  <div class="rmbt-contacts__post-address">
                     <?php echo rmbt_get_redux_field('rmbt-address', 1) ?>
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
