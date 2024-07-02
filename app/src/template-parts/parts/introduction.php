<?php $locale = explode('_', pll_current_language('locale'))[0]; ?>
<div class="wrapper-section">
   <div class="rmbt-full-width">
      <section class="rmbt-container rmbt-introduction">
         <div class="rmbt-introduction__row">
            <ul class="rmbt-introduction__articles-col">
               <div>
                  <?php get_template_part('template-parts/components/redux_title', 'section', ['title' => 'introduction_section-title_'. $locale]); ?>
                  <p>
                     <?php echo rmbt_get_redux_field('introduction_section-text_'. $locale) ?>
                  </p>
               </div>
               <?php get_template_part('template-parts/components/card', 'benefit', [
                  'title' => rmbt_get_redux_field('introduction_first_block-title_'. $locale),
                  'text' => rmbt_get_redux_field('introduction_first_block-text_'. $locale),
                  'id-img' => 'gear-introduction_1',
               ]); ?>
               <?php get_template_part('template-parts/components/card', 'benefit', [
                  'title' => rmbt_get_redux_field('introduction_second_block-title_'. $locale),
                  'text' => rmbt_get_redux_field('introduction_second_block-text_'. $locale),
                  'id-img' => 'bread-introduction_5',
               ]); ?>


            </ul>
            <figure class="rmbt-introduction__img-col wrap-img">
               <?php echo rmbt_redux_img('introduction_image', rmbt_get_redux_field('introduction_image_alt')) ?>
            </figure>
         </div>
      </section>
   </div>
</div>