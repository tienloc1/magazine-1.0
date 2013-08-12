<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?><?php echo wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">

</head>
<body>

	<div class="page">

		<div class="band header">
			<header class="container main">
				<div class="sixteen columns">

					<h1 class="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>


					<!--http://themeforest.net/wiki/referral/basics-referral/banners-and-logos/-->
					<a class="banner" href="#"><img src="wp-content/themes/magazine-1.0/images/banners/pd_468x60_v4.gif" alt="" /></a>

				</div>
			</header><!-- end container -->
		</div><!-- end band -->

		<div class="band navigation">
			<nav class="container primary">
				<div class="sixteen columns">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Tech</a></li>
						<li><a href="#">Business</a></li>
						<li><a href="#">Entertaiment</a>

							<ul>
								<li><a href="#"><span>- </span>Film</a></li>
								<li><a href="#"><span>- </span>Gaming</a></li>
								<li><a href="#"><span>- </span>TV</a></li>
								<li><a href="#"><span>- </span>Music</a></li>
							</ul>
							
						</li>
						<li><a href="#">Social</a></li>
						<li><a href="#">Media</a>
						<!-- 
							<ul>
								<li><a href="#">Skeleton is a small collection of well-organized</a></li>
								<li><a href="#">Skeleton is a small collection of well-organized CSS</a></li>
								<li><a href="#">Skeleton is a small collection of well-organized CSS CSS</a></li>
								<li><a href="#">Skeleton is a small collection of well-organized CSS CSS CSS</a></li>
							</ul> -->

						</li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>	
			</nav><!-- end container -->
		</div><!-- end band navigation -->