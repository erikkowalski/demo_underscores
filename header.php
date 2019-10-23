<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<link rel="stylesheet" href="https://use.typekit.net/fvk0zxr.css">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'demo' ); ?></a>

	<nav id="masthead" class="navbar navbar-light bg-light ">

			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<?php
			else :
				?>
				<p class=" navbar-brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$demo_description = get_bloginfo( 'description', 'display' );
			if ( $demo_description || is_customize_preview() ) :
				?>
									<p class="site-description"><?php echo $demo_description; /* WPCS: xss ok. */ ?></p>





			<?php endif; ?>


		<div id="navbarNav" class="nav">


					<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>


		</div><!-- #site-navigation -->
	</nav><!-- #masthead -->

	<div id="content" class="site-content">
