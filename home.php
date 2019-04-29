<?php
/**
 * The blog home template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package musepeach
 */

get_header(); ?>

<main id="main">

	<header class="blog-home-header">

		<div class="blog-home-header__inside">

			<span>Blog</span>

			<h1><?php echo esc_html( get_the_title( get_option( 'page_for_posts' ) ) ); ?></h1>

			<div class="posts-list__list">
				<?php
				// Will be stiky posts or most popular eventually.
				// https://10up.github.io/Engineering-Best-Practices/php/#performance .
				$args = array(
					'no_found_rows'          => true,
					'update_post_meta_cache' => false,
					'update_post_term_cache' => false,
					'posts_per_page'         => 2,
				);

				$recent_posts = new WP_Query( $args );

				if ( $recent_posts->have_posts() ) :
					while ( $recent_posts->have_posts() ) :

						$recent_posts->the_post();
						get_template_part( 'partials/content', 'excerpt' );

					endwhile;
				endif;

				wp_reset_postdata();
				?>
			</div>

		</div>

	</header>

	<section class="posts-list">
		<div class="posts-list__inside">
			<div class="posts-list__list posts-list__list--rows">

				<?php
				if ( have_posts() ) :

					/* Start the Loop. */
					while ( have_posts() ) :

						the_post();
						get_template_part( 'partials/content', 'excerpt' );

					endwhile;

				endif;
				?>

			</div>
		</div>
	</section>

</main>

<?php
get_footer();
