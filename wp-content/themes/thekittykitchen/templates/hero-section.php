<div class="hero-primary">
	<div class="container">
		<div class="row hero-lg">
			<div class="col-sm-9 bump-top-sm">
				<h1 class="hero-title"><?php the_field('hero_headline'); ?></h1>
				<div class="ui divider"></div>
				<p class="hero-lead"><?php the_field('hero_description'); ?></p>
				<?php if( get_field('hero_cta') ): ?>
					<a href="<?php the_field('hero_link'); ?>" class="huge ui button find-a-store-btn"><?php the_field('hero_cta'); ?></a>
				<?php endif; ?>
			</div>
			<div class="col-sm-3 bump-top-md">
				<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
					<div>
						<input type="text" size="12" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Search" class="xs-text" />
						<input type="submit" id="searchsubmit" value="Search" class="btn" />
					</div>
				</form>
			</div>
		</div>
	</div>
</div>