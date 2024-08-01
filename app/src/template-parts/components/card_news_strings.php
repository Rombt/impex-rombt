<article class="rmbt-card-news-article-string rmbt-shadow">
   <div class="rmbt-card-news-article-string__body">
      <div class="wrap-img rmbt-card-news-article-string__img">
         <?php echo $args['tag-img'] ?>
      </div>
      <h3 class="section-title"> <?php echo $args['title'] ?></h3>
      <?php echo $args['text'] ?>
      <div class="card-footer">
         <a href="<?php echo $args['link_read_more_href'] ?>">
            <?php esc_html_e('докладніше','rmbt_impex') ?>
            <svg>
               <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow-right_1">
               </use>
            </svg>
         </a>
      </div>
   </div>
</article>