<div class="wrapper-section">
   <div class="rmbt-full-width">
      <section class="rmbt-container rmbt-why-choosing-us">
         <h2><?php echo rmbt_get_redux_field('rmbt-why-choosing-us_section-title') ?></h2>
         <p><?php echo rmbt_get_redux_field('rmbt-why-choosing-us_section-text') ?></p>
         <div class="rmbt-why-choosing-us__row">

            <?php get_template_part('template-parts/components/card_benefit', null, [
               'title' => rmbt_get_redux_field('rmbt-why-choosing-us_article-title-1'),
               'text' => rmbt_get_redux_field('rmbt-why-choosing-us_article-text-1'),
            ]); ?>

            <?php get_template_part('template-parts/components/card_benefit', null, [
               'title' => rmbt_get_redux_field('rmbt-why-choosing-us_article-title-2'),
               'text' => rmbt_get_redux_field('rmbt-why-choosing-us_article-text-2'),
            ]); ?>
            <?php get_template_part('template-parts/components/card_benefit', null, [
               'title' => rmbt_get_redux_field('rmbt-why-choosing-us_article-title-3'),
               'text' => rmbt_get_redux_field('rmbt-why-choosing-us_article-text-3'),
            ]); ?>
            <?php get_template_part('template-parts/components/card_benefit', null, [
               'title' => rmbt_get_redux_field('rmbt-why-choosing-us_article-title-4'),
               'text' => rmbt_get_redux_field('rmbt-why-choosing-us_article-text-4'),
            ]); ?>



         </div>
      </section>
   </div>
</div>