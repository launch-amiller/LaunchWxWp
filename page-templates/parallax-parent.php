<?php
/**
 * Template Name: Parallax Parent
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 * @package Pax
 */

get_header('parallax'); 
//$featuredImgSrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );

?>

<?php 
	//$featuredImgSrc = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
	/*
?>

	<div class="wallpaper" style="background: url(<?php echo $featuredImgSrc[0]; ?> );">wallpaper</div>

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
<? */ ?>
	 
<?php
	$args = array(
		'sort_order' => 'asc',
		'sort_column' => 'menu_order',
		'hierarchical' => 1,
		'exclude' => '',
		'include' => '',
		'meta_key' => '',
		'meta_value' => '',
		'authors' => '',
		'child_of' => 0,
		'parent' => -1,
		'exclude_tree' => '',
		'number' => '',
		'offset' => 0,
		'post_type' => 'page',
		'post_status' => 'publish'
	); 
	$pages = get_pages($args);
	$i = 1; 
	foreach ( $pages as $page ) {
		if($page->post_parent == $post->ID  && $page->post_status == 'publish') {
			$featuredImgSrc = wp_get_attachment_image_src( get_post_thumbnail_id($page->ID), array( 5600,1000 ), false, '' );
			//echo '<section id="slide-" class="child-wrapper homeSlide" style="background: url(' . $featuredImgSrc[0] . ');">';
			$meta = get_post_meta($page->ID);
			?>
			<?php if($meta['_parallax_style'][0] == 'scrollUp') { ?>
				<!-- SECTION 1 -->
				<section id="slide-<?=$i?>" class="child-wrapper homeSlide">
					<div class="bcg"
				        data-center="background-position: 50% 0px;"
				        data-top-bottom="background-position: 50% -100px;"
				        data-anchor-target="#slide-<?=$i?>"
				        style="background-image: url(<?=$featuredImgSrc[0]?>);">
				        <div class="hsContainer">
				            <div class="hsContent"
				                data-center="opacity: 1"
				                data-106-top="opacity: 0"
				                data-anchor-target="#slide-<?=$i?> .section-content"
				            >
				            	<div class="section-content">
				                	<?=$page->post_content;?>
				                </div>
				            </div>
				        </div>
				    </div>
			   </section>
			<?php } elseif($meta['_parallax_style'][0] == 'bgColor') { ?>
				<!-- SECTION 2 -->
				<section id="slide-<?=$i?>" class="child-wrapper homeSlide">
				    <div class="bcg"
				        data-0="background-color:rgb(1,27,59);"
				        data-top="background-color:(0,0,0);"
				        data-anchor-target="#slide-<?=$i?>"
				    >
				        <div class="hsContainer">
				            <div class="hsContent">
				                <div
				                    data--200-bottom="opacity: 0"
				                    data-center="opacity: 1"
				                    data-206-top="opacity: 1"
				                    data-106-top="opacity: 0"
				                    data-anchor-target="#slide-<?=$i?> .section-content"
				                    class="section-content">
				                    <?=$page->post_content;?>
				                </div>
				            </div>
				        </div>
				    </div>
				</section>
			<?php } elseif($meta['_parallax_style'][0] == 'scrollHorizontally') { ?>
				<!-- SECTION 3 -->
				<section id="slide-<?=$i?>" class="homeSlide">
				    <div class="bcg"
				        data-center="background-position: 0px 50%;"
				        data-bottom-top="background-position: 0px 40%;"
				        data-top-bottom="background-position: -40px 50%;"
				        data-anchor-target="#slide-<?=$i?>"
				        style="background-image: url(<?=$featuredImgSrc[0]?>);">
				        <div class="hsContainer">
				            <div class="hsContent">
				                <div class="section-content plaxEl"
				                    data-106-top="opacity: 0"
				                    data-bottom="opacity: 1; position: fixed; top: 206px; width: 100%; left: 0;"
				                    data--30p-top="opacity: 1;"
				                    data--60p-top="opacity: 0;"
				                    data-anchor-target="#slide-<?=$i?>"
				                >
				                    <?=$page->post_content;?>
				                </div>
				            </div>
				        </div>
				    </div>
				</section>
			<?php } elseif($meta['_parallax_style'][0] == 'curtain') { ?>
				<!-- SECTION 4 -->
				<section id="slide-<?=$i?>" class="homeSlide homeSlideTall">
				    <div class="bcg"
				        data-center="background-position: 50% 0px;"
				        data-bottom-top="background-position: 50% 100px;"
				        data-top-bottom="background-position: 50% -100px;"
				        data-anchor-target="#slide-<?=$i?>"
				        style="background-image: url(<?=$featuredImgSrc[0]?>);">
				        <div class="curtainContainer">
				            <div class="curtain"
				                data-bottom-top="opacity: 0"
				                data-106-top="height: 1%; top: -10%; opacity: 0;"
				                data-center="height: 100%; top: 0%; opacity: 0.5"
				                data-anchor-target="#slide-<?=$i?>">
				            </div>
				            <div class="copy section-content"
				                data-bottom-top="opacity: 0"
				                data--100-bottom="opacity: 0"
				                data--280-bottom="opacity: 1;"
				                data-280-top="opacity: 1;"
				                data-106-top="opacity: 0;"
				                data-anchor-target="#slide-<?=$i?> .section-content">
				                <?=$page->post_content;?>
				            </div>
				 
				        </div>
				    </div>
				</section>
			<?php } elseif($meta['_parallax_style'][0] == 'crossFade') { ?>
				<!-- SECTION 5 -->
				<section id="slide-<?=$i?>" class="homeSlide homeSlideTall2">
				    <div class="bcg" style="background-image: url(<?=$featuredImgSrc[0]?>);">&nbsp;</div>
				    <div class="bcg bcg2"
				        data-bottom-top="opacity: 0;"
				        data--33p-top="opacity: 0;"
				        data--66p-top="opacity: 1;"
				        data-anchor-target="#slide-<?=$i?>"
				        style="background: url(<?=$featuredImgSrc[0]?>);">
				        <div class="hsContainer">
				            <div class="hsContent"
				                data-bottom-top="opacity: 0;"
				                data-center="opacity: 1"
				                data-anchor-target="#slide-<?=$i?>">
				                <?=$page->post_content;?>
				            </div>
				        </div>
				    </div>
				    <div class="bcg bcg3"
				        data-300-bottom="opacity: 0;"
				        data-100-bottom="opacity: 1;"
				        data-anchor-target="#slide-<?=$i?>">
				        <div class="hsContainer">
				            <div class="hsContent"
				                data-100-bottom="opacity: 0;"
				                data-bottom="opacity: 1;"
				                data-anchor-target="#slide-<?=$i?>">
				                <h2>The End</h2>
				            </div>
				        </div>
				    </div>
				</section>
			<?php } ?>
			<?php
				/*$meta = get_post_meta($page->ID);
				echo '<pre>';
				print_r($page);
				print_r($meta);
				echo '</pre>';*/
				 
				
			$i++;
		}
	  }
?>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>


 
