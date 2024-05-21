<div class="wrapper-section">
   <div class="rmbt-full-width">
      <section class="rmbt-container rmbt-introduction">
         <div class="rmbt-introduction__row">
            <ul class="rmbt-introduction__articles-col">
               <div>
                  <?php get_template_part('template-parts/components/redux_title', 'section', ['title' => 'introduction_section-title']); ?>
                  <p>
                     <?php echo rmbt_get_redux_field('introduction_section-text') ?>
                  </p>
               </div>
               <?php get_template_part('template-parts/components/card', 'benefit', [
                  'title' => rmbt_get_redux_field('introduction_first_block-title'),
                  'text' => rmbt_get_redux_field('introduction_first_block-text'),
                  'id-img' => 'worker-cap_1',
               ]); ?>
               <?php get_template_part('template-parts/components/card', 'benefit', [
                  'title' => rmbt_get_redux_field('introduction_first_block-title'),
                  'text' => rmbt_get_redux_field('introduction_first_block-text'),
                  'id-img' => 'worker-cap_1',
               ]); ?>


            </ul>
            <figure class="rmbt-introduction__img-col wrap-img">
               <?php echo rmbt_redux_img('introduction_image', rmbt_get_redux_field('introduction_image_alt')) ?>
            </figure>
         </div>
      </section>
   </div>
</div>