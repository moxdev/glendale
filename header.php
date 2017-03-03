<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Glendale
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'glendale' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="masthead-wrapper">
			<div class="site-branding">

				<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a><!-- #logo -->

				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation" role="navigation">

			    <?php $leasing = get_field( 'leasing', 'option' ); ?>
			    <?php if ( $leasing ) : ?>

			    <div class="masthead-phone">
			        <span>Call now to schedule a personal tour: </span><a href="tel:<?php echo $leasing ?>"><?php echo $leasing; ?></a>
			    </div>

			    <?php endif; ?>

				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">

				<?php esc_html_e( 'Menu +', 'glendale' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->

		</div><!-- masthead-wrapper -->
		<div class="mobile-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'primary-menu' ) ); ?>
		</div>
	</header><!-- #masthead -->



	<div id="content" class="site-content">

		<!-- Displays the Featured Image if it exists -->
		<?php if ( function_exists( 'glendale_featured_image' ) ) {
		    glendale_featured_image();
		}

		if( is_page_template( 'page-gaithersburg.php' ) && function_exists('mm4_area_map') ) {
			mm4_area_map();
		}

		if( is_page_template( 'page-photo-gallery.php' ) && function_exists('glendale_photo_gallery') ) {
			glendale_photo_gallery();
		}

		?>

		<div class="content-wrapper">
