<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Pax
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
