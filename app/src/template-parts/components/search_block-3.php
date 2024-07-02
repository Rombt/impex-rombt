      <?php $locale = explode('_', pll_current_language('locale'))[0]; ?>
      <section class="rmbt-search-block-3">
         <div class="rmbt-search-block-3__row">
            <div class="rmbt-search-block-3__col">

               <?php
               get_template_part('template-parts/components/card', 'search_3', [
                  'title' => rmbt_get_redux_field('search-card-1_title_'. $locale, 1),
                  'text' => rmbt_get_redux_field('search-card-1_text_'. $locale, 1),
                  'tag-img' => rmbt_redux_img('rmbt-search-card_img-id-1', 1),
                  'link_read_more_href' =>
                  rmbt_get_redux_field('search-card-1_link', 1),
               ]);
               get_template_part('template-parts/components/card', 'search_3', [
                  'title' => rmbt_get_redux_field('search-card-2_title_'. $locale, 1),
                  'text' => rmbt_get_redux_field('search-card-2_text_'. $locale, 1),
                  'tag-img' => rmbt_redux_img('rmbt-search-card_img-id-2', 1),
                  'link_read_more_href' =>
                  rmbt_get_redux_field('search-card-2_link', 1),
               ]);


               ?>

            </div>
         </div>
      </section>