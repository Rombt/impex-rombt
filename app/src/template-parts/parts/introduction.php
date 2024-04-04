<div class="rmbt-full-width">
   <section class="rmbt-container rmbt-introduction">
      <div class="rmbt-introduction__row">
         <div class="rmbt-introduction__articles-col">
            <article>
               <h2><?php echo rmbt_get_redux_field('introduction_section-title') ?></h2>
               <p>
                  <svg>
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#emo-smile_1">
                     </use>
                  </svg>

                  <?php echo rmbt_get_redux_field('introduction_section-text') ?>
               </p>
            </article>
            <article>
               <h2><?php echo rmbt_get_redux_field('introduction_first_block-title') ?></h2>
               <p>
                  <svg>
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#group_1">
                     </use>
                  </svg>
                  <?php echo rmbt_get_redux_field('introduction_first_block-text') ?>
               </p>
            </article>
            <article>
               <h2><?php echo rmbt_get_redux_field('introduction_second_block-title') ?></h2>
               <p>
                  <svg>
                     <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#worker-cap_1">
                     </use>
                  </svg>

                  <?php echo rmbt_get_redux_field('introduction_second_block-text') ?>
               </p>
            </article>
         </div>
         <figure class="rmbt-introduction__img-col wrap-img">
            <?php rmbt_redux_img('introduction_image', rmbt_get_redux_field('introduction_image_alt')) ?>
         </figure>
      </div>
   </section>
</div>