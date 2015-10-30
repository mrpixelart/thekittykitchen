<section>
	<div class="container">

		<?php
			//WordPress loop for custom post type
		$my_query = new WP_Query('post_type=recipe&posts_per_page=-1');
		while ($my_query->have_posts()) : $my_query->the_post(); ?>
		<div class="row">
			<div class="col-sm-6">
				<?php
				if ( has_post_thumbnail() ) { 
					the_post_thumbnail('large', array('class' => 'img-responsive'));
				}  
				?>
			</div>
			<div class="col-sm-6">
				<div class="ui segment">
					<h3 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_advanced_excerpt('length=30&length_type=words&no_custom=1&ellipsis=%26hellip;&exclude_tags=img,p,strong'); ?>
				</div>
			</div>
		</div>
		<hr>
	<?php endwhile;  wp_reset_query(); ?>

</div>
</section>


