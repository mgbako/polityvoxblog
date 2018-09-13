<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
	<title><?php bloginfo('name'); ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CMontserrat:400,700%7CPlayfair+Display:400,400italic' rel='stylesheet' type='text/css'>
	
	<!-- Css -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/core.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/skin.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/skin.css" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />


	<!--[if lt IE 9]>
    	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>
<body class="shop home-page">

	<div class="wrapper">
		<div class="wrapper-inner">

			<!-- Header -->
			<header class="header header-fixed header-fixed-on-mobile header-transparent" data-bkg-threshold="100" data-compact-threshold="100">
				<div class="header-inner">
					<div class="row nav-bar">
						<div class="column width-12 nav-bar-inner">
							<div class="logo">
								<div class="logo-inner">
									<a href="http://polityvox.com/"><img src="<?php bloginfo('template_url'); ?>/images/logo-dark.png" alt="Warhol Logo" /></a>
									<a href="http://polityvox.com/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Warhol Logo" /></a>
								</div>
							</div>
							<nav class="navigation nav-block primary-navigation nav-right">
							<?php
							wp_nav_menu( array(
									'theme_location'    => 'primary',
									'depth'             => 2,
									'container'         => 'ul'
							) );
							?>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<!-- Header End -->