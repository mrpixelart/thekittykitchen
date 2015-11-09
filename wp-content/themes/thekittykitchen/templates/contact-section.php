<section>
	<div class="container">
		<div class="row">			
			<div class="col-sm-3 col-sm-push-9">	                
				<div class="ui segment"> 
					<img class="img-responsive" src="<?php the_field('about_picture');?>">
					<h4 class="widget-title bump-top-xxs">About</h4> 
					<p class="primary-text"><?php the_field('about_description'); ?></p>              		    		
				</div>			  
			</div>
			<div class="col-sm-7 col-sm-offset-1 col-sm-pull-4 ">
				<?php the_content(''); ?>
			</div>
		</div>
	</div>
</section>