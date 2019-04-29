<?php
/**
 * Template part for displaying a posts list.
 *
 * @package musepeach
 */

?>

<section class="posts-list">

	<div class="posts-list__inside">
		<?php
		$blog_tag = 'More from the blog';

		if ( is_front_page() ) {
			$blog_tag = 'From the blog';
		}
		?>

		<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="posts-list__more">
			<?php echo $blog_tag; // phpcs:ignore WordPress.Security.EscapeOutput ?>
		</a>

		<div class="posts-list__list">
		<?php
		// https://10up.github.io/Engineering-Best-Practices/php/#performance.
		$args = array(
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'posts_per_page'         => 4,
		);

		$recent_posts = new WP_Query( $args );

		$exclude = null;

		if ( is_single() ) {
			$exclude = $post->ID;
		}

		if ( $recent_posts->have_posts() ) :
			$runs = 0;

			while ( $recent_posts->have_posts() ) :
				$recent_posts->the_post();

				if ( $exclude && get_the_ID() === $exclude ) {
					continue; // Skip current post.
				}

				if ( $runs > 2 ) {
					continue; // Skip 4th if no current post.
				}

				$runs++;

				get_template_part( 'partials/content', 'excerpt' );

			endwhile;
		endif;

		wp_reset_postdata();
		?>
		</div>

	</div>

</section>
