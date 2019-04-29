<?php
/**
 * The footer for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package musepeach
 */

get_template_part( 'partials/signup', 'callout' );
?>

<footer class="footer">

	<nav class="footer__nav">
		<a href="/" class="footer__nav__logo">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo_gray.svg" alt="MusePeach">
		</a>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer',
				'menu_class'     => 'footer__nav__menu',
				'container'      => 'ul',
			)
		);
		?>
	</nav>

</footer>

<?php wp_footer(); ?>

</body>
</html>
