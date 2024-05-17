      <section class="rmbt-search-block">
         <div class="rmbt-search-block__row">
            <div class="rmbt-search-block__col">

               <?php
               get_template_part('template-parts/components/card', 'search', [
                  'title' => rmbt_get_redux_field('search-card-1_title', 1),
                  'text' => rmbt_get_redux_field('search-card-1_text', 1),
                  'tag-img' => rmbt_redux_img('rmbt-search-card_img-id-1', 1),
                  'link_read_more_href' =>
                  rmbt_get_redux_field('search-card-1_link', 1),
               ]);
               get_template_part('template-parts/components/card', 'search', [
                  'title' => rmbt_get_redux_field('search-card-2_title', 1),
                  'text' => rmbt_get_redux_field('search-card-2_text', 1),
                  'tag-img' => rmbt_redux_img('rmbt-search-card_img-id-2', 1),
                  'link_read_more_href' =>
                  rmbt_get_redux_field('search-card-2_link', 1),
               ]);


               ?>

            </div>
         </div>
      </section>