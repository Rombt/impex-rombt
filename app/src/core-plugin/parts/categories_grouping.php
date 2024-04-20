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
      <h1><?= get_admin_page_title() ?></h1>
      <button id="add_new_group" class="page-title-action">Add new group</button>
      <div class="rmbt-categories-grouping-wrap">


   </div>
<?php
}
