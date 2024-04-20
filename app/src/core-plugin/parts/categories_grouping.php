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
      <button class="page-title-action">Add new group</button>
      <div class="rmbt-categories-grouping-wrap">

<!--          <div class="wrap-groups-categories">
            <div class="wrap-group">
               <div class="body-group">
                  <div class="body-group__name">
                     <p>Enter group name</p>
                     <input id="group-name" type="text">
                  </div>
                  <div class="body-group__description">
                     <p>Inter description category</p>
                     <textarea id="group-description" ></textarea>
                  </div>

                  <button class="publish-group">publish this group</button>
               </div>
               <div class="gategories-field"></div>
            </div>
      </div> -->

   </div>
<?php
}
