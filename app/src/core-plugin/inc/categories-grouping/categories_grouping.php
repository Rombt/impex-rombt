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

   if (!did_action('wp_enqueue_media')) { wp_enqueue_media(); }
?>
   <div class="wrap">
      <h1><?= get_admin_page_title() ?></h1>
      <button id="add_new_group" class="page-title-action">Add new group</button>
      <div class="rmbt-categories-grouping-wrap">

         <!-- <button id="choose-image-button" class="rmbt-add-media">Выбрать картинку</button> -->
        <!-- <img id="selected-image" src="" width="200" height="200" style="display: none;"> -->

<!--         <script>
            jQuery(document).ready(function($) {
                $('#choose-image-button').click(function(event) {
                    event.preventDefault();

                    // Открыть медиабиблиотеку WordPress
                    var media_frame = wp.media({
                        title: 'Выберите картинку',
                        multiple: false,
                        library: {
                            type: 'image'
                        }
                    });

                    media_frame.on('select', function() {
                        var attachment = media_frame.state().get('selection').first().toJSON();
                        var imageUrl = attachment.url;

                        $('#selected-image').attr('src', imageUrl);
                        $('#selected-image').show();
                    });

                    media_frame.open();
                });
            });
        </script> -->

   </div>
<?php
}
