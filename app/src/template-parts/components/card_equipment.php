<li class="card-equipment rmbt-shadow">
   <div class="card-equipment__body">
      <div class="wrap-img card-equipment__img">
         <?php rmbt_redux_img($args['id-img'], $args['alt-img']) ?>
      </div>

      <div class="card-equipment__title">
         <h3><?php echo rmbt_get_redux_field($args['title']) ?></h3>
      </div>
   </div>
   <?php get_template_part('template-parts/components/footer_card', null, ['href' => rmbt_redux_get_url($args['href'])]); ?>

</li>