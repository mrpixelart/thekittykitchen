<section>
	<h4><?php the_field('recipe_name'); ?></h4>
	<ul class="list-inline unstyled-list">
		<li><?php the_field('prep_time'); ?></li>
		<li><?php the_field('cook_time'); ?></li>
		<li><?php the_field('servings'); ?></li>
		<li><?php the_field('calories'); ?></li>
	</ul>
	<div class="ui segment">  
		<?php if( have_rows('ingredients') ): ?>
			<?php while( have_rows('ingredients') ): the_row();
			// vars	                       
			$amount = get_sub_field('ingredient_amount');
			$name 	= get_sub_field('ingredient_name');	                   
			?>
			<ul class="list-inline">
				<li><span class="bump-right-sm"><?php echo $amount ?></span> <?php echo $name ?></li>
				<li></li>
			</ul>		
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
	<p><?php the_field('instructions'); ?></p>			        

</section>