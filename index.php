<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_format()); ?>
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
