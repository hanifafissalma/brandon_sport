<div class="comments" id="comments">
	<br/>
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'TokoWA' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h3><?php comments_number(); ?></h3>
	
	<ul>
		<?php wp_list_comments('type=comment&callback=TokoWAcomments'); // Custom callback in functions.php ?>
	</ul>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Komentar telah ditutup.', 'TokoWA' ); ?></p>

<?php endif; ?>

<?php comment_form(); ?>

</div>
