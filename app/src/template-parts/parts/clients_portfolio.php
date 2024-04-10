<?php
global $rmbt_impex_options;

if (isset($rmbt_impex_options['clients-portfolio_gallery'])) {
   $arr_clients_portfolio = explode(",", $rmbt_impex_options['clients-portfolio_gallery']);
}
?>

<div class="wrapper-section">
   <div class="rmbt-full-width rmbt-clients-portfolio-full-width">
      <section class="rmbt-container rmbt-clients-portfolio">
         <div class="rmbt-clients-portfolio__row">
            <article class="rmbt-clients-portfolio__col">

               <div class="rmbt-clients-portfolio-swiper swiper rmbt-full-width">
                  <div class="swiper-wrapper">
                     <?php if (!empty($arr_clients_portfolio[0])) :
                        foreach ($arr_clients_portfolio as $image_id) :
                           try {
                              $image_data = wp_get_attachment_image_src($image_id, 'rmbt_clients_logo_img');
                              $image_url = $image_data[0];
                           } catch (\Throwable $th) {
                           }
                     ?>
                           <div class="swiper-slide">
                              <div class="wrap-img rmbt-clients-portfolio-swiper__wrap-img">
                                 <img src=" <?php echo $image_url ?> " alt="">
                              </div>
                           </div>
                     <?php
                        endforeach;
                     endif;
                     ?>
                  </div>
                  <div class="rmbt-clients-portfolio-swiper__pagination"></div>
               </div>
            </article>
         </div>
      </section>
   </div>
</div>