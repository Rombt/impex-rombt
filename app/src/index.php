<?php get_header(); ?>




<main class="wrapper-section">
   <div class="rmbt-full-width rmbt-blog-full-width">
      <section class="rmbt-container rmbt-blog">
         <h1>Blog</h1>
         <div class="rmbt-blog__row">
            <div class="rmbt-blog__col">
               <?php if (have_posts()) {
                  while (have_posts()) :
                     the_post();
                     the_content();
                  // get_template_part('template-parts/parts/article_blog');
                  endwhile;
               } else {
                  //   get_template_part('partials/notfound');
               }
               ?>
            </div>
         </div>
      </section>
   </div>
</main>





<?php get_template_part('template-parts/components/pagination'); ?>




<?php get_footer();
