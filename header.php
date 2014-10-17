<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!--[if IE]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" type="text/css" media="screen"><![endif]-->
  <script charset="utf-8" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/css_browser_selector.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="global-box cf">
  <header id="header" class="cf">
	  <div class="center-box">
		  <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			<nav class="main-menu">
			  <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false ) ); ?>
				<div class="phone"><strong>CALL</strong> 0409 546 559</div>
			</nav>
		</div>
	</header>
	
	<section id="content-section" class="cf">
	  <div class="bg-content">
		<?php if(is_front_page()) { ?>
					<div class="top-content-home">
				<figure class="img-header-home">
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
					  <?php the_post_thumbnail(); ?>
					  <?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/uploads/header_home.jpg" alt=" " />
					<?php endif; ?>
				</figure>
				
				<header class="tit-home">
					<h1>Privacy <span>Style</span> Quality</h1>
					<h2>Proudly Australian Made</h2>
				</header>
				
				<h3 class="tit-green-home"><a href="/contact/">Wide range of fabrics & colours Request a sample pack</a></h3>
			</div>
			<?php } else { ?>
			<div class="top-content-page">
				<figure class="img-header-page">
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<?php the_post_thumbnail(); ?>
						<?php else: ?>
						<img src="<?php echo get_template_directory_uri(); ?>/images/uploads/header_page.jpg" alt=" " />
					<?php endif; ?>
					
				</figure>
				<header class="tit-page">
					<h1>Our <span>Curtains</span></h1>
				</header>
				
				<h3 class="tit-green-page"><a href="/contact/">Wide range of fabrics & colours Request a sample pack</a></h3>
			</div>			
			<?php } ?>
			
			<div class="center-box cf">
		
