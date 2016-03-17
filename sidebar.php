<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sfp
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<?php
//		if (is_page('unternehmen')){
//			wp_nav_menu(array('menu'=>'unternehmen'));
//		} elseif (is_tree(6)) {
//			wp_nav_menu(array('menu'=>'unternehmen'));
//		} elseif (is_page('projekte')) {
//			wp_nav_menu(array('menu'=>'projekte'));
//		} elseif (is_tree(34)) {
//			wp_nav_menu(array('menu'=>'projekte'));
//		} elseif (is_page('karriere')) {
//			wp_nav_menu(array('menu'=>'karriere'));
//		} elseif (is_tree(63)) {
//			wp_nav_menu(array('menu'=>'karriere'));
//		} elseif (is_page('leistungen')) {
//			wp_nav_menu(array('menu'=>'leistungen'));
//		} elseif (is_tree(12)) {
//			wp_nav_menu(array('menu'=>'leistungen'));
//		} elseif (is_page('kontakt')) {
//			wp_nav_menu(array('menu'=>'kontakt'));
//		}
	?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
