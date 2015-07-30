<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Pax
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php 
	wp_head();
	do_action('wp_enqueue_parallax_scripts'); 
?>
</head>

<body <?php body_class(); ?>>
	
<?php
	$menuParameters = array(
	  'container'       => false,
	  'echo'            => false,
	  'items_wrap'      => '%3$s',
	  'depth'           => 0,
	);
?>
	
<div id="page-wrapper">

	<header role="banner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
		<?php bloginfo( 'description' ); ?>

		<nav role="navigation">
			<!--<button aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'pax' ); ?></button>-->
			<?php 
				//wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); 
				echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
			?>
		</nav>
	</header>
	
	<main>
	<div id="content">
