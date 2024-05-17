<div class="card-search rmbt-shadow">
   <div class="card-search__img">
      <div class="wrap-img">
         <?php echo $args['tag-img'] ?>
      </div>
   </div>
   <div class="card-search__body">
      <h3><?php echo esc_html__($args['title'], 'rmbt_impex') ?></h3>
      <div class="card-search__read-more">
         <a href="<?php echo $args['link_read_more_href'] ?>">
            <p class="text-content"><?php echo $args['text'] ?></p>
            <svg>
               <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#arrow-right_1">
               </use>
            </svg>
         </a>
      </div>
   </div>
</div>