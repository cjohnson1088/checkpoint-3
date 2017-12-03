<!-- sidebar -->

<aside class="sidebar" role="complementary">

	<?php get_template_part('partials/searchform'); ?>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>


	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

	<div class="video-widget-wrapper">
		<?php dynamic_sidebar('First Aside Widget'); ?>
	</div>

</aside>
<!-- /sidebar -->
