<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package thekittykitchen
 */

get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">

				<header class="page-header">
					<h2 class="page-title"><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
				</header><!-- .page-header -->
				<hr>
				<?php if ( have_posts() ) : ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'templates/content', 'search' );
				?>

			<?php endwhile; ?>



		<?php else : ?>

			<?php get_template_part( 'templates/content', 'none' ); ?>

		<?php endif; ?>
	</div>

</div>
</div>
</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
