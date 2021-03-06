<?php
/**
 * The sidebar for contact page
 *
 * If no active widgets are in the sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Lukani_Theme
 * @since Lukani 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-contact' ) ) : ?>
<div id="secondary" class="col-12 col-lg-3 sidebar-contact">
	<div class="sidebar-inner">
		<?php dynamic_sidebar( 'sidebar-contact' ); ?>
	</div>
</div>
<?php endif; ?>