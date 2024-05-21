<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php get_template_part('template-parts/components/debug-grid');
	?>

	<div class="rmbt-page-wrap">
		<header>
			<div class="rmbt-full-width rmbt-top-row-bg">
				<div class="rmbt-container">
					<div class="rmbt-top-row">
						<div class="rmbt-sales-department-phones">
							<svg>
								<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_3">
								</use>
							</svg>
							<span>Відділ продажу:</span>
							<?php echo rmbt_redux_field_to_ul('rmbt-manager-1-phone'); ?>,
							<?php echo rmbt_redux_field_to_ul('rmbt-manager-2-phone'); ?>
						</div>
						<div class="rmbt-service-department-phones">
							<svg>
								<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_3">
								</use>
							</svg>
							<div class="rmbt-spare-parts-department" data-da=".rmbt-service-department, 930">
								<span><?php echo rmbt_get_redux_field('rmbt-manager-5-name') ?>:</span>
								<?php echo rmbt_redux_field_to_ul('rmbt-manager-5-phone'); ?>,
							</div>
							<div class="rmbt-service-department">
								<span><?php echo rmbt_get_redux_field('rmbt-manager-4-name') ?>:</span>
								<?php echo rmbt_redux_field_to_ul('rmbt-manager-4-phone'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="rmbt-full-width rmbt-bottom-row-bg">
				<div class="rmbt-container">
					<div class="rmbt-bottom-row">
						<?php if (has_custom_logo()) : ?>
							<?php the_custom_logo(); ?>
						<?php endif ?>
						<?php if (has_nav_menu('header_nav')) { ?>
							<div class="cont-horizont-menu">
								<div class="menu-icon"><span></span></div>

							<?php wp_nav_menu(
								array(
									'theme_location' => 'header_nav',
									'container' => 'nav',
								)
							);
						} ?>
							</div>
					</div>
				</div>
			</div>
		</header>