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
	<?php // get_template_part('template-parts/components/debug-grid');
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
							<a href="tel:<?php echo rmbt_phone_number_clear_redux('rmbt-number-phone-1'); ?>"><?php echo rmbt_get_redux_field('rmbt-number-phone-1') ?>,</a>
							<a href="tel:<?php echo rmbt_phone_number_clear_redux('rmbt-number-phone-2'); ?>"><?php echo rmbt_get_redux_field('rmbt-number-phone-2') ?>,</a>
							<a href="tel:<?php echo rmbt_phone_number_clear_redux('rmbt-number-phone-3'); ?>"><?php echo rmbt_get_redux_field('rmbt-number-phone-3') ?></a>
						</div>
						<div class="rmbt-service-department-phones">
							<svg>
								<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_3">
								</use>
							</svg>
							<span>Технічна підтримка:</span>
							<a href="tel:<?php echo rmbt_phone_number_clear_redux('rmbt-number-phone-5'); ?>"><?php echo rmbt_get_redux_field('rmbt-number-phone-5') ?>,</a>
							<span>Відділ запчастин</span>
							<a href="tel:<?php echo rmbt_phone_number_clear_redux('rmbt-number-phone-6'); ?>"><?php echo rmbt_get_redux_field('rmbt-number-phone-6') ?></a>
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