      <?php if ( function_exists('pll_current_language') ) {
         $locale = explode('_', pll_current_language('locale'))[0]; 
      }?>
      <div class="wrapper-section">
         <div class="rmbt-full-width rmbt-facts-block-full-width">
            <section class="rmbt-container rmbt-facts-block rmbt-shadow">
               <div class="rmbt-facts-block__row">
                  <article class="rmbt-facts-block__col">
                     <div class="rmbt-wrap-content">
                        <header>
                           <h3><?php echo rmbt_get_redux_field('rmbt-facts-block_article-title-1') ?></h3>
                        </header>
                        <div class="rmbt-facts-block__article-body">
                           <div class="rmbt-facts-block__article-text">
                              <?php echo rmbt_get_redux_field('rmbt-facts-block_article-text-1_'. $locale) ?>
                           </div>
                        </div>
                     </div>
                     <footer>
                        <svg>
                           <use
                              xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#partner_2">
                           </use>
                        </svg>
                     </footer>
                  </article>
                  <article class="rmbt-facts-block__col">
                     <div class="rmbt-wrap-content">
                        <header>
                           <h3><?php echo rmbt_get_redux_field('rmbt-facts-block_article-title-2') ?></h3>
                        </header>
                        <div class="rmbt-facts-block__article-body">
                           <div class="rmbt-facts-block__article-text">
                              <?php echo rmbt_get_redux_field('rmbt-facts-block_article-text-2_'. $locale) ?>
                           </div>
                        </div>
                     </div>
                     <footer>
                        <svg>
                           <use
                              xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#project_4">
                           </use>
                        </svg>
                     </footer>
                  </article>
                  <article class="rmbt-facts-block__col">
                     <div class="rmbt-wrap-content">
                        <header>
                           <h3><?php echo rmbt_get_redux_field('rmbt-facts-block_article-title-3') ?></h3>
                        </header>
                        <div class="rmbt-facts-block__article-body">
                           <div class="rmbt-facts-block__article-text">
                              <?php echo rmbt_get_redux_field('rmbt-facts-block_article-text-3_'. $locale) ?>
                           </div>
                        </div>
                     </div>
                     <footer>
                        <svg>
                           <use
                              xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#staff_1">
                           </use>
                        </svg>
                     </footer>
                  </article>
               </div>
            </section>
         </div>
      </div>