<?php
/**
 * Template Name: My Results
 *
 * @package mr-consulting
 *
 */

get_header(); 

?>

<div data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/images/build.jpg" class="hero-image-header" data-parallax="scroll">
	<div class="container">
		<div class="row hero">
			<div class="col-sm-16">
				<h1 class="hero-cta"><?php the_field('hero_headline'); ?></h1>
				<div class="ui divider"></div>
				<p class="lead gold"><?php the_field('hero_description'); ?></p>
				<!-- <div class="huge ui inverted teal button "><?php the_field('hero_button'); ?></div> -->
			</div>
		</div>
	</div>
</div>

<div id="perfect-hair" class="container">
	<div class="row section-padding">
		<div class="col-sm-16">
			<h2 class="section-header center"><?php the_field('perfect_hair_title'); ?></h2>
			<div class="ui divider"></div>
		</div>
		<div class="col-md-8">
			<h3>Project Purpose</h3>
			<p><?php the_field('perfect_hair_purpose'); ?></p>
		</div>

		<div class="col-md-8">
			<h3>The Problem</h3>
			<p><?php the_field('perfect_hair_problem'); ?></p>
		</div>


		<div class="col-sm-16">
			<img class="ui image centered hidden-xs" src="<?php the_field('perfect_hair_image'); ?>">
			<img class="ui image centered visible-xs" src="<?php the_field('perfect_hair_image_2'); ?>">
		</div>
		<div class="col-sm-16 col-md-10">
			<div class="ui segment bump-top ">
				<div class="row">
					<div class="col-md-8">
						<h3 class="ui header ">User Needs</h3>
						<p><?php the_field('perfect_hair_needs'); ?></p>
					</div>

					<div class="col-md-8">
						<h3 class="ui header mobile-bump">Business Goals</h3>
						<p><?php the_field('perfect_hair_goals'); ?></p>
					</div>

					<div class="col-sm-16">
						<div class="ui divider"></div>
						<h3 class="ui header notop">The Solution</h3>
						<p><?php the_field('perfect_hair_solution'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-16 col-md-6">
			<h3 class="bump-top">My Role</h3>
			<p><?php the_field('perfect_hair_role'); ?></p>
			<p><?php the_field('perfect_hair_methods'); ?></p>
			<h3 class="">Tools Used</h3>
			<div class="ui tiny images img-spacer">
				<?php if( have_rows('perfect_hair_tools') ): ?>
					<?php while( have_rows('perfect_hair_tools') ): the_row(); 

					$toolImage = get_sub_field('tool_image');

					?>
					<img class="img-responsive" src="<?php echo $toolImage ?>">

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</div>

<div id="franchise" class="container">
	<div class="row section-padding">
		<div class="col-sm-16">
			<h2 class="section-header center"><?php the_field('franchise_title'); ?></h2>
			<div class="ui divider"></div>
		</div>
		<div class="col-md-8">
			<h3>Project Purpose</h3>
			<p><?php the_field('franchise_purpose'); ?></p>
		</div>

		<div class="col-md-8">
			<h3>The Problem</h3>
			<p><?php the_field('franchise_problem'); ?></p>
		</div>
		
		
		<div class="col-sm-16">
			<img class="ui image centered hidden-xs" src="<?php the_field('franchise_image'); ?>">
			<img class="ui image centered visible-xs" src="<?php the_field('franchise_image_2'); ?>">
		</div>
		<div class="col-sm-16 col-md-10">
			<div class="ui segment bump-top">
				<div class="row">
					<div class="col-md-8">
						<h3 class="ui header ">User Needs</h3>
						<p><?php the_field('franchise_needs'); ?></p>
					</div>

					<div class="col-md-8">
						<h3 class="ui header mobile-bump">Business Goals</h3>
						<p><?php the_field('franchise_goals'); ?></p>
					</div>

					<div class="col-sm-16">
						<div class="ui divider"></div>
						<h3 class="ui header notop">The Solution</h3>
						<p><?php the_field('franchise_solution'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-16 col-md-6">
			<h3 class="bump-top">My Role</h3>
			<p><?php the_field('franchise_role'); ?></p>
			<p><?php the_field('franchise_methods'); ?></p>
			<h3 class="">Tools Used</h3>
			<div class="ui tiny images img-spacer">
				<?php if( have_rows('franchise_tools') ): ?>
					<?php while( have_rows('franchise_tools') ): the_row(); 

					$franchiseToolImage = get_sub_field('franchise_tool_image');

					?>
					<img class="img-responsive" src="<?php echo $franchiseToolImage ?>">

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</div>

<div id="bird-slots" class="container">
	<div class="row section-padding">
		<div class="col-sm-16">
			<h2 class="section-header center"><?php the_field('slots_title'); ?></h2>
			<div class="ui divider"></div>
		</div>
		<div class="col-md-8">
			<h3>Project Purpose</h3>
			<p><?php the_field('slots_purpose'); ?></p>
		</div>

		<div class="col-md-8">
			<h3>The Problem</h3>
			<p><?php the_field('slots_problem'); ?></p>
		</div>
		
		
		<div class="col-sm-16">
			<img class="ui image centered hidden-xs" src="<?php the_field('slots_image'); ?>">
			<img class="ui image centered visible-xs" src="<?php the_field('slots_image_2'); ?>">
		</div>
		<div class="col-sm-16 col-md-10">
			<div class="ui segment bump-top ">
				<div class="row">
					<div class="col-md-8">
						<h3 class="ui header">User Needs</h3>
						<p><?php the_field('slots_needs'); ?></p>
					</div>

					<div class="col-md-8">
						<h3 class="ui header mobile-bump">Business Goals</h3>
						<p><?php the_field('slots_goals'); ?></p>
					</div>

					<div class="col-sm-16">
						<div class="ui divider"></div>
						<h3 class="ui header notop">The Solution</h3>
						<p><?php the_field('slots_solution'); ?></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-16 col-md-6">
			<h3 class="bump-top">My Role</h3>
			<p><?php the_field('slots_role'); ?></p>
			<p><?php the_field('slots_methods'); ?></p>
			<h3 class="">Tools Used</h3>
			<div class="ui tiny images img-spacer">
				<?php if( have_rows('slots_tools') ): ?>
					<?php while( have_rows('slots_tools') ): the_row(); 

					$slotsToolImage = get_sub_field('slots_tool_image');

					?>
					<img class="img-responsive" src="<?php echo $slotsToolImage ?>">

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</div>

<div class="container">

	<div class="section-padding">
		<h2 class="section-header center"><?php the_field('contact_headline'); ?></h2>
		<div class="ui divider"></div>

		<div class="row">
			<?php if( have_rows('contact_section') ): ?>
				<?php while( have_rows('contact_section') ): the_row(); 

				// vars
				$connectHeadline = get_sub_field('connect_headline');
				$connectBody = get_sub_field('connect_body');

				?>


				<div class="col-md-8">
					<h3><?php echo $connectHeadline; ?></h3>
					<p><?php echo $connectBody; ?></p>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>
	</div>


	<div class="row">
		<div class="col-md-8">
			<p><?php the_content(); ?></p>
		</div>

		<div class="col-md-8 bump-top">
			<div class="ui segment">
				<div class="content">
					<img class="ui image centered" src="<?php echo the_field('contact_image') ?>">
					<h3 class="ui header notop"><?php the_field('contact_title'); ?></h3>
					<p><?php the_field('contact_info'); ?></p>
					<div class="center">
						<a class="btn btn-4 btn-4a icon-arrow-right" href="<?php the_field('contact_link'); ?>"><?php the_field('contact_cta'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php get_footer(); ?>

