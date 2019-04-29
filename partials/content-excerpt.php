<?php
/**
 * Template part for a post excerpt for posts lists.
 *
 * @package musepeach
 */

?>

<div class="excerpt">

	<a href="<?php the_permalink(); ?>">
		<figure class="excerpt__thumbnail">
			<?php the_post_thumbnail( 'medium' ); ?>
		</figure>

		<?php the_title( '<span class="excerpt__title">', '</span>' ); ?>
	</a>

</div>
