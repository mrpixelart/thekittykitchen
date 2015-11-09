<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package thekittykitchen
 */
?>

<?php if( is_active_sidebar('blog') ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
		<div class="ui segment">
			<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/jordana.jpg">
			<h4 class="widget-title bump-top-xxs">About</h4>
			<p class="xxs-text primary-text">Photographer/artist located in Boulder, CO. Food porn. Cat pics.</p>
		</div>
		<?php dynamic_sidebar('blog'); ?>
		<aside class="tags bump-bottom-sm">
			<h4 class="widget-title">Tags</h4>
			<?php wp_tag_cloud('smallest=10&largest=10&number=10&orderby=name&format=flat'); ?>
		</aside>
	</div>
<?php endif; ?>
<!-- #secondary -->
