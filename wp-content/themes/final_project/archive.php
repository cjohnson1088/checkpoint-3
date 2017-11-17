<?php get_header(); ?>

<div class="blog-background-wrapper">
	<!-- MOBILE NAVIGATION -->
	<nav class="mobile-home-nav">
		<ul>
			<li><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/allure-main-logo.png"/></a></li>
			<?php html5blank_nav_left(); ?>
			<?php html5blank_nav_right(); ?>
		</ul>
	</nav>

	<!-- DESKTOP NAVIGATION -->
	<nav class="home-nav">
		<ul>
			<?php html5blank_nav_left(); ?>
			<li><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/dist/img/allure-main-logo.png"/></a></li>
			<?php html5blank_nav_right(); ?>
		</ul>
	</nav>

	<main role="main" class="cat-arc-main">
		<!-- section -->
		<section class="archives-post-section">

			<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>

			<article>

				<?php get_template_part('partials/loop'); ?>

				<?php get_template_part('partials/pagination'); ?>

			</article>

		</section>
		<!-- /section -->

		<?php get_sidebar(); ?>

			</main>

			<footer class=" sub-page-footer maroon-footer">

				<!-- LOCATION & HOURS -->
				<div class="padding centered">
					<p>646 S Frontenac St unit 101,
						Aurora, IL 60504</p>
					<p class="phone">PHONE: (630) 499-8260</p>
				</div>

				<div class="centered grid">
					<p>TUES - SAT</p><p class="bold">10AM to 7PM</p>
					<p>SUNDAY</p><p class="bold">12PM to 5PM</p>
					<p>MONDAY</p><p class="bold">CLOSED</p>
				</div>

				<p class="copywrite">ALLURE SALON & SPA &#169; <?= date('Y'); ?> | DESIGNED BY CAITLIN JOHNSON DESIGNS</p>

		</div>

<?php get_footer(); ?>
