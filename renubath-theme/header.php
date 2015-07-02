<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package renubath-theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'renubath-theme' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
	<!-- end Htags --><div id="H-wrp"><div id="H-pat"><div id="center">
	<div id="top-links"><?php wp_nav_menu( array( 'menu' => 'Top head', 'menu_id' => 'top-menu-id','menu_class' => 'top-menu-class' ) ); ?></div>
		<div class="site-branding">
			<h1 class="site-title" style="display:none;">
			<span>RenuBath Bath Resurfacing</span>
			</h1>
			<div class="site-logo-banners">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<span id="renubath-logo"><img src="<?php echo get_template_directory_uri() ; ?>/images/renubath-logo.png" /></span>
			</a>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<span id="renusurface-logo"><img src="<?php echo get_template_directory_uri() ; ?>/images/renu-surface-logo.png" /></span>
			</a>
			</div>
		</div><!-- .site-branding -->
</div></div></div><!-- end Htags -->
		<!-- end Htags --><div id="Hn-wrp"><div id="Hn-pat"><div id="center">	
		 <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'renubath-theme' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'nav-menu','menu_class'      => 'sf-menu sf-js-enabled sf-arrows' ) ); ?>
		</nav><!-- #site-navigation -->
		</div></div></div><!-- end Htags -->
	</header><!-- #masthead -->


<div id="content" class="site-content">
