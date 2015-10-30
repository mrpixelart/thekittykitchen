<div class="hero-primary">
	<div class="container">
		<div class="row hero-lg">
			<div class="col-sm-10 col-sm-offset-1 center">
				<h1 class="hero-cta"><?php the_field('hero_headline'); ?></h1>
				<div class="ui divider"></div>
				<p class="nudge-bottom-xs landing-hero-description"><?php the_field('hero_description'); ?></p>
				<?php if( get_field('hero_cta') ): ?>
					<a href="<?php the_field('hero_link'); ?>" class="huge ui button find-a-store-btn"><?php the_field('hero_cta'); ?></a>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</div>