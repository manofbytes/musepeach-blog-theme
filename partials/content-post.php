<?php
/**
 * Template part for displaying posts.
 *
 * @package musepeach
 */

?>

<article class="entry entry--post">

	<header class="entry__header">

		<?php
		if ( function_exists( 'yoast_breadcrumb' ) ) {
			yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
		}
		?>

		<?php the_title( '<h1>', '</h1>' ); ?>

		<figure class="entry__thumbnail">
			<?php the_post_thumbnail( 'large', array( 'class' => 'skip-lazy' ) ); ?>
		</figure>

	</header>

	<section class="entry__content">

		<?php the_content(); ?>

		<script async data-uid="956c91c439" src="https://f.convertkit.com/956c91c439/8bf4c540e6.js"></script><?php // phpcs:ignore ?>

	</section><!-- .entry__content -->

</article><!-- .article -->

<?php
get_template_part( 'partials/posts', 'list' );
