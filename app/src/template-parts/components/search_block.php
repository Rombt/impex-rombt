      <section class="rmbt-search-block">
         <div class="rmbt-search-block__row">
            <div class="rmbt-search-block__col">

               <?php
               get_template_part('template-parts/components/card', 'search', [
                  'title' => get_the_title(),
                  'text' => get_the_excerpt(),
                  'tag-img' => get_the_post_thumbnail(),
                  'link_read_more_href' => get_the_permalink(),
               ]);
               get_template_part('template-parts/components/card', 'search', [
                  'title' => get_the_title(),
                  'text' => get_the_excerpt(),
                  'tag-img' => get_the_post_thumbnail(),
                  'link_read_more_href' => get_the_permalink(),
               ]);

               ?>

            </div>
         </div>
      </section>