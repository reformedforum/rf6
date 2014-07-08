
<!-- Sidebar Block -->
<div class="sidebar-block">
	<div class="sidebar-content tags blog-search">
		<form action="<?php echo home_url('/'); ?>" method="get">
			<div class="input-group">
				<input type="text" name="s" class="form-control blog-search-input text-input" placeholder="Search..."/>
				<span class="input-group-addon">
					<button class="blog-search-button icon-search ">
					</button>
				</span>
			</div>
		</form>
	</div>
</div>
<!-- Sidebar Block -->

<!-- Sidebar Block -->
<div class="sidebar-block">
	<h3 class="h3-sidebar-title sidebar-title">
		Recent Posts
	</h3>

	<div class="sidebar-content">
		<ul class="posts-list">
			<?php query_posts(array('showposts'=>5, 'post_type'=>array('post'), 'post__not_in'=>$usedIds)); ?>
			<?php while (have_posts()) : the_post(); ?>	
			<li>
				<div class="posts-list-thumbnail">
					<a href="<?php the_permalink(); ?>">
						<?php rf_thumb('small', array('class'=>'img-responsive')); ?>
					</a>
				</div>
				<div class="posts-list-content">
					<a href="<?php the_permalink(); ?>" class="posts-list-title"><?php the_title(); ?></a>
					<span class="posts-list-meta">
						<?php the_time('F jS, Y'); ?>
					</span>
				</div>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>
<!-- Sidebar Block -->

<!-- Sidebar Block -->
<div class="sidebar-block">
	<h3 class="h3-sidebar-title sidebar-title">
		Recent Episodes
	</h3>

	<div class="sidebar-content">
		<ul class="posts-list">
			<?php query_posts(array('showposts'=>5, 'post_type'=>array('podcast'), 'post__not_in'=>$usedIds)); ?>
			<?php while (have_posts()) : the_post(); ?>	
			<li>
				<div class="posts-list-thumbnail">
					<a href="<?php the_permalink(); ?>">
						<?php rf_thumb('small', array('class'=>'img-responsive')); ?>
					</a>
				</div>
				<div class="posts-list-content">
					<a href="<?php the_permalink(); ?>" class="posts-list-title"><?php the_title(); ?></a>
					<span class="posts-list-meta">
						<?php the_time('F jS, Y'); ?>
					</span>
				</div>
			</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>
<!-- Sidebar Block -->

<?php dynamic_sidebar('sidebar-primary'); ?>