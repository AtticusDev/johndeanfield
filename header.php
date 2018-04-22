<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package johndeanfield
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link type="text/css" rel="stylesheet" href="//fast.fonts.net/cssapi/c53e7721-32a7-4362-a249-cfdfcc6981a9.css"/>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="row mt-3">
				<div class="col-md-6 col-sm-8 col-8 header-contact"><p class="text-primary">+44 (0) 20 7034 8284<br />
john.deanfield@gmail.com</p></div>
				<div class="col-md-6 col-sm-4 col-4 header-social"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/googleplus.png"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/linkedin.png"></div>			
			</div>

			<div class="row justify-content-center text-center site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><h1 class="mb-0">Professor John Deanfield</h1>
			   	<p>PROFESSOR OF CARDIOLOGY</p></a>
				</div>
			</div>

	    <nav id="stickynav" class="navbar navbar-expand-lg navbar-dark bg-primary">
	    	<div class="container">
			   				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon "></span>
				</button>
		   		<div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
	            <?php
	            $args = array(
	              'theme_location' => 'primary',
	              'depth'      => 2,
	              'container'  => false,
	              'menu_class'     => 'navbar-nav',
	              'walker'     => new Bootstrap_Walker_Nav_Menu()
	              );
	            if (has_nav_menu('primary')) {
	              wp_nav_menu($args);
	            }
	            ?>
	          </div>

	        </div>
		</nav>



	</header><!-- #masthead -->

	<div id="content" class="site-content">
