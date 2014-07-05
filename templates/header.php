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
							<a href="/">
								<span class="label-nav">
									Home
								</span>
								<span class="label-nav-sub" data-hover="Examples">
									Examples
								</span>
							</a>
							<ul>
								<li>
									<a href="home-version1.html">Home version 1</a>
								</li>
								<li>
									<a href="home-version2.html">Home version 2</a>
								</li>
								<li>
									<a href="home-version3.html">Home version 3</a>
								</li>
								<li>
									<a href="home-version4.html">Home Version 4</a>
								</li>                                    
								<li>
									<a href="home-version5.html">Home Version 5</a>
								</li>                                    
							</ul>
						</li>
						<li>
							<a href="about-us.html">
								<span class="label-nav">
									Pages
								</span>
								<span class="label-nav-sub" data-hover="Layouts">
									Layouts
								</span>
							</a>
							<ul>
								<li>
									<a href="about-us.html"> About </a>
								</li>
								<li>
									<a href="services.html"> Services </a>
								</li>
								<li>
									<a href="team.html"> Our Team </a>
								</li>
								<li>
									<a href="sidebar-navigation.html"> Sidebar Navigation </a>
								</li>
								<li>
									<a href="faq.html"> FAQ </a>
								</li>
								<li>
									<a href="contact.html">Contact Us </a>
								</li>
								<li>
									<a href="sign-up.html">Sign Up </a>
								</li>
								<li>
									<a href="sign-in.html">Sign In</a>
								</li>
								<li>
									<a href="404.html"> 404 </a>
								</li>

							</ul>
						</li>
						<li>
							<a href="blog.html">
								<span class="label-nav">
									Blog
								</span>
								<span class="label-nav-sub" data-hover="The News">
									the news
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
							<a href="portfolio-two-columns.html">
								<span class="label-nav">
									Portfolio
								</span>
								<span class="label-nav-sub" data-hover="Our Work">
									Our Work
								</span>
							</a>
							<ul>
								<li>
									<a href="portfolio-two-columns.html">2 Column</a>
								</li>
								<li>
									<a href="portfolio-three-columns.html">3 Column</a>
								</li>
								<li>
									<a href="portfolio-four-columns.html">4 Column</a>
								</li>
								<li>
									<a href="portfolio-single.html">Single</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="elements.html">
								<span class="label-nav">
									Shortcodes
								</span>
								<span class="label-nav-sub" data-hover="Elements">
									Elements
								</span>
							</a>
							<ul>
								<li>
									<a href="accordions.html">Accordions & Toggles</a>
								</li>
								<li>
									<a href="columns.html">Columns</a>
								</li>                                    
								<li>
									<a href="elements.html">Elements</a>
								</li>                                    
								<li>
									<a href="full-block-content.html">Full Block Content</a>
								</li>
								<li>
									<a href="icon-boxes.html">Icon Boxes</a>
								</li>
								<li>
									<a href="icons.html">Icons</a>
								</li>                                    
								<li>
									<a href="price-tables.html">Pricing Tables</a>
								</li>                                    
								<li>
									<a href="tabs.html">Tabs</a>
								</li>
								<li>
									<a href="testimonials.html">Testimonials</a>
								</li>

								<li>
									<a href="typography.html">Typography</a>
								</li>

							</ul>
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