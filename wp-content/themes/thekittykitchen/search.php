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
				<?php
			// Start the loop.
				while ( have_posts() ) : the_post(); ?>
		<?php
		global $query_string;

		$query_args = explode("&", $query_string);
		$search_query = array();

		foreach($query_args as $key => $string) {
		$query_split = explode("=", $string);
		$search_query[$query_split[0]] = urldecode($query_split[1]);
		} // foreach

		$search = new WP_Query($search_query);
		?>
			<?php
global $wp_query;
$total_results = $wp_query->found_posts;
?>
				<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'templates/content', 'search' );

			// End the loop.
				endwhile;

		// If no content, include the "No posts found" template.
				else :
					get_template_part( 'templates/content', 'none' );

				endif;
				?>
			</div>

		</div>
	</div>
</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>
