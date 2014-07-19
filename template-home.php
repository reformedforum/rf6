<?php
/*
Template Name: Home
*/
?>

<?php 
	global $usedIds;
	$usedIds = array(); /* array to keep track of posts that have already been displayed */ 
?>

<?php get_template_part('templates/elements/slider'); ?>

<div class="loading-container">
	<div class="spinner">
		<div class="double-bounce1"></div>
		<div class="double-bounce2"></div>
	</div>
</div>

<div class="content-wrapper hide-until-loading">

	<?php // get_template_part('templates/content', 'page'); ?>

	<div class="section-content top-body">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3"> 
					<div class="content-box content-style4 medium animated"
						 data-animtype="fadeIn"
						 data-animrepeat="0"
						 data-animspeed="1s"
						 data-animdelay="0.2s"
						 >
						<h4 class="h4-body-title">
							<i class="icon-study"></i>
							Learn
						</h4>
						<div class="content-box-text">
							Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
							ligula. Nunc commodo lacinia eros ac condimentum

							<div>
								<a href="/resources" class=" btn btn-sm">
									<span>read more</span>
								</a>
							</div>

						</div>

					</div>
				</div>
				<div class="col-md-3 col-sm-3"> 
					<div class="content-box content-style4 medium animated"
						 data-animtype="fadeIn"
						 data-animrepeat="0"
						 data-animspeed="1s"
						 data-animdelay="0.2s"
						 >
						<h4 class="h4-body-title">
							<i class="icon-like-love-streamline"></i>
							Share
						</h4>
						<div class="content-box-text">
							Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
							ligula. Nunc commodo lacinia eros ac condimentum

							<div>
								<a href="#" class=" btn btn-sm">
									<span>read more</span>
								</a>
							</div>

						</div>

					</div>
				</div>
				<div class="col-md-3 col-sm-3"> 
					<div class="content-box content-style4 medium animated"
						 data-animtype="fadeIn"
						 data-animrepeat="0"
						 data-animspeed="1s"
						 data-animdelay="0.2s"
						 >
						<h4 class="h4-body-title">
							<i class="icon-user-outline"></i>
							Interact
						</h4>
						<div class="content-box-text">
							Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
							ligula. Nunc commodo lacinia eros ac condimentum

							<div>
								<a href="/events" class=" btn btn-sm">
									<span>read more</span>
								</a>
							</div>

						</div>

					</div>
				</div>
				<div class="col-md-3 col-sm-3"> 
					<div class="content-box content-style4 medium animated"
						 data-animtype="fadeIn"
						 data-animrepeat="0"
						 data-animspeed="1s"
						 data-animdelay="0.2s"
						 >
						<h4 class="h4-body-title">
							<i class="icon-banknote"></i>
							Donate
						</h4>
						<div class="content-box-text">
							Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
							ligula. Nunc commodo lacinia eros ac condimentum

							<div>
								<a href="/donate" class=" btn btn-sm">
									<span>read more</span>
								</a>
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>

	</div>
	<div class="body-wrapper">

	<?php /* Portfolio
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 animated" data-animtype="flipInY"
					 data-animrepeat="0"
					 data-speed="1s"
					 data-delay="0.5s">
					<h2 class="h2-section-title">Our Work</h2>

					<div class="i-section-title">
						<i class="icon-files">

						</i>
					</div>

					<div class="space-sep20"></div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="portfolio-items">
					
					<?php query_posts(array('showposts'=>8, 'post_type'=>array('post', 'podcast'), 'post__not_in'=>$usedIds)); ?>
						
						<?php $datadelay = 0.6; ?>
						
						<?php while (have_posts()) : the_post(); ?>

						<!-- Portfolio Item -->
						<div class="thumb-label-item animated branding"
							 data-animtype="fadeInUp"
							 data-animrepeat="0"
							 data-speed="1s"
							 data-delay="<?php echo $datadelay; ?>s">
							<div class="img-overlay thumb-label-item-img">

								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('medium');
								} ?>

								<?php // media file overlay. This can be a photo, video (YouTube or maybe a Vimeo link), and possibly and audio file. ?>
								<div class="item-img-overlay">
									<a class="portfolio-zoom fa fa-plus"
									   href="http://www.youtube.com/watch?v=mcw6j-QWGMo"
									   data-rel="prettyPhoto[portfolio]" title="<?php echo roots_title(); ?>"></a>

									<div class="item_img_overlay_content">
										<h3 class="thumb-label-item-title">
											<a href="">Aenean llus mtus</a>
										</h3>
									</div>

								</div>
							</div>

						</div>
						<!-- //Portfolio Item// -->
						
						<?php $datadelay = $datadelay + 0.2; ?>
						
						<?php endwhile; ?>
				
					</div>
				</div>
			</div>

		</div>
		<div class="space-sep40"></div>
		
*/ ?>

 					<div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 animated" data-animtype="fadeInUp"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="0.4s">
                                <h2 class="h2-section-title">Featured Episodes &amp; Posts</h2>
                                <div class="i-section-title">
                                    <i class="icon-ink-pen-streamline">

                                    </i>
                                </div>
                            </div>
                        </div>
                        <div class="space-sep20"></div>
                        <div class="row">
                        	<?php query_posts(array('showposts'=>3, 'post_type'=>array('post','podcast'), 'post__not_in'=>$usedIds)); ?>
                        	<?php $datadelay = 0; ?>
							<?php while (have_posts()) : the_post(); ?>
                            <div class="col-md-3 col-sm-3">
                                <div class="feature animated" data-animtype="fadeInLeft"
                                     data-animrepeat="0"
                                     data-speed="1s"
                                     data-delay="<?php echo $datadelay; ?>s">
                                    <div class="feature-image img-overlay">
                                    	<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail(array(263, 263), array('class'=>'img-responsive'));
										} ?>

										<?php /*
                                        <div class="item-img-overlay">
                                            <a class="portfolio-zoom fa fa-plus" href="images/placeholders/feature1.jpg"
                                               data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>
                                        </div>
                                        */ ?>

                                    </div>

                                    <div class="feature-content">
                                        <h3 class="h3-body-title">
                                        	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>

                                        <p>
                                            <?php the_excerpt(); ?>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <?php $datadelay = $datadelay + 0.2; ?>
                            <?php endwhile; ?>
                            <div class="col-md-3 col-sm-3 animated" data-animtype="fadeInRight"
                                 data-animrepeat="0"
                                 data-speed="1s"
                                 data-delay="0.5s">
                                <div class="accordion accordion2" data-toggle="off" data-active-index="0">


                                    <div class="accordion-row">

                                        <div class="title">
                                            <div class="open-icon"></div>
                                            <h4>Podcasts</h4>
                                        </div>
                                        <div class="desc">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut.  imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.Duis leo. </div>
                                    </div>


                                    <div class="accordion-row">

                                        <div class="title">
                                            <div class="open-icon"></div>
                                            <h4>Blog Posts</h4>
                                        </div>
                                        <div class="desc">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer.</div>
                                    </div>


                                    <div class="accordion-row">

                                        <div class="title">
                                            <div class="open-icon"></div>
                                            <h4>Books</h4>
                                        </div>
                                        <div class="desc">Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante.</div>
                                    </div>


                                </div>            
                            </div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="space-sep20"></div>
                        <div class="divider divider-shadow"></div>
                        <div class="space-sep20"></div>
                    </div>


			<div class="container">

				<div class="row">
					<div class="col-md-12 col-sm-12 animated" data-animtype="fadeInUp"
						 data-animrepeat="0"
						 data-speed="1s"
						 data-delay="0.4s">
						<h2 class="h2-section-title">Take A Closer Look</h2>

						<div class="i-section-title">
							<i class="icon-zoom-in">
							</i>
						</div>

						<h3 class="h3-section-info">
							Are you new to Reformed Forum? Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
							quasi architecto beatae vitae dicta sunt explicabo.
						</h3>
					</div>

				</div>

				<div class="row">
					<div class="col-md-12 col-sm-12 no-bottom-margin animated" data-animtype="fadeInUp"
						 data-animrepeat="0"
						 data-animspeed="1s"
						 data-animdelay="0.7s">
						<img src="<?php roots_skin_directory(); ?>/images/placeholders/responsive-mockup2-placeholder.png" alt="MockUp" class="img-responsive" />
					</div>
				</div>
			</div>

			<div class="space-sep40"></div>




			<div class="container">

				<div class="row animated" data-animtype="fadeInUp"
					 data-animrepeat="0"
					 data-speed="1s"
					 data-delay="0.5s">

					<div class="col-md-12 col-sm-12">
						<h4 class="h4-section-title center-text">Subscribe To Our NewsLetter</h4>
						<div class="section-subscribe" id="mc_embed_signup">
							<form action="//reformedforum.us2.list-manage.com/subscribe/post?u=14186c205d6f7604ade1f3155&amp;id=dc8e46dfca" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div id="mce-responses" class="clear">
									<div class="response" id="mce-error-response" style="display:none"></div>
									<div class="response" id="mce-success-response" style="display:none"></div>
								</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								<input type="text" name="b_14186c205d6f7604ade1f3155_dc8e46dfca" class="subscribe-input text-input" placeholder="Email..."/>
								<?php //<input type="submit" name="subscribe" id="mc-embedded-subscribe" class="subscribe-button icon-email-plane"/>?>
								<button class="subscribe-button icon-email-plane">

								</button>
							</form>
						</div>
						<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
						<script type='text/javascript'>
						(function($) {
						window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
						}(jQuery));
						var $mcj = jQuery.noConflict(true);
						</script>
						<!--End mc_embed_signup-->
					</div>
				</div>

			</div>

		</div>
        
        <!---
		<div class="section-content section-tabs section-px stones-bg white-text">
			<div class="tab-container">
				<div class="section-tab-arrow"></div>
				<div class="section-etabs-container">
					<ul class="section-etabs">
						<li class="tab active">
							<a href="#tabc1">Recent Episodes</a>
						</li>
						<li class="tab">
							<a href="#tabc2">Clients</a>
						</li>
						<li class="tab">
							<a href="#tabc3">NewsLetter</a>
						</li>
					</ul>
				</div>
				<div class="container">

					<div class="tab-content">

						<div id="tabc1">
							<div class="row">
								<?php query_posts(array('showposts'=>4, 'post_type'=>array('podcast'), 'post__not_in'=>$usedIds)); ?>
								<?php while (have_posts()) : the_post(); ?>	
								<div class="col-md-3 col-sm-3">
									<div class="feature animated" data-animtype="fadeInUp" data-animrepeat="0" data-animspeed="1s" data-animdelay="0.4s">
										<div class="feature-image img-overlay">
										
											<?php rf_thumb(); ?>

											<?php /*
											<div class="item-img-overlay">
												<a class="portfolio-zoom fa fa-plus" href="<?php roots_skin_directory(); ?>/images/placeholders/blog1.jpg"
												   data-rel="prettyPhoto[portfolio]" title="Title goes here"></a>
											</div>
											*/ ?>

										</div>

										<div class="feature-content">
											<h3 class="h3-body-title blog-title">
												<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
											</h3>
											<p>
												<?php the_excerpt(); ?>
											</p>

										</div>

										<div class="feature-details">
											<i class="icon-calendar"></i>
											<span><?php the_time('F jS, Y'); ?></span>
											<span class="details-seperator"></span>

											<a href="<?php comments_link(); ?>"><i class="icon-comment"></i><span><?php comments_number('No Responses', '1 Response', '% Responses'); ?></span></a>

											<div class="feature-share">
												<a href="#"><i class="icon-twitter"></i></a>
												<a href="#"><i class="icon-facebook"></i></a>
											</div>
										</div>        
									</div>
								</div>
								<?php endwhile; ?>
							</div>            
						</div>
						<div id="tabc2">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<h2 class="h2-section-title animated" data-animtype="flipInX" data-animrepeat="0" data-animspeed="1s" data-animdelay="0s">Our Clients </h2>
									<h3 class="h3-section-info animated" data-animtype="flipInX" data-animrepeat="0" data-animspeed="1s" data-animdelay="0.2s">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
										rhoncus ut, imperdiet</h3>
									<ul class="section-clients">
										<li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.2s"><img src="<?php roots_skin_directory(); ?>/images/placeholders/clients/white_logo1.png" alt="Logo" class="img-responsive client-image" /></li>
										<li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.3s"><img src="<?php roots_skin_directory(); ?>/images/placeholders/clients/white_logo2.png" alt="Logo" class="img-responsive client-image" /></li>
										<li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.4s"><img src="<?php roots_skin_directory(); ?>/images/placeholders/clients/white_logo3.png" alt="Logo" class="img-responsive client-image" /></li>
										<li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.5s"><img src="<?php roots_skin_directory(); ?>/images/placeholders/clients/white_logo4.png" alt="Logo" class="img-responsive client-image" /></li>
										<li class="animated" data-animtype="bounceIn" data-animrepeat="0" data-animdelay="0.6s"><img src="<?php roots_skin_directory(); ?>/images/placeholders/clients/white_logo5.png" alt="Logo" class="img-responsive client-image" /></li>
									</ul>
								</div>
							</div>           
						</div>
						<div id="tabc3">
							<h2 class="h2-section-title animated" data-animtype="flipInY"
								data-animrepeat="0"
								data-speed="1s"
								data-delay="0.2s">
								Subscribe To Our NewsLetter
							</h2>
							<div class="section-subscribe animated" data-animtype="flipInX"
								 data-animrepeat="0"
								 data-speed="1s"
								 data-delay="0.5s">
								<form action="#" method="post">
									<input type="text" name="q" class="subscribe-input text-input" placeholder="Email..."/>
									<button class="subscribe-button icon-email-plane">

									</button>
								</form>

								<div class="social-icons circle">

									<a href="#" target="_blank" class="social-media-icon facebook-icon bounceIn" data-original-title="facebook">facebook</a>

									<a href="#" target="_blank" class="social-media-icon twitter-icon bounceIn" data-original-title="twitter">Twitter</a>

									<a href="#" target="_blank" class="social-media-icon skype-icon bounceIn" data-original-title="skype">skype</a>

									<a href="#" target="_blank" class="social-media-icon evernote-icon bounceIn" data-original-title="evernote">evernote</a>

									<a href="#" target="_blank" class="social-media-icon flickr-icon bounceIn" data-original-title="flickr">flickr</a>

									<a href="#" target="_blank" class="social-media-icon instagram-icon bounceIn" data-original-title="instagram">instagram</a>
								</div>

							</div>

						</div>
					</div>
				</div>
			</div>    
		</div>
		
		<div class="space-sep40"></div>
		--->
		
		<!---
		<div class="section-content section-color-red white-text">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 animated " data-animtype="fadeInLeftBig"
						 data-animrepeat="0"
						 data-speed="1s"
						 data-delay="0.4s">
						<div class="space-sep100"></div>


						<h2 class="h2-section-title">Full Block Color Background</h2>
						<h3 class="h3-section-info">Lorem ipsum dolor sit amet, in pri offendit ocurreret. Vix sumo ferri an. pfs adodio fugit delenit ut qui. Omittam suscipiantur ex  vel,ex audiam  intellegat gfIn labitur discere eos, nam an feugiat voluptua.</h3>
					</div>

					<div class="col-md-6 col-sm-6 animated " data-animtype="fadeInRightBig"
						 data-animrepeat="0"
						 data-speed="1s"
						 data-delay="0.4s">
						<div class="right-image-container">
							<img src=<?php roots_skin_directory(); ?>/images/placeholders/screens-mockup-placeholder.png alt="MockUp"/>
						</div>
					</div>
				</div>
			</div>
		</div>
		--->
		

		
		<div class="section-content bottom-body">
		
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 animated" data-animtype="fadeInUp"
					 data-animrepeat="0"
					 data-speed="1s"
					 data-delay="0.4s">
					<h2 class="h2-section-title">The Theological Encyclopedia</h2>

					<div class="i-section-title">
						<i class="icon-study">
						</i>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6 right-text">
					<ul class="icon-content-list-container">

						<li class="icon-content-single">

							<div class="content-box  style5  animated "
								 data-animtype="fadeIn"
								 data-animrepeat="0"
								 data-animspeed="1s"
								 data-animdelay="0.2s"
								 >
								<h4 class="h4-body-title">
									<strong>New</strong> Testament            

									<a href="<?php echo bloginfo('home'); ?>/category/new-testament"><i class="icon-book-read-streamline"></i></a>
								</h4>
								<div class="content-box-text">
									<p> 
										Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
										ligula. Nunc commodo lacinia eros ac condimentum
									</p>
								</div>
							</div>
						</li>

						<li class="icon-content-single">

							<div class="content-box  style5  animated "
								 data-animtype="fadeIn"
								 data-animrepeat="0"
								 data-animspeed="1s"
								 data-animdelay="0.2s"
								 >
								<h4 class="h4-body-title">
									<strong>Systematic</strong> Theology           

									<a href="<?php echo bloginfo('home'); ?>/category/systematic-theology"><i class="icon-world"></i></a>
								</h4>
								<div class="content-box-text">
									<p> 
										Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
										ligula. Nunc commodo lacinia eros ac condimentum
									</p>
								</div>
							</div>
						</li>

						<li class="icon-content-single">

							<div class="content-box  style5  animated "
								 data-animtype="fadeIn"
								 data-animrepeat="0"
								 data-animspeed="1s"
								 data-animdelay="0.2s"
								 >
								<h4 class="h4-body-title">
									<strong>Apologetics</strong> &amp; <strong>Philosophy</strong>            

									<a href="<?php echo bloginfo('home'); ?>/category/apologetics"><i class="icon-cloud"></i></a>
								</h4>
								<div class="content-box-text">
									<p> 
										Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
										ligula. Nunc commodo lacinia eros ac condimentum
									</p>
								</div>
							</div>
						</li>

						<li class="icon-content-single">

							<div class="content-box  style5  animated "
								 data-animtype="fadeIn"
								 data-animrepeat="0"
								 data-animspeed="1s"
								 data-animdelay="0.2s"
								 >
								<h4 class="h4-body-title">
									<strong>Practical</strong> Theology            

									<a href="<?php echo bloginfo('home'); ?>/category/practical-theology"><i class="icon-coffee-streamline"></i></a>
								</h4>
								<div class="content-box-text">
									<p> 
										Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
										ligula. Nunc commodo lacinia eros ac condimentum
									</p>
								</div>
							</div>
						</li>

					</ul>
				</div>
				<div class="col-md-6 col-sm-6">
					<ul class="icon-content-list-container">

						<li class="icon-content-single">

							<div class="content-box  style5  animated "
								 data-animtype="fadeIn"
								 data-animrepeat="0"
								 data-animspeed="1s"
								 data-animdelay="0.2s"
								 >
								<h4 class="h4-body-title">
									<strong>Old</strong> Testament             
									<a href="<?php echo bloginfo('home'); ?>/category/old-testament"><i class="icon-fire"></i></a>
								</h4>
								<div class="content-box-text">
									<p> 
										Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
										ligula. Nunc commodo lacinia eros ac condimentum
									</p>
								</div>
							</div>
						</li>

						<li class="icon-content-single">

							<div class="content-box  style5  animated "
								 data-animtype="fadeIn"
								 data-animrepeat="0"
								 data-animspeed="1s"
								 data-animdelay="0.2s"
								 >
								<h4 class="h4-body-title">
										<strong>Biblical</strong> Theology
										<a href="<?php echo bloginfo('home'); ?>/category/biblical-theology"><i class="icon-eye"></i></a>
								</h4>
								<div class="content-box-text">
									<p> 
										Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
										ligula. Nunc commodo lacinia eros ac condimentum
									</p>
								</div>
							</div>
						</li>

						<li class="icon-content-single">

							<div class="content-box  style5  animated "
								 data-animtype="fadeIn"
								 data-animrepeat="0"
								 data-animspeed="1s"
								 data-animdelay="0.2s"
								 >
								<h4 class="h4-body-title">
									<strong>Church</strong> History            

									<a href="<?php echo bloginfo('home'); ?>/category/church-history"><i class="icon-clock-streamline-time"></i></a>
								</h4>
								<div class="content-box-text">
									<p> 
										Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
										ligula. Nunc commodo lacinia eros ac condimentum
									</p>
								</div>
							</div>
						</li>

						<li class="icon-content-single">

							<div class="content-box  style5  animated "
								 data-animtype="fadeIn"
								 data-animrepeat="0"
								 data-animspeed="1s"
								 data-animdelay="0.2s"
								 >
								<h4 class="h4-body-title">
									<strong>Family</strong> &amp; <strong>Education</strong>            

									<a href="<?php echo bloginfo('home'); ?>/category/family"><i class="icon-user-outline"></i></a>
								</h4>
								<div class="content-box-text">
									<p> 
										Cras sem erat, aliquet in egestas cursus, ullamcorper vitae 
										ligula. Nunc commodo lacinia eros ac condimentum
									</p>
								</div>
							</div>
						</li>

					</ul>
				</div>

			</div>
		</div>
		
		</div>

	</div>

	<?php //get_template_part('templates/elements/testimonial'); ?>

</div>

