<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package musepeach
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

	<script>document.documentElement.classList.remove('no-js');</script>

	<?php wp_head(); ?>

	<link rel="icon" href="<?php get_template_directory_uri(); ?>/assets/favicons/mp-favicon_32x32.png" sizes="32x32">
	<link rel="icon" href="<?php get_template_directory_uri(); ?>/assets/favicons/mp-favicon_192x192.png" sizes="192x192">
	<link rel="apple-touch-icon-precomposed" href="<?php get_template_directory_uri(); ?>/assets/favicons/mp-favicon_180x180.png"><!-- 180x180 -->
	<meta name="msapplication-TileImage" content="<?php get_template_directory_uri(); ?>/assets/favicons/mp-favicon_270x270.png"><!-- 270x270 -->
	<link rel="apple-touch-icon" href="<?php get_template_directory_uri(); ?>/assets/favicons/mp-favicon_120x120.png" sizes="120x120">
	<link rel="apple-touch-icon" href="<?php get_template_directory_uri(); ?>/assets/favicons/mp-favicon_152x152.png" sizes="152x152">
	<link rel="apple-touch-icon" href="<?php get_template_directory_uri(); ?>/assets/favicons/mp-favicon_512x512.png" sizes="512x512">

	<!-- https://developer.yoast.com/safari-pinned-tab-icon-mask-icon/ -->
	<link rel="mask-icon" color="#e14919" href="<?php get_template_directory_uri(); ?>/assets/favicons/mp-favicon_black.svg">

	<?php include 'partials/analytics.php';      // phpcs:ignore ?>
	<?php include 'partials/facebook-pixel.php'; // phpcs:ignore ?>
</head>

<body>

	<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'musepeach' ); ?></a>

	<header class="header">

		<div class="header__inside">

			<a href="/" class="header__logo">
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.svg" alt="MusePeach">
			</a>

			<a href="#" class="hamburger" aria-label="Open menu" aria-controls="menu-primary" aria-expanded="false">
				<span></span>
			</a>

			<nav class="header__nav" aria-label="<?php esc_attr_e( 'Main menu', 'musepeach' ); ?>">

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class'     => 'header__nav__menu',
						'container'      => 'ul',
					)
				);
				?>

				<div class="header__nav__extras">
					<a href="https://app.musepeach.com/login" class="button button--halo">Sign in</a>
					<a href="https://app.musepeach.com/register" class="button">Try it free</a>
				</div>

			</nav>

		</div>

	</header>
