<?php get_header(); ?>


<?php if (rmbt_get_redux_field('button_href') === '' || rmbt_get_redux_field('button_href') === '#') {
   $contact_page_url = get_permalink('11702');
} else {
   $contact_page_url = rmbt_get_redux_field('button_href');
} ?>


<main>
   <div class="wrapper-section">
      <div class="rmbt-full-width rmbt-404-page-full-width">
         <section class="rmbt-container rmbt-404-page">
            <div class="rmbt-404-page__row">

               <div class="rmbt-404-page__col">
                  <h1 class="page-title rmbt-404-page__title">
                     404
                  </h1>
                  <div class="rmbt-404-page__text text-content">
                     <h3>Сторінка відсутня</h3>
                  </div>
                  <?php get_template_part('template-parts/components/button-link', null, ['href' => $contact_page_url, 'title' => 'зв`язатися з нами']); ?>
               </div>
            </div>
         </section>
      </div>
   </div>
</main>





<?php get_footer();