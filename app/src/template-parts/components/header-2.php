<?php
global $rmbt_impex_options;
if ( function_exists( 'pll_current_language' ) ) {
	$locale = explode( '_', pll_current_language( 'locale' ) )[0];
}
?>


<header>
   <div class="rmbt-full-width rmbt-top-row-bg">
      <div class="rmbt-container">
         <div class="rmbt-phones-for-mobile">
            <div class="rmbt-phones-for-mobile__body"></div>
         </div>
         <div class="rmbt-top-row">
            <div class="rmbt-sales-department-phones" data-da=".rmbt-phones-for-mobile__body, 680">
               <svg data-da=".rmbt-phones-for-mobile, 680">
                  <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_3">
                  </use>
               </svg>
               <span><?php esc_html_e( 'Відділ продажу', 'rmbt_impex' ) ?>:</span>
               <?php echo rmbt_redux_field_to_ul( 'rmbt-manager-1-phone', 'tel', '', ',' ); ?>
               <?php echo rmbt_redux_field_to_ul( 'rmbt-manager-2-phone' ); ?>
            </div>
            <div class="rmbt-service-department-phones" data-da=".rmbt-phones-for-mobile__body, 680">
               <svg>
                  <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_3">
                  </use>
               </svg>
               <div class="rmbt-spare-parts-department">
                  <span><?php esc_html_e( 'Відділ запасних частин', 'rmbt_impex' ) ?>:</span>
                  <?php echo rmbt_redux_field_to_ul( 'rmbt-manager-5-phone', 'tel', '', ',' ); ?>
               </div>
               <div class="rmbt-service-department">
                  <span><?php esc_html_e( 'Технічна підтримка', 'rmbt_impex' ) ?>:</span>
                  <?php echo rmbt_redux_field_to_ul( 'rmbt-manager-4-phone' ); ?>
               </div>
            </div>
            <?php get_template_part( 'template-parts/parts/searchform' ); ?>
         </div>
      </div>
   </div>
   <div class="rmbt-full-width rmbt-bottom-row-bg">
      <div class="rmbt-container">

         <div class="rmbt-bottom-row rmbt-bottom-row__logo">
            <?php if ( has_custom_logo() ) : ?>
            <?php the_custom_logo(); ?>
            <?php endif ?>

            <div class="site-title__title">
               <!-- <h1>ІмпексMаш</h1> -->
               <h1><?php echo esc_html__( 'ІмпексМаш', 'rmbt_impex' ) ?></h1>
               <p><?php echo rmbt_get_redux_field( 'front_page_title_' . $locale, 1 ) ?>
                  <?php echo rmbt_get_redux_field( 'front_page_subtitle_' . $locale ) ?>
               </p>
            </div>



         </div>


         <!-- <div class="rmbt-bottom-row rmbt-bottom-row__menu" data-da=".rmbt-top-row, 768"> -->
         <div class="rmbt-bottom-row rmbt-bottom-row__menu">
            <?php if ( has_nav_menu( 'header_nav' ) ) { ?>
            <div class="cont-horizont-menu">
               <?php wp_nav_menu(
							array(
								'theme_location' => 'header_nav',
								'container' => 'nav',
							)
						); ?>
            </div>
            <?php } ?>
         </div>


      </div>
   </div>

</header>