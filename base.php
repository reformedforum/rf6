<?php get_template_part('templates/head'); ?>

    <body <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

        <div id="wrapper">
			<div class="top_wrapper">

				  <?php
					do_action('get_header');
					// Use Bootstrap's navbar if enabled in config.php
					if (current_theme_supports('bootstrap-top-navbar')) {
					  get_template_part('templates/header-top-navbar');
					} else {
					  get_template_part('templates/header');
					}
				  ?>
				  
				  <?php get_template_part('templates/page-title'); // if this is loaded by do_action('get_header') above, then delete this line ?>
				  
			</div><!--.top wrapper end -->
			
			<div class="loading-container">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        	
            <div class="content-wrapper hide-until-loading">
            	<div class="body-wrapper">
					<!-- main content -->
					<div class="container">
						<?php include roots_template_path(); ?>
					</div>
                   
					<?php if (roots_display_sidebar()) : ?>
						<div class="col-md-3 col-sm-3">
							<div class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
							  <?php include roots_sidebar_path(); ?>
							</div><!-- /.sidebar -->
						</div>
					<?php endif; ?>
                </div>
            </div><!--.content-wrapper end -->

        </div><!-- wrapper end -->
        
        <?php get_template_part('templates/footer'); ?>

        <script type="text/javascript" src="<?php roots_skin_directory(); ?>/js/_jq.js"></script>

        <script type="text/javascript" src="<?php roots_skin_directory(); ?>/js/_jquery.placeholder.js"></script>

        <script src="<?php roots_skin_directory(); ?>/js/activeaxon_menu.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/animationEnigne.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/ie-fixes.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jq.appear.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jquery.base64.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jquery.cycle.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jquery.cycle2.carousel.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jquery.easing.1.3.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jquery.easytabs.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jquery.infinitescroll.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jquery.isotope.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jquery.prettyPhoto.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jQuery.scrollPoint.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jquery.themepunch.revolution.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jquery.tipsy.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jquery.validate.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/jQuery.XDomainRequest.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/kanzi.js" type="text/javascript"></script> 
        <script src="<?php roots_skin_directory(); ?>/js/retina.js" type="text/javascript"></script> 
    </body>
</html>
