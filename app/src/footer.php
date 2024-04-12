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
               <!-- <h3>Контакти</h3> -->
               <div class="text">
                  <span><?php echo rmbt_get_redux_field('rmbt-address', 1) ?></span>
                  <a href="mailto:<?php echo rmbt_get_redux_field('rmbt-email-1') ?>"><?php echo rmbt_get_redux_field('rmbt-email-1') ?></a>
                  <a href="tel:<?php echo rmbt_phone_number_clear_redux('rmbt-number-phone-3'); ?>"><?php echo rmbt_get_redux_field('rmbt-number-phone-3') ?></a>
                  <a href="tel:<?php echo rmbt_phone_number_clear_redux('rmbt-number-phone-4'); ?>"><?php echo rmbt_get_redux_field('rmbt-number-phone-4') ?></a>
               </div>

            </div>
            <div class="rmbt-social-net-icons"></div>
         </div>
      </section>
      <div class="rmbt-copyright">Copyright © Виробничо-технологічний центр “Імпексмаш” 2005–2023</div>
</footer>




</div> <!--  end rmbt-page-wrap  -->
<?php wp_footer(); ?>
</body>

</html>