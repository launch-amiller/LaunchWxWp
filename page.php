<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Pax
 */

get_header(); 
$featuredImgSrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );

?>


	<!--<div class="wallpaper" style="<?php echo ($featuredImgSrc[0]) ? 'background: url('.$featuredImgSrc[0].');': ''; ?>">
		sample wallpaper call
	</div>-->

	<div class="content-area">
		<main role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; ?>

		</main>
	</div>


<?php get_sidebar(); ?>
<?php get_footer(); ?>


