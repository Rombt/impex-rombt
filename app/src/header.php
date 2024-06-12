<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-TPZ85JHZ');
	</script>
	<!-- End Google Tag Manager -->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php // get_template_part('template-parts/components/debug-grid');
	?>

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPZ85JHZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->



	<div class="rmbt-page-wrap">
		<header>
			<div class="rmbt-full-width rmbt-top-row-bg">
				<div class="rmbt-container">
					<div class="rmbt-phones-for-mobile">
						<div class="rmbt-phones-for-mobile__body"></div>
					</div>
					<div class="rmbt-top-row">
						<div class="rmbt-sales-department-phones" data-da=".rmbt-phones-for-mobile__body, 650">
							<svg data-da=".rmbt-phones-for-mobile, 650">
								<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_3">
								</use>
							</svg>
							<span>Відділ продажу:</span>
							<?php echo rmbt_redux_field_to_ul('rmbt-manager-1-phone', 'tel', '', ','); ?>
							<?php echo rmbt_redux_field_to_ul('rmbt-manager-2-phone'); ?>
						</div>
						<div class="rmbt-service-department-phones" data-da=".rmbt-phones-for-mobile__body, 650">
							<svg>
								<use xlink:href="<?php echo get_template_directory_uri() ?>/assets/img/icons/sprite.svg#phone_3">
								</use>
							</svg>
							<div class="rmbt-spare-parts-department">
								<span><?php echo rmbt_get_redux_field('rmbt-manager-5-name') ?>:</span>
								<?php echo rmbt_redux_field_to_ul('rmbt-manager-5-phone', 'tel', '', ','); ?>
							</div>
							<div class="rmbt-service-department">
								<span><?php echo rmbt_get_redux_field('rmbt-manager-4-name') ?>:</span>
								<?php echo rmbt_redux_field_to_ul('rmbt-manager-4-phone'); ?>
							</div>
						</div>
						<?php get_template_part('template-parts/parts/searchform'); ?>
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