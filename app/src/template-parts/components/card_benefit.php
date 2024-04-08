<article class="rmbt-benefit__col">

   <header>
      <h3> <?php echo $args['title'] ?></h3>
   </header>
   <div class="rmbt-benefit__article-body">
      <div class="rmbt-benefit__article-text">
         <?php echo $args['text'] ?>
      </div>
   </div>
   <footer>
      <a href="#">
         read more
         <svg>
            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow-right_1"></use>
         </svg>
      </a>
   </footer>
</article>