<div class="top-bar">
	<div class="container">
		<div class="row">
			<div class="col-sm-7">
				<?php /*
				<div class="call-us top-bar-block">
					<i class="icon-phone"></i>
					<span>
						Call us at 440.973.6786
					</span>
				</div>
				*/ ?>
				<div class="mail-us top-bar-block">
					<i class="icon-email"></i>                            
					<span>
						E-mail: mail@reformedforum.org
					</span>                            
				</div>
				<div class="mail-us top-bar-block">
					<i class="icon-like"></i>                            
					<span>
						<a href="/donate">Give</a>
					</span>                            
				</div>

			</div>
			<div class="col-sm-5">

				<!-- Search Box -->
				<div class="searchbox">
					<?php get_template_part('templates/searchform'); ?>
				</div>
				<!-- //Search Box// -->
				<div class="social-icons">
					<ul>
						<li>
							<a href="https://plus.google.com/b/104201906423648760148/" target="_blank" class="social-media-icon googleplus-icon" data-original-title="googleplus">googleplus</a>
						</li>
						<li>
							<a href="http://www.facebook.com/reformedforum" target="_blank" class="social-media-icon facebook-icon" data-original-title="facebook">facebook</a>
						</li>
						<li>
							<a href="http://www.twitter.com/reformedforum" target="_blank" class="social-media-icon twitter-icon" data-original-title="twitter">twitter</a>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</div>
</div>

<header id="header">
	<div class="container">

		<div class="row header">

			<!-- Logo -->
			<div class="col-xs-2 logo">
				<a href="/">
					<img src="<?php roots_skin_directory(); ?>/images/main_logo.png" alt="Reformed Forum"/>
				</a>
			</div>
			<!-- //Logo// -->


			<!-- Navigation File -->
			<div class="col-md-10">

				<!-- Mobile Button Menu -->
				<div class="mobile-menu-button">
					<i class="fa fa-list-ul"></i>
				</div>
				<!-- //Mobile Button Menu// -->


				<nav>					
					<?php /*
					  if (has_nav_menu('primary_navigation')) :
						wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
					  endif; */
					?>
				
					<ul class="navigation">
						<li>
							<a href="<?php bloginfo('url'); ?>">
								<span class="label-nav">
									Home
								</span>
								<span class="label-nav-sub" data-hover="Get Started">
									Get Started
								</span>
							</a>
						</li>
						<li>
							<a href="<?php bloginfo('url'); ?>/about">
								<span class="label-nav">
									About
								</span>
								<span class="label-nav-sub" data-hover="Who We Are">
									Who We Are
								</span>
							</a>
							<ul>
								<?php wp_list_pages("title_li=&child_of=2"); ?><?php // for some reason every link has class="activelink" ?>
								<li><a href="/network">Our Network</a></li>
							</ul>
						</li>
						<li>
							<a href="<?php bloginfo('url'); ?>/blog">
								<span class="label-nav">
									Blog
								</span>
								<span class="label-nav-sub" data-hover="Our Posts">
									Our Posts
								</span>
							</a>
							<ul>
								<li>
									<a href="blog.html">Blog</a>
								</li>
								<li>
									<a href="blog-masonry.html">Blog Masonry</a>
								</li>
								<li>
									<a href="blog-single.html">Blog Single</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="<?php bloginfo('url'); ?>/programs">
								<span class="label-nav">
									Programs
								</span>
								<span class="label-nav-sub" data-hover="Our Podcasts">
									Our Podcasts
								</span>
							</a>
							<ul>
						<?php	
								$active = array(	'ctc'=>'Christ the Center',
													'proclaimingchrist'=>'Proclaiming Christ',
													'rmr'=>'Reformed Media Review',
													'eastofeden'=>'East of Eden',
													'pft'=>'Philosophy for Theologians',
													'faithofourfathers'=>'Faith of Our Fathers',
													'reformedclassics'=>'Reformed Classics'
													);
								foreach ($active as $slug => $name) { ?>
								<li>
									<a href="/programs/<?php _e($slug); ?>"><?php _e($name); ?></a>
								</li>
								<?php } ?>
								<?php /* ?>
								<li><a href="">Retired and Inactive</a></li>
								<?php */ ?>
							</ul>
						</li>
						<li>
							<a href="<?php bloginfo('url'); ?>/donate">
								<span class="label-nav">
									Donate
								</span>
								<span class="label-nav-sub" data-hover="Give">
									Give
								</span>
							</a>
						</li>					
					</ul>

				</nav>

				<!-- Mobile Nav. Container -->
				<ul class="mobile-nav">
					<li class="responsive-searchbox">
						<!-- Responsive Nave -->
						<form action="#" method="get">
							<input type="text" class="searchbox-inputtext" id="searchbox-inputtext-mobile" name="s" />
							<button class="icon-search"></button>
						</form>
						<!-- //Responsive Nave// -->
					</li>
				</ul>
				<!-- //Mobile Nav. Container// -->
			</div>
			<!-- Nav -->

		</div>



	</div>
</header>