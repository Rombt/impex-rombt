<li class="rmbt-benefit-article">
   <div class="wrap-img">
      <svg>
         <use xlink:href="<?php echo get_template_directory_uri() . '/assets/img/icons/sprite.svg#' . $args['id-img'] ?>"></use>
      </svg>
   </div>
   <div class="rmbt-benefit-article__wrap-content">
      <h3> <?php echo $args['title'] ?></h3>
      <div class="rmbt-benefit-article__body">
         <?php echo $args['text'] ?>
      </div>
   </div>
</li>