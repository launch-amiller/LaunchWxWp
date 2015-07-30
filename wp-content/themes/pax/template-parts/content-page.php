<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Pax
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--<header class="entry-header">
		Title for the page/post goes here if needed
		<?php 
			the_title();
			/*the_title( '<h1 class="entry-title">', '</h1>' );*/
		?>
	</header>-->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="entry-page-links">' . esc_html__( 'Pages:', 'pax' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<!--<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'pax' ), '<span class="edit-link">', '</span>' ); ?>
	</footer>-->
</article>

