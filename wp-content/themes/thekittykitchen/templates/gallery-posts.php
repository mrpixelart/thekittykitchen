<section>
	<div class="container">
		<?php
			//WordPress loop for custom post type
		$my_query = new WP_Query('post_type=recipe&posts_per_page=-1');
		while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<div class="row">
			<div class="col-sm-4">
				<a href="<?php the_permalink(); ?>">
					<?php
					if ( has_post_thumbnail() ) { 
						the_post_thumbnail('large', array('class' => 'img-responsive'));
					}  
					?>
				</a>
			</div>
		</div>
		<hr>
	<?php endwhile;  wp_reset_query(); ?>

</div>
</section>


