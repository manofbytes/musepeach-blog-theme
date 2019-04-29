<?php
/**
 * Template Name: Pricing
 *
 * @package musepeach
 */

get_header();
?>

<main id="main">

	<header class="pricing-header">

		<div class="pricing-header__inside">


			<h1><?php the_title(); ?></h1>

			<p>Get all the features available and help support the development and maintenance of the app</p>

		</div>

	</header>

	<section class="price-table">

		<div class="price-table__option">
			<div class="price-table__option__inside">
				<h2>$3 / mo*</h2>
				<ul>
					<li>Unlimited journals</li>
					<li>Unlimited custom templates</li>
					<li>5 GB media storage</li>
					<li>Goals</li>
					<li>Email reminders</li>
					<li>Export entries</li>
					<li>Search</li>
					<li>Mark favorites</li>
					<li>Auto-save</li>
					<li>Priority support</li>
					<span>* paid annually</span>
				</ul>
			</div>
		</div>

		<div class="price-table__option">
			<div class="price-table__option__inside">
				<h2>Free</h2>
				<ul>
					<li>1 journal</li>
					<li>1 custom template</li>
					<li>50 MB media storage</li>
					<li>Goals</li>
					<li>Email reminders</li>
					<li>Export entries</li>
				</ul>
			</div>
		</div>

	</section>

	<section class="price-guarantee">
		<p>30-Day Money-Back Guarantee</p>
		<p>You can try the premium option without any risk and if it doesn't work for you, we'll fully refund you.</p>
	</section>

</main>

<?php
get_footer();
