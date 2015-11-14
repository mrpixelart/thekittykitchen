<?php
/**
 * The Template for displaying Categories
 *
 * @package thekittykitchen
 */

get_header(); ?>

<div class="container">

	<div id="primary" class="content-area">
		<div class="row">
			<div class="col-sm-9">
				<h2 class="page-title bump-top-md">
					<?php
					single_cat_title();
					?>
				</h2>
				<hr>
			</div>
			<div class="col-sm-3 bump-top-bottom-xl">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
					<div>
						<input type="text" size="12" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Search" class="xs-text" />
						<input type="submit" id="searchsubmit" value="Search" class="btn" />
					</div>
				</form>
			</div>
		</div>
		<div class="row">

			<div class="col-md-10 col-lg-9">


				<?php $loop = new WP_Query( array( 'post_type' => 'recipe', 'posts_per_page' => '10', 'category_name' => single_cat_title('', false)) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
						<div class="col-md-10  bump-bottom-md" >
							<div class="ui segment">
								<div class="row">
									<div class="col-xs-12">	

										<h3 class="lg-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
										<div class="entry-content ">	
											<p><?php the_content(); ?>	</p>				
										</div><!-- .entry-content -->				
									</div>				
								</div>	
							</div>
						</div>		
					</div>
				<?php endwhile; ?>
			</div>


			<div class="col-md-2 col-lg-3" >
				<?php get_sidebar(); ?>
			</div>	
		</div>



	</div><!-- #primary -->

</div>
<?php get_footer(); ?>
