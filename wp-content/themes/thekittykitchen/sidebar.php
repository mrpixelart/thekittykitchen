<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package thekittykitchen
 */
?>

<?php if( is_active_sidebar('blog') ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar('blog'); ?>
		<aside class="tags bump-bottom-sm">
			<h4 class="widget-title">Tags</h4>
			<?php wp_tag_cloud('smallest=10&largest=10&number=10&orderby=name&format=flat'); ?>
		</aside>
	</div>
<?php endif; ?>
<!-- #secondary -->
