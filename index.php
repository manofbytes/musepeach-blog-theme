<?php
/**
 * The main template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package musepeach
 */

get_header(); ?>

<main id="main">

	<?php

	if ( have_posts() ) :

		/* Start the Loop. */
		while ( have_posts() ) :

			the_post();
			get_template_part( 'partials/content', get_post_type() );

		endwhile;

	else :

		get_template_part( 'partials/content', 'none' );

	endif;
	?>

</main><!-- #main -->

<?php
get_footer();
