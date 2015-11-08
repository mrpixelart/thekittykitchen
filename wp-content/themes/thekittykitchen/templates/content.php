<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package thekittykitchen
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<header class="entry-header nudge-bottom-sm">
	</header><!-- .entry-header -->
	<div class="row">

		<div class="col-md-10 col-lg-9">
		<?php
			//WordPress loop for custom post type
		$my_query = new WP_Query('post_type=recipe&posts_per_page=-1');
		while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<div class="row">
				<div class="col-md-2 " >
					<div class="hidden-xs hidden-sm">
						<div class="day "><?php the_time('d'); ?></div>
						<div class="month"><?php the_time('M'); ?> <?php the_time('Y'); ?></div>
						<!-- <span class="year"><?php the_time('Y'); ?></span> -->
						<!-- <p class="date"><?php the_date(); ?></p> -->
						<hr>
						<div class="right post-links">
							<p><i class="ui user icon"></i> BY: <?php the_author(); ?></p>
							<p class="inline"><i class="ui folder open outline icon"></i> POSTED IN <?php the_category($post_id); ?></p>
							<p><i class="ui comments outline icon"></i> WITH <?php comments_number(); ?></p>
							<p><a href="<?php the_permalink(); ?>"><i class="ui linkify icon"></i> Permalink</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-10 " >
					<div class="row">
						<div class="col-xs-12">	

							<h3><?php the_title(); ?></h3>
							<div class=" visible-xs visible-sm">
								<div class="inline post-links">
									<span><i class="ui user icon"></i>BY: <?php the_author(); ?></span>
									<span><i class="ui folder open outline icon"></i> POSTED IN <?php the_category($post_id); ?></span>
									<span><i class="ui comments outline icon"></i> WITH <?php comments_number(); ?></span>
									<span><a href="<?php the_permalink(); ?>"><i class="ui linkify icon"></i> Permalink</a></span>
								</div>
							</div>
							<div class="img-news-post">
								<?php
								if ( has_post_thumbnail() ) { 
									the_post_thumbnail('large', array('class' => 'img-responsive post-image'));
								}  
								?>
							</div>		
							<div class="entry-content inline-comment-bubble">	
								<p><?php the_content(); ?>	</p>				
							</div><!-- .entry-content -->				
							<hr>
						</div>				
					</div>	
				</div>		
			</div>
				<?php endwhile;  wp_reset_query(); ?>
		</div>
	

	<div class="col-md-2 col-lg-3 " >
		<?php get_sidebar(); ?>
	</div>	
</div>

</article><!-- #post-## -->


