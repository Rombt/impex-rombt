<div class="wrapper-section">
   <div class="rmbt-full-width benefits-block-full-width">
      <div class="rmbt-benefits-bg-picture">

         <div class="wrap-img">
            <?php rmbt_redux_img('rmbt-benefits-bg-picture_img-id', 'rmbt-benefits-bg-picture_img-alt') ?>
         </div>

      </div>

      <section class="rmbt-container rmbt-benefits-block">
         <?php get_template_part('template-parts/components/section-title', null, ['title' => rmbt_get_redux_field('rmbt-benefits-block_section-title')]); ?>
         <div class="rmbt-benefits-block__row">
            <div class="rmbt-benefits-block__col">
               <?php get_template_part('template-parts/components/card_benefit', null, [
                  'title' => rmbt_get_redux_field('rmbt-benefits-block_article-title-1'),
                  'text' => rmbt_get_redux_field('rmbt-benefits-block_article-text-1'),
               ]); ?>
               <?php get_template_part('template-parts/components/card_benefit', null, [
                  'title' => rmbt_get_redux_field('rmbt-benefits-block_article-title-2'),
                  'text' => rmbt_get_redux_field('rmbt-benefits-block_article-text-2'),
               ]); ?>
               <?php get_template_part('template-parts/components/card_benefit', null, [
                  'title' => rmbt_get_redux_field('rmbt-benefits-block_article-title-3'),
                  'text' => rmbt_get_redux_field('rmbt-benefits-block_article-text-3'),
               ]); ?>
               <?php get_template_part('template-parts/components/card_benefit', null, [
                  'title' => rmbt_get_redux_field('rmbt-benefits-block_article-title-4'),
                  'text' => rmbt_get_redux_field('rmbt-benefits-block_article-text-4'),
               ]); ?>
            </div>
         </div>
      </section>
   </div>
</div>