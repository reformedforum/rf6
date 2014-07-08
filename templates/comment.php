<div class="comment-content">
	<div class="comment-author-avatar">
		<?php // <img src="images/placeholders/author-placeholder.jpg" alt="John Doe"  class="img-responsive"/> ?>
		<?php echo get_avatar($comment, $size = '64'); ?>
	</div>

	<div class="comment-details">
		<div class="comment-author-name">
			<span><?php echo get_comment_author_link(); ?></span>
			<span class="comment-date"><?php printf(__('%1$s', 'roots'), get_comment_date(),  get_comment_time()); ?></span>
			<!--<a class="comment-reply" href="?replytocom=<?php echo $comment->comment_ID; ?>#respond">(reply)</a>-->
			<span class="comment-reply">(<?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>)</span>
			<?php edit_comment_link(__('(Edit)', 'roots'), '', ''); ?>
		</div>
		<div class="comment-body">
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
				  <?php _e('Your comment is awaiting moderation.', 'roots'); ?>
				</div>
			<?php endif; ?>
			<?php comment_text(); ?>
		</div>
	</div>
</div>

