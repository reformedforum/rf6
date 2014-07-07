<!-- Date -->
<div class="blog-post-details-item blog-post-details-item-left icon-calendar" datetime="<?php echo get_the_time('c'); ?>">
	<?php the_time('F jS, Y'); ?>
</div>

<div class="blog-post-details-item blog-post-details-item-left icon-user">
	<?php echo __('By', 'roots'); ?> <?php the_author_posts_link(); ?>
</div>
<!-- //Author Name// -->


<!-- Tags -->
<div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags icon-files">
	<?php the_category(', '); //the_tags(); ?>
</div>
<!-- //Tags// -->

<!-- Comments -->
<div class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last icon-comment">
	<?php comments_popup_link('No Responses', '1 Response', '% Responses'); ?>
</div>
<!-- //Comments// -->
