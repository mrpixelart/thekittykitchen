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
						<div class="col-sm-4">
							<?php
							if ( has_post_thumbnail() ) { 
								the_post_thumbnail('large', array('class' => 'img-responsive noleft'));
							}  
							?>
						</div>
						<div class="col-sm-8">

							<h3 class="sm-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p class="xxs-text"><?php the_advanced_excerpt('length=30&length_type=words&no_custom=1&ellipsis=%26hellip;&exclude_tags=img,p,strong'); ?></p>
							<h4 class="widget-title nobottom">Tags</h4>
							<?php wp_tag_cloud('smallest=10&largest=10&number=10&orderby=name&format=flat'); ?>

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




