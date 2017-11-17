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

    <div class="homepage-heading-wrapper animated slideInLeft">
      <h1 id="homepage-heading"><span class="homepage-heading_our">OUR</span> <span class="special-heading">Blog</span></h1>
    </div>

    <!-- SOCIAL MEDIA LINKS -->
    <div class="social-media-wrapper left">
      <div class="social-media">
        <a href="http://www.facebook.com"><svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg></a>
        <a href="http://www.instagram.com"><svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg></a>
        <a href="http://www.twitter.com"><svg class="icon icon-twitter"><use xlink:href="#icon-twitter"></use></svg></a>
      </div>
    </div>

		<!-- CONTENT -->
		<main id="blog-main">

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) :
				the_post(); ?>


			      <div class="blog-entry-wrapper">
			        <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			        <div class="pink-divider"></div>
			        <?php the_content(); ?>
			        <div class="entry-data">
			          <?php echo get_the_date(); ?> | <?php comments_popup_link(); ?> | <a href="#">Share »</a>
			        </div>
			      </div>


			<?php endwhile; ?>
		<?php else: ?>
			<em>No Posts Found</em>
		<?php endif; ?>

		<?php get_sidebar(); ?>

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
	</main>

<?php get_footer(); ?>
