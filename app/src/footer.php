<footer>
   <div class="rmbt-full-width rmbt-full-width-footer">
      <section class="rmbt-container rmbt-footer">
         <h2><?php // echo rmbt_get_redux_field('') 
               ?></h2>
         <div class="rmbt-footer__row">
            <div class="rmbt-footer__about">
               <?php if (has_custom_logo()) : ?>
                  <?php the_custom_logo(); ?>
               <?php endif ?>
               <div class="text">
                  <h3>ІМПЕКСМАШ</h3>
                  <span>Український виробник хлібопекарського і кондитерського обладнання</span>
               </div>
               <?php get_template_part('template-parts/components/social_networks'); ?>

            </div>
            <div class="rmbt-footer__nav">
               <?php if (has_nav_menu('footer_nav')) { ?>
                  <div class="rmbt-cont-vertical-menu">
                     <div class="menu-icon"><span></span></div>
                  <?php wp_nav_menu(
                     array(
                        'theme_location' => 'footer_nav',
                        'container' => 'nav',
                     )
                  );
               } ?>
                  </div>
            </div>
            <div class="rmbt-footer__contacts">
               <div class="text">
                  <span><?php echo rmbt_get_redux_field('rmbt-address', 1) ?></span>
                  <?php echo rmbt_redux_field_to_ul('rmbt-manager-3-phone'); ?>
                  <?php echo rmbt_redux_field_to_ul('rmbt-manager-3-email', 'mailto'); ?>
               </div>

            </div>
         </div>
      </section>
      <div class="rmbt-copyright">Copyright © Виробничо-технологічний центр “Імпексмаш” 2005–2023</div>
   </div>
</footer>

</div> <!--  end rmbt-page-wrap  -->
<?php wp_footer(); ?>
</body>

</html>