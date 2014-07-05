<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title><?php wp_title('|', true, 'right'); ?></title>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="<?php roots_skin_directory(); ?>/js/ie-fixes.js"></script>
        <link rel="stylesheet" href="<?php roots_skin_directory(); ?>/css/ie-fixes.css">
        <![endif]-->

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--- This should placed first off all other scripts -->

        <link rel="stylesheet" href="<?php roots_skin_directory(); ?>/css/revolution_settings.css">
        <link rel="stylesheet" href="<?php roots_skin_directory(); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php roots_skin_directory(); ?>/css/font-awesome.css">
        <link rel="stylesheet" href="<?php roots_skin_directory(); ?>/css/axfont.css">
        <link rel="stylesheet" href="<?php roots_skin_directory(); ?>/css/tipsy.css">
        <link rel="stylesheet" href="<?php roots_skin_directory(); ?>/css/prettyPhoto.css">
        <link rel="stylesheet" href="<?php roots_skin_directory(); ?>/css/isotop_animation.css">
        <link rel="stylesheet" href="<?php roots_skin_directory(); ?>/css/animate.css">


        <link href='<?php roots_skin_directory(); ?>/css/style.css' rel='stylesheet' type='text/css'> 
        <link href='<?php roots_skin_directory(); ?>/css/responsive.css' rel='stylesheet' type='text/css'>

        <link href="<?php roots_skin_directory(); ?>/css/skins/red.css" rel='stylesheet' type='text/css' id="skin-file">

        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="<?php roots_skin_directory(); ?>/js/respond.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="<?php roots_skin_directory(); ?>/css/color-chooser.css">
        
        <?php wp_head(); ?>
        
        <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">
    </head>

