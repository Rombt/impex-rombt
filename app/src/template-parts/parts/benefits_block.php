<?php $locale = explode('_', pll_current_language('locale'))[0]; ?>

<div class="wrapper-section">
   <div class="rmbt-full-width benefits-block-full-width">
      <div class="rmbt-benefits-bg-picture">

         <div class="wrap-img">
            <?php echo rmbt_redux_img('rmbt-benefits-bg-picture_img-id', 'rmbt-benefits-bg-picture_img-alt') ?>
         </div>

      </div>

      <section class="rmbt-container rmbt-benefits-block">
         <?php get_template_part('template-parts/components/redux_title', 'section', ['title' => 'rmbt-benefits-block_section-title_'. $locale]); ?>
         <div class="rmbt-benefits-block__row">
            <ul class="rmbt-benefits-block__col">
               <?php get_template_part('template-parts/components/card', 'benefit', [
                  'title' => rmbt_get_redux_field('rmbt-benefits-block_article-title-1_'. $locale),
                  'text' => rmbt_get_redux_field('rmbt-benefits-block_article-text-1_'. $locale),
                  'id-img' => 'badge2_1',
               ]); ?>
               <?php get_template_part('template-parts/components/card', 'benefit', [
                  'title' => rmbt_get_redux_field('rmbt-benefits-block_article-title-2_'. $locale),
                  'text' => rmbt_get_redux_field('rmbt-benefits-block_article-text-2_'. $locale),
                  'id-img' => 'badge2_1',
               ]); ?>
               <?php get_template_part('template-parts/components/card', 'benefit', [
                  'title' => rmbt_get_redux_field('rmbt-benefits-block_article-title-3_'. $locale),
                  'text' => rmbt_get_redux_field('rmbt-benefits-block_article-text-3_'. $locale),
                  'id-img' => 'badge2_1',
               ]); ?>
               <?php get_template_part('template-parts/components/card', 'benefit', [
                  'title' => rmbt_get_redux_field('rmbt-benefits-block_article-title-4_'. $locale),
                  'text' => rmbt_get_redux_field('rmbt-benefits-block_article-text-4_'. $locale),
                  'id-img' => 'badge2_1',
               ]); ?>
            </ul>
         </div>
      </section>
   </div>
</div>