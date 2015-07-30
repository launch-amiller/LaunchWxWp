<?php
/**
 * Template part for displaying posts.
 *
 * @package Pax
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<div><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></div>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php pax_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				/*wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'pax' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )*/
				wp_kses( __( 'Continue reading %s <div class="meta-nav">&rarr;</div>', 'pax' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<div>', '</div>', false )
			) );
		?>

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
