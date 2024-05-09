<article class="rmbt-card-news-article rmbt-shadow">
   <header>
      <h3 class="section-title"> <?php echo $args['title'] ?></h3>
   </header>
   <div class="rmbt-card-news-article__body">
      <div class="wrap-img rmbt-card-news-article__img">
         <?php echo $args['tag-img'] ?>
      </div>
      <div class="rmbt-card-news-article__text">
         <?php echo $args['text'] ?>
      </div>
   </div>
   <footer>
      <a href="<?php echo $args['link_read_more_href'] ?>">
         read more
         <svg>
            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow-right_1"></use>
         </svg>
      </a>
   </footer>
</article>