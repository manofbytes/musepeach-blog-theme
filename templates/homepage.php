<?php
/**
 * Template Name: Homepage
 *
 * @package musepeach
 */

get_header();
?>

<main id="main">

	<header class="home-header">

		<div class="home-header__inside">

			<h1>The private online diary for writers and non-writers</h1>

			<p>MusePeach makes it easy to keep a journal in your own way at your own pace. From short messages akin to social media to full blown stories to guided journaling with templates, it’s all available with a few clicks.</p>

			<p>The best part, you can start for free in less than a minute.</p>

			<form action="https://app.musepeach.com/register" method="GET">
				<input type="email" name="e" placeholder="Your email" required>
				<button type="submit" class="button button--green">Create my free journal</button>
			</form>

		</div>

	</header>

	<section class="feature-block feature-block--homepage">
		<figure class="feature-block__image">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/homepage_01.png" alt="">
		</figure>
		<div class="feature-block__content">
			<h2>Add images to your stories and journals</h2>
			<p>Photos are part of everyday life so you can add them as journal covers, entry covers or simply in the entries.</p>
		</div>
	</section>

	<section class="feature-block feature-block--homepage">
		<figure class="feature-block__image">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/homepage_02.png" alt="">
		</figure>
		<div class="feature-block__content">
			<h2>Create templates to help inspire your writing</h2>
			<p>Need a bit of inspiration? No worry, just use a template with a few prompts for the occasion. You can use one of our own demo templates or add your own.</p>
		</div>
	</section>

	<section class="feature-block feature-block--homepage">
		<figure class="feature-block__image">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/homepage_03.png" alt="">
		</figure>
		<div class="feature-block__content">
			<h2>Set reminders to stay on track </h2>
			<p>Each journal has it’s own notifications and you can set the time and days at which you would like to receive them.</p>
		</div>
	</section>

	<section class="feature-block feature-block--homepage">
		<figure class="feature-block__image">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/homepage_04.png" alt="">
		</figure>
		<div class="feature-block__content">
			<h2>Glance over previous entries in a quick timeline</h2>
			<p>Enjoy a social media inspired timeline for a quick glance at previous entries. You get the most out of it if you keep multiple journals.</p>
		</div>
	</section>

	<section class="feature-block feature-block--homepage">
		<figure class="feature-block__image">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/homepage_05.png" alt="">
		</figure>
		<div class="feature-block__content">
			<h2>Separate venting from family memories with multiple journals <span class="badge">Pro feature</span></h2>
			<p>No need to mix up things, like feelings with your favorite recipes or keep multiple books at once. Simply create a new journal for the purpose you need.</p>
		</div>
	</section>

	<section class="feature-block feature-block--homepage">
		<a href="/features" class="posts-list__more">And more...</a>
	</section>

	<section class="homepage-pricing">
		<h2>Simple pricing</h2>

		<div class="homepage-pricing__comparison">

			<div>
				<h3>Free</h3>
				<p>A basic journal with unlimited entries. Perfect if you just need a place to write.</p>
				<a href="https://app.musepeach.com/register" class="button">Start for free</a>
			</div>

			<div>
				<h3>$3 / mo</h3>
				<p>More features and more space for photos. You also support the developers.</p>
				<a href="/pricing" class="button button--halo">Learn more</a>
			</div>

		</div>
	</section>

	<section class="about-journaling">
		<h2>New to journaling?</h2>
		<p>Here’s the skinny on why you might want to keep one</p>

		<div class="about-journaling__inside">

			<div>
				<h3>overcome emotional upsets</h3>
				<p>Writing about your feelings can help the brain overcome emotional upsets and leave you feeling happier, psychologists have found.</p>
				<span>-TheGuardian</span>
			</div>

			<div>
				<h3>achieve your goals</h3>
				<p>Track your personal patterns of behavior that help you achieve goals and respond effectively to challenges. You’re also able to see the patterns that get in the way of personal and professional growth.</p>
				<span>-Psychologies</span>
			</div>

			<div>
				<h3>change your life</h3>
				<p>William James once said, "If you can change your mind, you can change your life" — and journal-writing can help you do just that.</p>
				<span>-HuffPost</span>
			</div>

		</div>


		<div class="about-journaling__guide">
			<p>If you want to dive deeper into how a journal can help you check out our in-depth guide.</p>
			<a href="/how-to-journal" class="button">Check out our guide</a>
		</div>

	</section>



	<?php get_template_part( 'partials/posts', 'list' ); ?>

</main>

<?php
get_footer();
