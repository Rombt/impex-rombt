<?php

if (!in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
   exit;
}

function rmbt_wc_site_setup()
{
   add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'rmbt_wc_site_setup');

add_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);


function start_wrapper_section_single_product()
{
   echo  '<div class="wrapper-section">
            <div class="rmbt-full-width rmbt-equipment-categories-full-width">
               <section class="rmbt-container rmbt-equipment-categories">';
}
add_action('woocommerce_before_main_content', 'start_wrapper_section_single_product', 15);

function end_wrapper_section_single_product()
{
   echo '   </section>
         </div>
      </div>';
}
add_action('woocommerce_after_main_content hook', 'end_wrapper_section_single_product', 15);


add_action('woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 5);
