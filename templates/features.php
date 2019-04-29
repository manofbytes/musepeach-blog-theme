<?php
/**
 * Template Name: Features
 *
 * @package musepeach
 */

get_header();
?>

<main id="main">

	<header class="features-header">

		<div class="features-header__inside">

			<span>Features</span>
			<h1><?php the_title(); ?></h1>

		</div>

	</header>

	<section class="feature-block">
		<figure class="feature-block__image">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/feature_editor.gif" alt="">
		</figure>
		<div class="feature-block__content">
			<h2>Add a quick update or write more deeply </h2>
			<p>If you just need to jot down an idea or vent a little you can simply use the quick editor and do just that. If you prefer to write more deeply, add some photos, lists and other formatting options just open the regular editor and go at it.</p>
		</div>
	</section>

	<section class="feature-block">
		<figure class="feature-block__image">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/feature_templates.gif" alt="">
		</figure>
		<div class="feature-block__content">
			<h2>Use templates to make writing easier</h2>
			<p>Need a bit of inspiration? No worry, just use a template with a few prompts for the occasion. You can use one of our own demo templates or add your own if you find any interesting stuff somewhere else.</p>
		</div>
	</section>

	<section class="feature-pro">

		<div class="feature-pro__inside">
			<h2>Separate journals for separate things <span class="badge">Pro feature</span></h2>
			<p>No need to mix up things, like feelings with your favorite recipes or keep multiple books at once. Simply create a new journal for the purpose you need.</p>

			<div class="feature-pro__grid">
				<div>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/heart.svg" alt="">
					<span>Gratitude</span>
				</div>
				<div>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/tree.svg" alt="">
					<span>Travel</span>
				</div>
				<div>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/wrench.svg" alt="">
					<span>Work</span>
				</div>
				<div>
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/food.svg" alt="">
					<span>Recipes</span>
				</div>
			</div>

			<p>...or however else you want to organize</p>
		</div>

	</section>

	<section class="feature-block">
		<figure class="feature-block__image">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/feature_reminders.gif" alt="">
		</figure>
		<div class="feature-block__content">
			<h2>Set reminders to keep yourself on track</h2>
			<p>Each journal has it’s own notification and you can set the time and days at which you would like to receive the notifications.</p>
		</div>
	</section>

	<section class="feature-block">
		<figure class="feature-block__image">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/feature_goals.gif" alt="">
		</figure>
		<div class="feature-block__content">
			<h2>Set goals and break them down into tasks</h2>
			<p>For many, journaling is part of growing and achieving new goals so in MusePeach you can set goals and then further break them down with checklist items and the rest of the regular editor.</p>
		</div>
	</section>

	<section class="features-row">

		<div class="features-row__block">
			<h2>Easy access to your favorites</h2>
			<p>If you want to have easy access to particular entries just add them to the favorites list and easily come back to them after months or years of entries.</p>
		</div>

		<div class="features-row__block">
			<h2>Find old entries with a simple search</h2>
			<p>Remember something vague about a particular entry you don’t really know where it is? Cool, add that to the search function and let it do it’s magic.</p>
		</div>

		<div class="features-row__block">
			<h2>Export entries as PDF</h2>
			<p>If you want to export your entries you can do so in the form of PDF. We might be expanding on this feature to allow for other formats to be exported.</p>
		</div>

	</section>

</main>

<?php
get_footer();
