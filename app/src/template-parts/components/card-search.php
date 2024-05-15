<div class="card-search rmbt-shadow">
   <div class="card-search__img">
      <div class="wrap-img">
         <?php rmbt_redux_img('rmbt-_img-id-card-search', 'rmbt-_img-alt-card-search') ?>
      </div>
   </div>
   <div class="card-search__body">
      <h3><?php echo rmbt_get_redux_field('card-search_title', 1) ?></h3>
      <div class="card-search__read-more">
         <a href="#">
            <p class="text-content"><?php _e('дивитися', 'rmbt_impex') ?></p>
            <svg>
               <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow-right_1">
               </use>
            </svg>
         </a>
      </div>
   </div>
</div>