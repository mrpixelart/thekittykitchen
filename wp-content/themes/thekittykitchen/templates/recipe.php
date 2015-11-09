<h4 class="sm-text">Recipe: <?php the_field('recipe_name'); ?></h4>

<ul class="inline-list unstyled-list">
	<li class="xxs-text bump-right-xxs"><label> <i class="wait icon"></i> Prep Time </label> <span class="primary-color bump-left-xxs"><?php the_field('prep_time'); ?></span></li>
	<li class="xxs-text bump-right-xxs"><label> <i class="dashboard icon"></i> Cook Time </label> <span class="primary-color bump-left-xxs"><?php the_field('cook_time'); ?></span></li>
	<li class="xxs-text bump-right-xxs"><label> <i class="users icon"></i> Serves </label> <span class="primary-color bump-left-xxs"><?php the_field('servings'); ?></span></li>
	<li class="xxs-text bump-right-xxs"><label> <i class="info circle icon"></i> Calories </label> <span class="primary-color bump-left-xxs"><?php the_field('calories'); ?></span></li>
</ul>
<div class="ingredient-panel">
	<h4 class="xxs-text uppercase">Ingredients</h4>
	<?php if( have_rows('ingredients') ): ?>
		<?php while( have_rows('ingredients') ): the_row();
			// vars	                       
		$amount = get_sub_field('ingredient_amount');
		$name 	= get_sub_field('ingredient_name');	                   
		?>
		<div class="nudge-left-xxs">
			<ul class="unstyled-list">
				<li class="xxs-text primary-text">
					<div class="row">
						<div class="col-xs-3 col-sm-2">
							<?php echo $amount ?>
						</div>
						<div class="col-xs-9 col-sm-10">
							<?php echo $name ?>
						</div>
					</div>
				</li>
			</ul>	
		</div>

	<?php endwhile; ?>
<?php endif; ?>
</div>
<h4 class="xxs-text uppercase">Instructions</h4>
<p class="bump-top-sm"><?php the_field('instructions'); ?></p>			        

