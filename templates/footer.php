<footer>
	<div class="footer">

		<div class="container">
			<div class="footer-wrapper">
			
				<?php //dynamic_sidebar('sidebar-footer'); ?>
			
			
				<div class="row">


					<!-- Footer Col. -->
					<div class="col-md-3 col-sm-3 footer-col">
						<div class="footer-content">
							<div class="footer-content-logo">
								<img src="<?php roots_skin_directory(); ?>/images/main_logo_compact_light.png" alt=""/>
							</div>
							<div class="footer-content-text">
								<p>
									P.O. Box 27422<br />
									Philadelphia, PA 19118
								</p>
								<p>
									Voicemail: 440.973.6786<br />
									<a href="mailto:mail@reformedforum.org">mail@reformedforum.org</a>
								</p>
							</div>
						</div>
					</div>
					<!-- //Footer Col.// -->
				

					<!-- Footer Col. -->
					<div class="col-md-3 col-sm-3 footer-col">
						<div class="footer-title">
							Our Network
						</div>
						<div class="footer-content">
							<ul class="footer-category-list">
								<li>
									<a href="/">Reformed Forum</a>
								</li>
								<li>
									<a href="http://reformed.academy">Reformed Academy</a>
								</li>
								<li>
									<a href="http://www.feedingonchrist.com">Feeding on Christ</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- //Footer Col.// -->


					<!-- Footer Col. -->
					<div class="col-md-3 col-sm-3 footer-col">
						<div class="footer-title">
							Resources
						</div>
						<div class="footer-content">
							<ul class="footer-category-list">
								<li>
									<a href="">Suggested Reading List</a>
								</li>
								<li>
									<a href="">Dolor Sit Amet</a>
								</li>
								<li>
									<a href="">Nullam dignissim</a>
								</li>
								<li>
									<a href="">Lorem Ipsum</a>
								</li>
								<li>
									<a href="">Lorem Ipsum</a>
								</li>
								<li>
									<a href="">Dolor Sit Amet</a>
								</li>
								<li>
									<a href="">Dolor Sit Amet</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- //Footer Col.// -->
					
					<!-- Footer Col. -->
					<div class="col-md-3 col-sm-3 footer-col">
						<div class="footer-title">
							Recent Tweets
						</div>
						<div class="footer-content footer-recent-tweets-container">
						<?php /*
							<ul class="tweetList footer-recent-tweets">
								<li class="tweet_content item">
									<p>Grab a copy of the popular Boomerang theme for $10 until its next release! </p>
									<p class="timestamp">2 days ago</p>
								</li>
								<li class="tweet_content item">
									<p>Newest Blog Awesome post: Stacking Text and Icons <a href="http://t.co/1qRP8K1wjG">Check it</a></p>
									<p class="timestamp">4 days ago</p>
								</li>
							</ul>
						*/ ?>
						</div>
					</div>
					<!-- //Footer Col.// -->
				</div>
			</div>

		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 center-text">
						<div class="copyright-text">&copy; <?php echo date('Y'); ?> Reformed Forum</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</footer>

<script>
	/* jQuery Tweetable */
	$('.footer-recent-tweets-container').tweetable({
		username: 'reformedforum',
		limit: 2,
		time: true,
		html5: true,
		onComplete:function($ul) {
			$('time').timeago();
		}
	});
</script>

<?php wp_footer(); ?>
