<?php
/**
 * The Template for displaying Categories
 *
 * @package thekittykitchen
 */

get_header(); ?>

<div class="container">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



					<h2 class="page-title bump-top-md">
						<?php
						single_cat_title();
						?>
					</h2>
					<hr>
					<?php
					while ( have_posts() ) : the_post(); 
					get_template_part( 'templates/content', 'page' ); 
					endwhile; 
					?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div>
<?php get_footer(); ?>
