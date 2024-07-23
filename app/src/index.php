<?php get_header(); ?>
<?php $locale = explode('_', pll_current_language('locale'))[0]; ?>


<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-blog-full-width">
         <section class="rmbt-container rmbt-blog">
            <div class="rmbt-blog__row">


               <div class="rmbt-blog__col">
                  <!-- <header class="page-header "> -->

                  <h1 class="page-title">
                     <?php if (is_search()) {
                        printf(esc_html__('Результати пошуку для: %s', 'rmbt_impex'), '<span>' . get_search_query() . '</span>');
                     } else if (is_home() || is_page(['blog', 'Blog'])) {
                        // echo "Новини нашої компанії";
                        echo rmbt_get_redux_field('rmbt-news-block_section-title_'. $locale); 
                     } else if (is_archive()) {
                        the_archive_title();
                        the_archive_description();
                     } ?>
                  </h1>
                  <!-- </header> -->
                  <?php
                  if (have_posts()) {
                     while (have_posts()) :
                        the_post();

                        get_template_part('template-parts/components/card_news_strings', null, [
                           'title' => get_the_title(),
                           'text' => get_the_excerpt(),
                           'tag-img' => get_the_post_thumbnail(),
                           'link_read_more_href' => get_the_permalink(),
                        ]);

                     endwhile;
                  } else {
                     //   get_template_part('partials/notfound');
                  }
                  ?>
               </div>
            </div>
         </section>
      </div>
   </div>
</main>


<?php get_template_part('template-parts/components/pagination'); ?>



<?php get_footer();