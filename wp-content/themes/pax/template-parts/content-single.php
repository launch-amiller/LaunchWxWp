<?php
/**
 * Template part for displaying single posts.
 *
 * @package Pax
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h1>template-parts/content-single</h1>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php pax_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pax' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php pax_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

