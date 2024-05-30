<a href="#popup_1" class="rmbt-search-modal__trigger popup-link">
    <svg>
        <use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#search_1"></use>
    </svg>
</a>
<div id="popup_1" class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <div class="close-window"><span></span></div>
            <div class="popup__title">
                PopUp title
            </div>
            <div class="popup__text">
                <form class="rmbt-search-modal__form" role="search" method="get" action="<?php echo esc_url(site_url()); ?>">
                    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php esc_html_e('Type here...', 'rmbt_impex') ?>" />
                    <input type="submit" value="<?php esc_html_e('search', 'restaurant_site') ?>" />
                </form>
            </div>
        </div>
    </div>
</div>