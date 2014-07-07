<div class="blog-post">
	<?php get_template_part('templates/elements/icon'); ?>

	<div class="blog-span">
	
		<?php $format = get_post_format();
		switch ($format) { 
			case "video": ?>
				<?php /*
				<div class="blog-post-featured-img blog-post-featured-img-with-vid">
					<!-- Youtube video, dont forget to blog-post-youtube class-->
					<a href="http://www.youtube.com/watch?v=mcw6j-QWGMo" class="blog-post-youtube">My Video</a>
				</div>
		
				<div class="blog-post-featured-img blog-post-featured-img-with-vid">
					<!-- Vimeo video, dont forget to blog-post-vimeo class-->
					<a href="http://vimeo.com/23237102" class="blog-post-vimeo">My Video</a>
				</div>
				*/ ?>
			<?php case "audio": ?>
				<?php /*
				<div class="blog-post-featured-img">
					<a href="https://soundcloud.com/haloproject/halo-scenes-from-the-four" class="blog-post-soundcloud">My
						Audio</a>
				</div>
				*/ ?>
			<?php case "quote": ?>
				<i class="fa fa-quote-left"> </i>
			<?php case "link": ?>
				<i class="icon-clip"> </i>
			<?php case "gallery": ?>
				<?php /*
				<!-- Slider (gallery) -->
				<div class="blog-post-featured-img">

					<div class="blog-slider cycle-slideshow"
						 data-cycle-slides="> .slider-img"
						 data-cycle-swipe="true"
						 data-cycle-prev=".cycle-prev"
						 data-cycle-next=".cycle-next"
						 data-cycle-timeout=0
						 >

						<div class="fa fa-chevron-right cycle-next"></div>
						<div class="fa fa-chevron-left cycle-prev"></div>
						<div class="cycle-pager"></div>

						<!-- slider item -->
						<div class="slider-img">
							<img src="images/placeholders/blog2.jpg" alt=""/>
						</div>
						<!-- //slider item// -->
						<!-- slider item -->
						<div class="slider-img">
							<img src="images/placeholders/blog3.jpg" alt=""/>
						</div>
						<!-- //slider item// -->
						<!-- slider item -->
						<div class="slider-img">
							<img src="images/placeholders/blog4.jpg" alt=""/>
						</div>
						<!-- //slider item// -->
					</div>
				</div>
				*/ ?>
			<?php default: ?>
				<div class="blog-post-featured-img img-overlay">

					<?php if ( has_post_thumbnail() ) {
						$post_thumbnail_id = get_post_thumbnail_id();
						$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
						<?php // <div class="img-cropper" style="max-height:300px;overflow:hidden;"> // This is a trick for cropping the image. I'm going to try to use featured image sizes, since the cropping is intentional and often more aesthetic. ?>
						<img src="<?php echo $post_thumbnail_url; ?>" alt="" class="img-responsive" height="auto" width="100%" />
						<?php // </div> ?>
					<?php } ?>

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
				</div>
			<?php } ?>
		<h2>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php if (get_post_format() == "link") { ?><span class="blog-post-link"><?php the_content(); ?></span><?php } ?>
		</h2>

		<div class="blog-post-body">
			<?php if (get_post_format() == "quote") { ?>			
				<div class="blog_post_quote">
					<?php the_content(); ?>
					<div class="quote-author">The Author's Name</div>                    
				</div>
			<?php } else { ?>
				<?php the_excerpt(); ?>
			<?php } ?>
		</div>
		
		<div class="blog-post-details">

			<?php get_template_part('templates/entry-meta'); ?>

			<!-- Read More -->
			<div class="blog-post-details-item blog-post-details-item-right">
				<a href="<?php the_permalink(); ?>">
					read more <i class="fa fa-chevron-right"></i>
				</a>
			</div>
			<!-- //Read More// -->

		</div>
	</div>
</div>