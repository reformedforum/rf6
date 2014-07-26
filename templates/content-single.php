<?php while (have_posts()) : the_post(); ?>

<!-- Blog Post -->
<div class="blog-post" <?php // post_class(); ?>>

	<?php get_template_part('templates/elements/icon'); ?>

	<div class="blog-span">
		<?php 
			$wide = rf_thumb_wide_check(); 
			$size = 'full';
			$class = '';
		?>
		<div class="blog-post-featured-img<?php if ( $wide ) { ?> img-overlay<?php } else { ?>-sm<?php } ?>">
			<?php 
				if ($wide) { $class = 'img-responsive'; $size = 'content'; }
				rf_thumb($size, array('class'=>$class)); 
			?>
			<?php if ( has_post_thumbnail() ) {
				//the_post_thumbnail('content', array('class'=>'img-responsive'));
				//the_post_thumbnail('thumbnail', array('class'=>'img-responsive'));
			} ?>
			
			<?php if ($wide) { ?>
			<div class="item-img-overlay">
		
				<?php /* if ( has_post_thumbnail() )  { // This is that plus sign overlay thing.
					$post_thumbnail_id = get_post_thumbnail_id();
					$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
					<img src="<?php echo $post_thumbnail_url; ?>" alt="" class="portfolio-zoom fa fa-plus" data-rel="prettyPhoto[portfolio]" height="auto" width="100%"/>
				<?php } */ ?>
										
				<div class="item_img_overlay_content">
					<div class="blog-post-details-item blog-post-details-item-left share-article">
						<span>Share It On</span>
						<a href="#" class="icon-facebook"></a>
						<a href="#" class="icon-twitter-alt"></a>
						<a href="#" class="icon-google"></a>
						<a href="#" class="icon-email-mail-streamline"></a>
					</div>                        
					<div class="blog-post-details-item blog-post-details-item-right share-article">
						<a href="#" class="icon-heart">25</a>
					</div>                        
				</div>
			</div>
			<?php } ?>
		</div>
		<?php if ($wide) { ?>
		<h2>
			<?php the_title(); ?>
		</h2>
		<?php } ?>

		<div class="blog-post-body">
			<?php if ( get_post_type($post->ID) == 'podcast' ) { ?>
				<?php rfmedia_player(); ?>
				<div class="rfmedia"><?php rfmedia_duration(); ?>&middot;</div>
				<div class="rfmedia"><?php rfmedia_links() ?></div>
			<?php } ?>
		
			<?php the_content(); ?>  
			                                          
		</div>

		<div class="blog-post-details">
			<?php get_template_part('templates/entry-meta'); ?>
		</div>
	
		<?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>

	</div>

</div>
<!-- //Blog Post// -->

<?php if ( get_post_type($post->ID) == 'podcast' ) { ?>
	<div class="title-block clearfix">
		<h3 class="h3-body-title">About the Program</h3>
		<div class="title-seperator"></div>
	</div>            
	<div class="about-the-author">
		<div class="blog-span-bottom">
			<div class="the-author-bio">
				<div class="the-author-thumbnail">
					<img src="<?php roots_skin_directory(); ?>/images/placeholders/author-placeholder.jpg" alt="John Doe"  class="img-responsive"/>
				</div>

				<div class="the-author-small-bio">
					<div class="the-author-name">
						Program name
					</div>
					<p>
						Program description 
						<a href="">Browse</a> more episodes.           
					</p>
				</div>
			</div>
		</div>
	</div>
<?php } else { ?>
	<!-- About The Author -->
	<div class="title-block clearfix">
		<h3 class="h3-body-title">About the Author</h3>
		<div class="title-seperator"></div>
	</div>            
	<div class="about-the-author">
		<div class="blog-span-bottom">
			<div class="the-author-bio">
				<div class="the-author-thumbnail">
					<img src="<?php roots_skin_directory(); ?>/images/placeholders/author-placeholder.jpg" alt="John Doe"  class="img-responsive"/>
				</div>

				<div class="the-author-small-bio">
					<div class="the-author-name">
						<?php the_author_posts_link(); ?>
					</div>
					<p>
						<?php the_author_meta('description'); ?>            
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //About The Author// -->
<?php } ?>

<?php comments_template('/templates/comments.php'); ?>

<?php endwhile; ?>

