<?php
/**
* The Template for displaying all single posts.
*
* @package thekittykitchen
*/

get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">			

				<?php
		// Start the loop.
			while ( have_posts() ) : the_post();				

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'templates/content', get_post_format() );

			// End the loop.
			endwhile;
			?>		
	</div>
</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_footer(); ?>