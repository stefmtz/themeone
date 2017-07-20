<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themeone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Amiri|Raleway" rel="stylesheet">	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!--<a class="skip-link screen-reader-text" href="#content"><?php //esc_html_e( 'Skip to content', 'themeone' ); ?></a>-->
	
	<header id="header" class="site-header">
		<div class="site-branding">
			<div class="container">				
				<?php 
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title">
						<a href="<?php echo esc_url( home_url('/') ); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" />
						</a>
					</h1>
				<?php else : ?>
					<h2 class="site-title">
						<a href="<?php echo esc_url( home_url('/') ); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" />
						</a>
					</h2>
				<?php endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<div class="site-description"><?php echo $description; /* WPCS: xss ok.*/  ?></div>
				<?php 
				endif;  ?>
				<div class="social-header">
					<a href="https://www.facebook.com/" target="_blank">F<i class="fa fa-facebook"></i></a>
					<a href="#" target="_blank"><i class="fa fa-twitter">T</i></a>
					<a href="#" target="_blank"><i class="fa fa-google-plus">G+</i></a>
					<a href="#" target="_blank"><i class="fa fa-instagram">I</i></a>
					<a href="#" target="_blank"><i class="fa fa-pinterest">P</i></a>
					<a href="#" target="_blank"><i class="fa fa-tumblr">T</i></a>
					<a href="#" target="_blank"><i class="fa fa-rss">RSS</i></a>
				</div>
			</div><!-- .container -->
		</div><!-- .site-branding -->
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'themeone' ); ?></button>
			<?php 
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			 ?>
		</nav><!-- #site-navigation -->
	
	</header><!-- #header -->

	<div id="content" class="site-content">
