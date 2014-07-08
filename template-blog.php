<?php
/*
Template Name: Blog
*/
?>

<?php query_posts(array('showposts'=>10, 'post_type'=>array('post'))); ?>
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/content'); ?>
<?php endwhile; ?>

<?php if ($wp_query->max_num_pages > 1) : ?>
<!-- Pagination -->
<div class="pagination-container">
	<ul class="pagination">
		<li><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
		<li><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
	</ul>
</div>    <!-- Pagination Ends -->
<?php endif; ?>
