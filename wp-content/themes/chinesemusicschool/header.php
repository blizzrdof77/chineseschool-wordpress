<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage ChineseMusicSchool
 * @since May 2013
 */
?><!DOCTYPE html>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title> <?php wp_title( '|', true, 'right' ); ?> </title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!--[if lte IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<!-- SHADOWBOX STYLES -->
<?php if ($customShadow != true) { ?>
	  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/shadowbox.css" />
	<?php } else { ?>
	  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/shadowbox-custom.css" />
	<?php } ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui-1.8.16.custom.css" />
	<!-- FAVICON -->
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" />
	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"> </script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/shadowbox.js"> </script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/cufon-yui.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/creativebeej_400.font.js"></script>	
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>	

	<?php wp_head(); ?>

	<!-- ANALYTICS TRACKING -->
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-21760411-3']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; 
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>
</head>

<body <?php body_class(); ?>>
	<?php 
	if(is_front_page() ) { 
		$wrapper_class = "site wrapper homepage";
	} else {
		$wrapper_class = "site wrapper nav-shift";
	} 
	?>
	<div id="wrapper" class="<?php echo $wrapper_class; ?>">

		<header id="masthead" class="header container_12" role="banner">
			<div class="logo">
				<h1> <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/chinese-logo.png" alt="<?php wp_title( '|', true, 'right' ); ?>"> </a> </h1>
				<h2 id="slogan" class="site-description"> <?php bloginfo( 'description' ); ?> </h2>
			</div>
		</header>

		<div class="page bottom">
			<nav id="chinese-school-nav" class="main-navigation" role="navigation">
				<ul id="main-navigation">
					<li class="music grid_2 prefix_3">
						<h3>
							<a href="/music" id="link-music">
								<span class="asset" > <div class="rollover"> </div> </span>
								Music
							</a>
						</h3>
					</li>
					<li class="shows grid_2">
						<h3>
							<a href="/shows" id="link-shows">
								<span class="asset" id="link-shows"> <div class="rollover"> </div> </span>
								Shows
							</a>
						</h3>
					</li>
					<li class="contact grid_2 suffix_2">
						<h3>
							<a href="/contact" id="link-contact">
								<span class="asset"> <div class="rollover"> </div> </span>
								Contact
							</a>
						</h3>
					</li>
					<li class="photos grid_2 ">
						<h3>
							<a href="/photos" id="link-photos">
								<span class="asset"> <div class="rollover"> </div> </span> 
								Photo
							</a>
						</h3>
					</li>
					<li class="videos grid_2 ">
						<h3>
							<a href="/video" id="link-videos">
								<span class="asset"> <div class="rollover"> </div> </span>
								Video
							</a>
						</h3>
					</li>
				</ul>
			</nav><!-- #site-navigation -->
		</div>
		
		<div id="main">
		