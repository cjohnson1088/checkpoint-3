<div class="comments">

<!-- COMMENT FORM -->


<!-- DISPLAY LIST OF COMMENTS -->
<?php if (have_comments()) : ?>

	<h2><?php comments_number(); ?></h2>

	<ul>
		<?php wp_list_comments(array(
		    'avatar_size' => '140',
		    'type' => 'comment',
		    'callback' => 'ahha_comments'
		)); ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

<?php endif; ?>

<?php comment_form(); ?>

</div>
