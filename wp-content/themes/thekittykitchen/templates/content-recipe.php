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
	<?php comments_template(); ?>	
	<header class="entry-header">
	</header><!-- .entry-header -->
	<div class="row">
		<div class="col-md-10 col-lg-9">
			<div class="row">
				<div class="col-md-2">
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
				<div class="col-md-10">
					<div class="row">
						<div class="col-xs-12">	
							<div class="ui segment">  
								<h2 class="xl-text"><?php the_title(); ?></h2>
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
								<div class="entry-content nudge-all-xs">	
									<p><?php the_content(); ?>	</p>

								</div><!-- .entry-content -->
							</div>
							<div class="ui segment">
								<?php get_template_part( 'templates/recipe' ); ?>				
							</div>				
						</div>	
					</div>		
				</div>
			</div>
		</div>


		<div class="col-md-2 col-lg-3">
			<?php get_sidebar(); ?>
		</div>	
	</div>
</article><!-- #post-## -->


