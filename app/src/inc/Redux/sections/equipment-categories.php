<?php

defined('ABSPATH') || exit;


// Front page sections start
Redux::set_section(
   $opt_name,
   array(
      'title' => esc_html__('Equipment Categories Page', 'rmbt_impex'),
      'id' => 'settings_equipment-categories-page',
      'desc' => esc_html__('Equipment categories page settings', 'rmbt_impex'),
      'customizer_width' => '450',
      // 'subsection' => true,
      // 'icon'             => 'el el-front',
      'fields' => array(


         array(
            'id' => 'equipCatPage-equipment-categories_page-title',
            'type' => 'text',
            'title' => esc_html__('Title of Equipment Categories Page', 'rmbt_impex'),
            'default' => esc_html__('Equipments', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-equipment-categories_page-text',
            'type' => 'textarea',
            'title' => esc_html__('Ovens Section Text', 'rmbt_impex'),
         ),



         /*------------------ the start ovens accordion ------------------*/
         array(
            'id' => 'ovens_start',
            'type' => 'accordion',
            'title' => esc_html__('Ovens Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'ovens\'',
            'position' => 'start',
         ),
         /*------------------  the start of ovens article block-----------------*/
         array(
            'id' => 'equipCatPage-ovens_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of ovens article', 'rmbt_impex'),
            'default' => esc_html__('ovens', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-ovens_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of ovens article', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-ovens_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of ovens article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-ovens_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image description of ovens article', 'rmbt_impex'),
            'default' => esc_html__('ovens', 'rmbt_impex'),
         ),
         /*------------------  the end of ovens article block -----------------*/
         array(
            'id' => 'ovens_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end ovens accordion ------------------*/


         /*------------------ the start dropping-machines accordion ------------------*/
         array(
            'id' => 'dropping-machines_start',
            'type' => 'accordion',
            'title' => esc_html__('Dropping Machines Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'ovens\'',
            'position' => 'start',
         ),
         /*------------------  the start of dropping-machines article block-----------------*/
         array(
            'id' => 'equipCatPage-dropping-machines_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Dropping Machines  Article', 'rmbt_impex'),
            'default' => esc_html__('Dropping Machines ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-dropping-machines_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Dropping Machines article', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-dropping-machines_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Dropping Machines article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-dropping-machines_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Dropping Machines  Article', 'rmbt_impex'),
            'default' => esc_html__('dropping machines image', 'rmbt_impex'),
         ),
         /*------------------  the end of dropping-machines article block -----------------*/
         array(
            'id' => 'dropping-machines_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end dropping-machines accordion ------------------*/


         /*------------------ the start enrobing-machine accordion ------------------*/
         array(
            'id' => 'enrobing-machine_start',
            'type' => 'accordion',
            'title' => esc_html__('Enrobing Machine Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Enrobing Machine\'',
            'position' => 'start',
         ),
         /*------------------  the start of enrobing-machine article block-----------------*/
         array(
            'id' => 'equipCatPage-enrobing-machine_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Enrobing Machine  Article', 'rmbt_impex'),
            'default' => esc_html__('Enrobing Machine ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-enrobing-machine_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Enrobing Machine', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-enrobing-machine_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Enrobing Machine article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-enrobing-machine_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Enrobing Machine  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of enrobing-machine article block -----------------*/
         array(
            'id' => 'enrobing-machine_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end enrobing-machine accordion ------------------*/


         /*------------------ the start electric-proofer accordion ------------------*/
         array(
            'id' => 'electric-proofer_start',
            'type' => 'accordion',
            'title' => esc_html__('Electric Proofer Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Electric Proofer\'',
            'position' => 'start',
         ),
         /*------------------  the start of electric-proofer article block-----------------*/
         array(
            'id' => 'equipCatPage-electric-proofer_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Electric Proofer  Article', 'rmbt_impex'),
            'default' => esc_html__('Electric Proofer ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-electric-proofer_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Electric Proofer', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-electric-proofer_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Electric Proofer article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-electric-proofer_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Electric Proofer  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of electric-proofer article block -----------------*/
         array(
            'id' => 'electric-proofer_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end electric-proofer accordion ------------------*/



         /*------------------ the start planetary-mixers accordion ------------------*/
         array(
            'id' => 'planetary-mixers_start',
            'type' => 'accordion',
            'title' => esc_html__('Planetary Mixers Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Planetary Mixers\'',
            'position' => 'start',
         ),
         /*------------------  the start of planetary-mixers article block-----------------*/
         array(
            'id' => 'equipCatPage-planetary-mixers_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Planetary Mixers  Article', 'rmbt_impex'),
            'default' => esc_html__('Planetary Mixers ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-planetary-mixers_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Planetary Mixers', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-planetary-mixers_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Planetary Mixers article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-planetary-mixers_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Planetary Mixers  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of planetary-mixers article block -----------------*/
         array(
            'id' => 'planetary-mixers_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end planetary-mixers accordion ------------------*/




         /*------------------ the start dough-dividers accordion ------------------*/
         array(
            'id' => 'dough-dividers_start',
            'type' => 'accordion',
            'title' => esc_html__('Dough Dividers Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Dough Dividers\'',
            'position' => 'start',
         ),
         /*------------------  the start of dough-dividers article block-----------------*/
         array(
            'id' => 'equipCatPage-dough-dividers_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Dough Dividers  Article', 'rmbt_impex'),
            'default' => esc_html__('Dough Dividers ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-dough-dividers_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Dough Dividers', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-dough-dividers_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Dough Dividers article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-dough-dividers_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Dough Dividers  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of dough-dividers article block -----------------*/
         array(
            'id' => 'dough-dividers_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end dough-dividers accordion ------------------*/




         /*------------------ the start dough-rounders accordion ------------------*/
         array(
            'id' => 'dough-rounders_start',
            'type' => 'accordion',
            'title' => esc_html__('Dough Rounders Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Dough Rounders\'',
            'position' => 'start',
         ),
         /*------------------  the start of dough-rounders article block-----------------*/
         array(
            'id' => 'equipCatPage-dough-rounders_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Dough Rounders  Article', 'rmbt_impex'),
            'default' => esc_html__('Dough Rounders ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-dough-rounders_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Dough Rounders', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-dough-rounders_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Dough Rounders article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-dough-rounders_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Dough Rounders  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of dough-rounders article block -----------------*/
         array(
            'id' => 'dough-rounders_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end dough-rounders accordion ------------------*/


         /*------------------ the start dough-mixers accordion ------------------*/
         array(
            'id' => 'dough-mixers_start',
            'type' => 'accordion',
            'title' => esc_html__('Dough Mixers Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Dough Mixers\'',
            'position' => 'start',
         ),
         /*------------------  the start of dough-mixers article block-----------------*/
         array(
            'id' => 'equipCatPage-dough-mixers_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Dough Mixers  Article', 'rmbt_impex'),
            'default' => esc_html__('Dough Mixers ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-dough-mixers_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Dough Mixers', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-dough-mixers_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Dough Mixers article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-dough-mixers_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Dough Mixers  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of dough-mixers article block -----------------*/
         array(
            'id' => 'dough-mixers_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end dough-mixers accordion ------------------*/


         /*------------------ the start moulding-machine accordion ------------------*/
         array(
            'id' => 'moulding-machine_start',
            'type' => 'accordion',
            'title' => esc_html__('Moulding Machine Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Moulding Machine\'',
            'position' => 'start',
         ),
         /*------------------  the start of moulding-machine article block-----------------*/
         array(
            'id' => 'equipCatPage-moulding-machine_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Moulding Machine  Article', 'rmbt_impex'),
            'default' => esc_html__('Moulding Machine ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-moulding-machine_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Moulding Machine', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-moulding-machine_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Moulding Machine article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-moulding-machine_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Moulding Machine  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of moulding-machine article block -----------------*/
         array(
            'id' => 'moulding-machine_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end moulding-machine accordion ------------------*/


         /*------------------ the start dough-sheeting-machines accordion ------------------*/
         array(
            'id' => 'dough-sheeting-machines_start',
            'type' => 'accordion',
            'title' => esc_html__('Dough Sheeting Machines Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Dough Sheeting Machines\'',
            'position' => 'start',
         ),
         /*------------------  the start of dough-sheeting-machines article block-----------------*/
         array(
            'id' => 'equipCatPage-dough-sheeting-machines_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Dough Sheeting Machines  Article', 'rmbt_impex'),
            'default' => esc_html__('Dough Sheeting Machines ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-dough-sheeting-machines_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Dough Sheeting Machines', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-dough-sheeting-machines_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Dough Sheeting Machines article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-dough-sheeting-machines_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Dough Sheeting Machines  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of dough-sheeting-machines article block -----------------*/
         array(
            'id' => 'dough-sheeting-machines_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end dough-sheeting-machines accordion ------------------*/


         /*------------------ the start confectionery-dispensers accordion ------------------*/
         array(
            'id' => 'confectionery-dispensers_start',
            'type' => 'accordion',
            'title' => esc_html__('Confectionery Dispensers Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Confectionery Dispensers\'',
            'position' => 'start',
         ),
         /*------------------  the start of confectionery-dispensers article block-----------------*/
         array(
            'id' => 'equipCatPage-confectionery-dispensers_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Confectionery Dispensers  Article', 'rmbt_impex'),
            'default' => esc_html__('Confectionery Dispensers ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-confectionery-dispensers_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Confectionery Dispensers', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-confectionery-dispensers_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Confectionery Dispensers article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-confectionery-dispensers_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Confectionery Dispensers  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of confectionery-dispensers article block -----------------*/
         array(
            'id' => 'confectionery-dispensers_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end confectionery-dispensers accordion ------------------*/


         /*------------------ the start slicing-machines accordion ------------------*/
         array(
            'id' => 'slicing-machines_start',
            'type' => 'accordion',
            'title' => esc_html__('Slicing Machines Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Slicing Machines\'',
            'position' => 'start',
         ),
         /*------------------  the start of slicing-machines article block-----------------*/
         array(
            'id' => 'equipCatPage-slicing-machines_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Slicing Machines  Article', 'rmbt_impex'),
            'default' => esc_html__('Slicing Machines ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-slicing-machines_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Slicing Machines', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-slicing-machines_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Slicing Machines article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-slicing-machines_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Slicing Machines  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of slicing-machines article block -----------------*/
         array(
            'id' => 'slicing-machines_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end slicing-machines accordion ------------------*/


         /*------------------ the start cooking-boilers accordion ------------------*/
         array(
            'id' => 'cooking-boilers_start',
            'type' => 'accordion',
            'title' => esc_html__('Cooking Boilers Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Cooking Boilers\'',
            'position' => 'start',
         ),
         /*------------------  the start of cooking-boilers article block-----------------*/
         array(
            'id' => 'equipCatPage-cooking-boilers_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Cooking Boilers  Article', 'rmbt_impex'),
            'default' => esc_html__('Cooking Boilers ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-cooking-boilers_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Cooking Boilers', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-cooking-boilers_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Cooking Boilers article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-cooking-boilers_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Cooking Boilers  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of cooking-boilers article block -----------------*/
         array(
            'id' => 'cooking-boilers_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end cooking-boilers accordion ------------------*/


         /*------------------ the start dispensers-water-mixers accordion ------------------*/
         array(
            'id' => 'dispensers-water-mixers_start',
            'type' => 'accordion',
            'title' => esc_html__('Dispensers Water Mixers Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Dispensers Water Mixers\'',
            'position' => 'start',
         ),
         /*------------------  the start of dispensers-water-mixers article block-----------------*/
         array(
            'id' => 'equipCatPage-dispensers-water-mixers_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Dispensers Water Mixers  Article', 'rmbt_impex'),
            'default' => esc_html__('Dispensers Water Mixers ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-dispensers-water-mixers_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Dispensers Water Mixers', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-dispensers-water-mixers_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Dispensers Water Mixers article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-dispensers-water-mixers_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Dispensers Water Mixers  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of dispensers-water-mixers article block -----------------*/
         array(
            'id' => 'dispensers-water-mixers_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end dispensers-water-mixers accordion ------------------*/


         /*------------------ the start packaging-equipment accordion ------------------*/
         array(
            'id' => 'packaging-equipment_start',
            'type' => 'accordion',
            'title' => esc_html__('Packaging Equipment Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Packaging Equipment\'',
            'position' => 'start',
         ),
         /*------------------  the start of packaging-equipment article block-----------------*/
         array(
            'id' => 'equipCatPage-packaging-equipment_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Packaging Equipment  Article', 'rmbt_impex'),
            'default' => esc_html__('Packaging Equipment ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-packaging-equipment_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Packaging Equipment', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-packaging-equipment_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Packaging Equipment article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-packaging-equipment_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Packaging Equipment  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of packaging-equipment article block -----------------*/
         array(
            'id' => 'packaging-equipment_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end packaging-equipment accordion ------------------*/


         /*------------------ the start spare-parts accordion ------------------*/
         array(
            'id' => 'spare-parts_start',
            'type' => 'accordion',
            'title' => esc_html__('Spare Parts Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Spare Parts\'',
            'position' => 'start',
         ),
         /*------------------  the start of spare-parts article block-----------------*/
         array(
            'id' => 'equipCatPage-spare-parts_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Spare Parts  Article', 'rmbt_impex'),
            'default' => esc_html__('Spare Parts ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-spare-parts_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Spare Parts', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-spare-parts_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Spare Parts article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-spare-parts_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Spare Parts  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of spare-parts article block -----------------*/
         array(
            'id' => 'spare-parts_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end spare-parts accordion ------------------*/


         /*------------------ the start supporting-equipment accordion ------------------*/
         array(
            'id' => 'supporting-equipment_start',
            'type' => 'accordion',
            'title' => esc_html__('Supporting Equipment Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Supporting Equipment\'',
            'position' => 'start',
         ),
         /*------------------  the start of supporting-equipment article block-----------------*/
         array(
            'id' => 'equipCatPage-supporting-equipment_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Supporting Equipment  Article', 'rmbt_impex'),
            'default' => esc_html__('Supporting Equipment ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-supporting-equipment_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Supporting Equipment', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-supporting-equipment_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Supporting Equipment article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-supporting-equipment_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Supporting Equipment  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of supporting-equipment article block -----------------*/
         array(
            'id' => 'supporting-equipment_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end supporting-equipment accordion ------------------*/


         /*------------------ the start pizza-production-equipment accordion ------------------*/
         array(
            'id' => 'pizza-production-equipment_start',
            'type' => 'accordion',
            'title' => esc_html__('Pizza Production Equipment Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Pizza Production Equipment\'',
            'position' => 'start',
         ),
         /*------------------  the start of pizza-production-equipment article block-----------------*/
         array(
            'id' => 'equipCatPage-pizza-production-equipment_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Pizza Production Equipment  Article', 'rmbt_impex'),
            'default' => esc_html__('Pizza Production Equipment ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-pizza-production-equipment_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Pizza Production Equipment', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-pizza-production-equipment_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Pizza Production Equipment article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-pizza-production-equipment_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Pizza Production Equipment  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of pizza-production-equipment article block -----------------*/
         array(
            'id' => 'pizza-production-equipment_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end pizza-production-equipment accordion ------------------*/


         /*------------------ the start reconditioned-equipment accordion ------------------*/
         array(
            'id' => 'reconditioned-equipment_start',
            'type' => 'accordion',
            'title' => esc_html__('Reconditioned Equipment Section', 'rmbt_impex'),
            'subtitle' => 'Add your content to the section \'Reconditioned Equipment\'',
            'position' => 'start',
         ),
         /*------------------  the start of reconditioned-equipment article block-----------------*/
         array(
            'id' => 'equipCatPage-reconditioned-equipment_article-title',
            'type' => 'text',
            'title' => esc_html__('Title of Reconditioned Equipment  Article', 'rmbt_impex'),
            'default' => esc_html__('Reconditioned Equipment ', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-reconditioned-equipment_article-text',
            'type' => 'textarea',
            'title' => esc_html__('Text of Reconditioned Equipment', 'rmbt_impex'),
         ),
         array(
            'id' => 'equipCatPage-reconditioned-equipment_article-img-id',
            'type' => 'media',
            'url' => true,
            'title' => esc_html__('Picture of Reconditioned Equipment article', 'rmbt_impex'),
            'compiler' => 'true',
            'preview_size' => 'full',
            'default' => array(
               'url' => '/assets/img/no-image.jpg'
            ),
         ),
         array(
            'id' => 'equipCatPage-reconditioned-equipment_article-img-alt',
            'type' => 'text',
            'title' => esc_html__('Image Description Of Reconditioned Equipment  Article', 'rmbt_impex'),
            'default' => esc_html__('enrobing machine image', 'rmbt_impex'),
         ),
         /*------------------  the end of reconditioned-equipment article block -----------------*/
         array(
            'id' => 'reconditioned-equipment_end',
            'type' => 'accordion',
            'position' => 'end'
         ),
         /*------------------ the end reconditioned-equipment accordion ------------------*/
      ),
   ),
);
