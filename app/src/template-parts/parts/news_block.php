<div class="wrapper-section">
   <div class="rmbt-full-width rmbt-news-block-full-width">
      <section class="rmbt-container rmbt-news-block">
         <?php get_template_part('template-parts/components/redux_title', 'section', ['title' => 'rmbt-news-block_section-title']); ?>
         <div class="rmbt-news-block__row">
            <div class="rmbt-news-block__col">
               <?php
               $args = array(
                  'post_type' => 'post',
                  'numberposts' => 3,
                  'order' => 'DESC',
                  'orderby' => 'date'
               );

               $posts = get_posts($args);
               foreach ($posts as $post) { ?>
                  <article class="rmbt-news-block-article  rmbt-shadow">
                     <div class="rmbt-news-block-article__body">
                        <div class="wrap-img rmbt-news-block-article__img">
                           <?php if (has_post_thumbnail()) : ?>
                              <?php the_post_thumbnail(); ?>
                           <?php else :
                              rmbt_redux_img('rmbt-no-img', 'rmbt-no-img_alt');
                           endif ?>
                        </div>
                     </div>
                     <header>
                        <h3><?php echo rmbt_trim_excerpt(8, get_the_title()); ?></h3>
                     </header>
                     <?php get_template_part('template-parts/components/footer_card', null, ['href' => esc_url(get_permalink())]); ?>
                  </article>

               <?php } ?>
            </div>
         </div>
      </section>
   </div>
</div>