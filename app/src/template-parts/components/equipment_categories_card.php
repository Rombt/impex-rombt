<article class="rmbt-equipment-article">
   <div class="wrap-img rmbt-equipment-article__img">
      <?php rmbt_redux_img($args['id-img'], $args['alt-img']) ?>
   </div>
   <a href="#" class="rmbt-equipment-article__hidden-container">
      <header>
         <h3> <?php echo $args['title'] ?></h3>
      </header>
      <div class="rmbt-equipment-article__body">

         <div class="rmbt-equipment-article__text">
            <!-- <p> -->
            <?php echo $args['text'] ?>
            <!-- </p> -->
         </div>
      </div>
      <!-- <footer> -->
      <!-- <span>read more</span>
         <svg>
            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow-right_1"></use>
         </svg> -->
      <!-- </footer> -->
   </a>
</article>