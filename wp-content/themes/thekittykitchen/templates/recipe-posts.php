<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<?php
			//WordPress loop for custom post type
				$my_query = new WP_Query('post_type=recipe&posts_per_page=-1');
				while ($my_query->have_posts()) : $my_query->the_post(); ?>

				<div class="ui segment">
					<div class="row">
						<div class="col-sm-5">
							<?php
							if ( has_post_thumbnail() ) { 
								the_post_thumbnail('large', array('class' => 'img-responsive noleft'));
							}  
							?>
						</div>
						<div class="col-sm-7">

							<h3 class="lg-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php the_advanced_excerpt('length=28&length_type=words&no_custom=1&ellipsis=%26hellip;&exclude_tags=img,p,strong'); ?></p>
							<h4 class="widget-title nobottom bump-top-xxs">Categories</h4>  
							<?php the_category($post_id); ?>
						</div>
					</div>
				</div>
			<?php endwhile;  wp_reset_query(); ?>
		</div>

		<div class="col-sm-3">
			<?php get_sidebar(); ?>
		</div>
	</div>


</div>

</section>




