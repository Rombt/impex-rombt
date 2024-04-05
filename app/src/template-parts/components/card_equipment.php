<article class="card-equipment">
   <div class="card-equipment__body">
      <div class="wrap-img card-equipment__img">
         <?php rmbt_redux_img($args['id-img'], $args['alt-img']) ?>
      </div>

      <div class="card-equipment__title">
         <h3><?php echo rmbt_get_redux_field($args['title']) ?></h3>
      </div>
   </div>
   <footer>
      <a href="#">
         read more
         <svg>
            <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow-right_1">
            </use>
         </svg>
      </a>


   </footer>
</article>