<div class="wrapper-section">
   <div class="rmbt-full-width">
      <section class="rmbt-container rmbt-best-sellers">





         <?php get_template_part('template-parts/components/redux_title', 'section', ['title' => 'best-sellers_section-title']); ?>
         <div class="rmbt-best-sellers__row">
            <ul class="rmbt-best-sellers__col">
               <?php get_template_part('template-parts/components/card_equipment', null, [
                  'title' => 'best-sellers-goods-one_title',
                  'id-img' => 'best-sellers_image-one',
                  'alt-img' => 'best-sellers_image-one_alt',
                  'href' => 'best-sellers_href-one',
               ]); ?>
               <?php get_template_part('template-parts/components/card_equipment', null, [
                  'title' => 'best-sellers-goods-two_title',
                  'id-img' => 'best-sellers_image-two',
                  'alt-img' => 'best-sellers_image-two_alt',
                  'href' => 'best-sellers_href-two',
               ]); ?>
               <?php get_template_part('template-parts/components/card_equipment', null, [
                  'title' => 'best-sellers-goods-three_title',
                  'id-img' => 'best-sellers_image-three',
                  'alt-img' => 'best-sellers_image-three_alt',
                  'href' => 'best-sellers_href-three',
               ]); ?>
            </ul>
         </div>
      </section>
   </div>
</div>