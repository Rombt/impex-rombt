One of my first serious projects, please don't judge it too harshly; today, I would do many things differently.

The project was based on: https://github.com/Rombt/gulp-assembly

- A design I found freely available on the internet
- A GULP build I developed:

In this project, I completed the following tasks:

- **Semantic HTML5 page markup**
  - Result: https://rombt.github.io/restaurant-site/
  - Details: https://github.com/Rombt/restaurant-site/tree/HTML-coding
- **JavaScript**: jQuery, Ajax, and Swiper.js for sliders.
- **Integration of the completed markup into WordPress**
  - Result: http://rombt.free.nf/
  - Details: https://github.com/Rombt/restaurant-site/tree/WordPress-template
- **Custom theme functionality in a core plugin**:
  - **Post Types**:
    - **Recipes**: This functionality is comprehensive enough to be a standalone plugin.
      - Custom fields (add_meta_box()) are organized into blocks: Ingredient, Nutrition, Food-Step.
      - Each block allows the site administrator to add or remove fields as needed (jQuery, Ajax).
      - Option to add recipe files for user downloads.
      - Example page: [Classic Tiramisu](http://rombt.free.nf/recipes/classic-tiramisu/)
    - **Food Menu Items**:
      - Custom fields (ACF):
        - Dish price
        - Display in "Food menu" section
        - Display in "Today Special" section
    - **Our Clients**
    - For each custom post type, the field values can be edited directly on the post page (Ajax, jQuery).
- **WooCommerce**: The theme is fully integrated with WooCommerce.
- **Redux**: The theme offers many options, including typography settings.
