<?php
/**
 * The template for displaying Comments
 */
?>
<section class="comments">
	<?php echo "This is comments.php"; ?>
	<?php if ( have_comments() ) : ?>
		<h3>Comments</h3>
		<ul class="commentlist list-unstyled">
			<?php wp_list_comments(); ?>
		</ul><!-- .commentlist -->
	<?php endif; // have_comments() ?>
	<?php comment_form(); ?>
</section><!-- #comments .comments-area -->
