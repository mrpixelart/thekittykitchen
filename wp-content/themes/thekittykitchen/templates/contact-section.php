<section>
	<div class="container">
		<div class="row">			
			<div class="col-sm-4 col-sm-push-8">	                
                <div class="ui segment">    
                	<h4><?php the_field('contact_headline'); ?></h4> 
                	<hr>               	
						<?php if( have_rows('location_phone_number') ): ?>
			                <?php while( have_rows('location_phone_number') ): the_row();

			                // vars	                       
			                $locationName        = get_sub_field('contact_location_name');
			                $phoneNumber         = get_sub_field('contact_phone_number');	                   
			                ?>
			                		<ul class="list-inline">
			                		<li class="contact-location-name"><strong><?php echo $locationName ?></strong></li>
			                		<li class="pull-right"><a href="tel:<?php echo $phoneNumber ?>"><?php echo $phoneNumber ?></a></li>
			                		</ul>				                
                  			<?php endwhile; ?>
		    			<?php endif; ?>			    		
		    	</div>			  
			</div>
			<div class="col-sm-7 col-sm-offset-1 col-sm-pull-5 ">
				<?php the_content(''); ?>
			</div>
		</div>
	</div>
</section>