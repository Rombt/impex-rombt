<li class="rmbt-benefit-article">
   <div class="wrap-img">
      <svg>
         <use xlink:href="<?php echo get_template_directory_uri() . '/assets/img/icons/sprite.svg#' . $args['id-img'] ?>"></use>
      </svg>
   </div>
   <div class="rmbt-benefit-article__wrap-content">
      <h3> <?php echo rmbt_get_redux_field($args['name']); ?></h3>
      <div class="rmbt-benefit-article__body">
         <p><?php echo rmbt_redux_field_to_ul($args['number']); ?></p>
         <p><?php echo rmbt_redux_field_to_ul($args['email'], 'mailto'); ?></p>
      </div>
   </div>
</li>