<?php if ( roots_display_header() ) { ?>
<div class="top-title-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="page-info">
					<h1 class="h1-page-title"><?php echo roots_title(); ?></h1>

					<?php if ( is_page() || is_single() ) { ?>
					<h2 class="h2-page-desc">
						<?php if ( get_post_type($post->ID) == 'post' ) { ?>
							<?php the_author_meta( 'display_name', $post->post_author ); ?>
						<?php } elseif ( get_post_type($post->ID) == 'podcast' ) { ?>
							<?php echo rf_media_show_name(); ?>
						<?php } elseif ( get_post_type($post->ID) == 'book' ) { ?>
							Author name
						<?php } ?>
					</h2>
					<?php } ?>
					
					<!-- BreadCrumb -->
					<div class="breadcrumb-container">
						<ol class="breadcrumb">
							<li>
								<a href="">Home</a>
							</li>
							<li class="active">Section</li>
						</ol>
					</div>
					<!-- BreadCrumb -->
					
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>