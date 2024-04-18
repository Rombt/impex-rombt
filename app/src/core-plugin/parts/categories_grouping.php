<?php

add_action('admin_menu', 'register_categories_group_submenu_page');

function register_categories_group_submenu_page()
{
   add_submenu_page(
      'edit.php?post_type=product',
      'Группировка категорий товаров',
      'Группировка категорий',
      'manage_options',
      'categories-group',
      'rmbt_categories_group',
      3
   );
}

// контент страницы
function rmbt_categories_group()
{
?>
   <div class="wrap">
      <h2><?= get_admin_page_title() ?></h2>

      //===================================================================

      <?php

      global $categories;
      $args = array(
         'taxonomy' => 'product_cat', // Указать таксономию "product_cat" для категорий товаров
         // 'hide_empty' => false, // Отображать категории, даже если в них нет товаров
      );
      $categories = get_categories($args);





      // $args = array(
      //    'taxonomy' => 'product_cat', // Указать таксономию "product_cat" для категорий товаров
      //    // 'hide_empty' => false, // Отображать категории, даже если в них нет товаров
      // );
      // $categories = get_categories($args);
      // wp_localize_script('rmbt-app', 'rmbt_categories_grouping', [
      //    'rmbtArrCategories' => $categories,
      // ]);

      // global $rmbt_impex_options;
      // $args = array(
      // // 'product_category_id' => array(2477, 2480),
      // 'product_category_id' => $rmbt_impex_options['equipment-categories-group_multi-text'],
      // );
      // $arr_products = wc_get_products($args);






      // echo '<pre> get_current_screen() = ';
      // print_r(get_current_screen());
      // echo "</pre>";




      // echo '<pre> $rmbt_impex_options["equipment-categories-group_multi-text"] = ';
      // print_r($rmbt_impex_options['equipment-categories-group_multi-text']);
      // echo "</pre>";

      // echo '<hr>';
      echo '<hr>';

      // echo '<pre> $categories_id = ';
      // print_r($arr_products);
      // echo "</pre>";

      // echo '<pre> $categories = ';
      // print_r($categories);
      // echo "</pre>";
      // echo '<hr>';
      // echo '<hr>';


      // echo '<pre>';
      // foreach ($categories as $category) {
      //    // echo '<a href="' . get_term_link($category) . '">' . $category->name . '</a>';
      //    echo '<br>' . $category->name . '---' . $category->cat_ID;
      // }
      // echo "</pre>";

      ?>





      //===================================================================
   </div>
<?php
}
