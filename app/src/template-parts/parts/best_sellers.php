<div class="wrapper-section">
   <div class="rmbt-full-width">
      <section class="rmbt-container rmbt-best-sellers">
         <?php get_template_part('template-parts/components/section-title', null, ['title' => rmbt_get_redux_field('best-sellers_section-title')]); ?>
         <div class="rmbt-best-sellers__row">
            <div class="rmbt-best-sellers__col">
               <?php get_template_part('template-parts/components/card_equipment', null, [
                  'title' => 'best-sellers-goods-one_title',
                  'id-img' => 'best-sellers_image-one',
                  'alt-img' => 'best-sellers_image-one_alt',
               ]); ?>
               <?php get_template_part('template-parts/components/card_equipment', null, [
                  'title' => 'best-sellers-goods-two_title',
                  'id-img' => 'best-sellers_image-two',
                  'alt-img' => 'best-sellers_image-two_alt',
               ]); ?>
               <?php get_template_part('template-parts/components/card_equipment', null, [
                  'title' => 'best-sellers-goods-three_title',
                  'id-img' => 'best-sellers_image-three',
                  'alt-img' => 'best-sellers_image-three_alt',
               ]); ?>
            </div>
         </div>
      </section>
   </div>
</div>