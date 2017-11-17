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

	<main role="main" class="single-post-main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<div class="pink-divider"></div>

			<!-- post details -->
			<div class="post-details">
				<span class="date">
				<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
					<?php the_date(); ?> <?php the_time(); ?>
				</time>
				</span>
				<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
				<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
			</div>
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>

			<div class="post-cat-details">
				<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

				<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

				<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

				<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			</div>

			<div class="padding">
				<?php comments_template(); ?>
			</div>

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

		<?php get_sidebar(); ?>

	</section>
	<!-- /section -->

		</div>
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

<?php get_footer(); ?>
