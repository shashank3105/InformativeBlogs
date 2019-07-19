<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Informative_Blogs
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0"/>
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>	
</head>

<body <?php body_class(); ?>>
<?php
	// wp_body_open hook from WordPress 5.2
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	}
?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'informative-blogs' ); ?></a>

	<header id="masthead" class="site-header fixed-top">
		<div class="container">
			<div class="header-inner">
				<div class="site-branding">
					<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title h1"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
					?>
				</div><!-- .site-branding -->			
				<nav id="site-navigation" class="main-navigation navbar navbar-expand-lg navbar-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
			</div><!-- .header-inner -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
				<?php if ( get_header_image() ) : ?>
					<div class="header-image col-lg-12">
						<img src="<?php echo esc_url( get_header_image() ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>" />
					</div>
				<?php endif; ?>

