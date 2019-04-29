<?php
/**
 * Template part for displaying pages.
 *
 * @package musepeach
 */

?>

<article class="entry">

	<header class="entry__header">

		<?php the_title( '<h1>', '</h1>' ); ?>

	</header>

	<section class="entry__content">

		<?php the_content(); ?>

	</section><!-- .entry__content -->

</article><!-- .article -->
