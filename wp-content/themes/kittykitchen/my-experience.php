<?php
/**
 * Template Name: My Experience
 *
 * @package mr-consulting
 *
 */

get_header(); 

?>

<div data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/images/collaboration.jpg" class="hero-image-header" data-parallax="scroll">
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

<div class="container">
	<div class="row section-padding">
		<div class="col-sm-16">
			<h2 class="section-header center"><?php the_field('research_headline'); ?></h2>
			<div class="ui divider"></div>
		</div>

		<?php if( have_rows('research_section') ): ?>
			<?php while( have_rows('research_section') ): the_row(); 

			// vars
			$researchHeadline = get_sub_field('section_headline');
			$researchBody = get_sub_field('section_body');
			$researchImage = get_sub_field('section_image');
			$researchCta = get_sub_field('section_cta');

			?>

			<div class="col-sm-8">
				<!-- 				<img class="ui image centered" src="<?php echo $researchImage; ?>"> -->
				<h3><?php echo $researchHeadline; ?></h3>
				<p><?php echo $researchBody; ?></p>
				<a class="" href=""><?php echo $researchCta; ?></a>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
</div>

<div class="hero-solid">
	<div class="container">
		<div class="row">
			<div class="col-lg-16">
				<div class="hero-2">
					<h2 class="hero-cta"><?php the_field('collaboration_headline'); ?></h2>
					<div class="ui divider"></div>
					<p class="lead"> <?php the_field('collaboration_body'); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row section-padding">
		<div class="col-sm-16">
			<h2 class="section-header center"><?php the_field('foundation_title'); ?></h2>
			<div class="ui divider"></div>
		</div>

		<?php if( have_rows('foundation_section') ): ?>
			<?php while( have_rows('foundation_section') ): the_row(); 

			// vars
			$foundationHeadline = get_sub_field('foundation_headline');
			$foundationBody = get_sub_field('foundation_body');
			$foundationImage = get_sub_field('foundation_image');
			$foundationCta = get_sub_field('foundation_cta');

			?>

			<div class="col-sm-8">
				<!-- <img class="ui image centered" src="<?php echo $foundationImage; ?>"> -->
				<h3><?php echo $foundationHeadline; ?></h3>
				<p><?php echo $foundationBody; ?></p>
				<a class="" href=""><?php echo $foundationCta; ?></a>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<div class="col-sm-16">
		<div class="row">
			<div class="ui segment bump-top">
				<div class="col-md-6">
					<img class="ui image img-center" src="<?php the_field('foundation_job_image'); ?>">
				</div>
				<div class="col-md-10">
					<h4 class="bump-top"><?php the_field('foundation_job_title'); ?></h4>
					<div class="sub header"><?php the_field('foundation_job_date'); ?></div>
					<div class="ui divider"></div>
					<p><?php the_field('foundation_job_description'); ?></p>
					<p class="description"><em><?php the_field('foundation_job_work'); ?></em></p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="container">
	<div class="row section-padding">
		<div class="col-sm-16">
			<h2 class="section-header center"><?php the_field('growth_title'); ?></h2>
			<div class="ui divider"></div>
		</div>

		<?php if( have_rows('growth_section') ): ?>
			<?php while( have_rows('growth_section') ): the_row(); 

			// vars
			$growthHeadline = get_sub_field('growth_headline');
			$growthBody = get_sub_field('growth_body');
			$growthImage = get_sub_field('growth_image');
			$growthCta = get_sub_field('growth_cta');

			?>

			<div class="col-sm-8">
				<!-- <img class="ui image centered" src="<?php echo $growthImage; ?>"> -->
				<h3><?php echo $growthHeadline; ?></h3>
				<p><?php echo $growthBody; ?></p>
				<a class="" href=""><?php echo $growthCta; ?></a>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<div class="col-sm-16">
		<div class="row">
			<div class="ui segment bump-top">
				<div class="col-sm-16 col-md-6 ">
					<img class="ui image img-center" src="<?php the_field('growth_job_image'); ?>">
				</div>
				<div class="col-md-10">
					<h4 class="bump-top"><?php the_field('growth_job_title'); ?></h4>
					<div class="sub header"><?php the_field('growth_job_date'); ?></div>
					<div class="ui divider"></div>
					<p><?php the_field('growth_job_description'); ?></p>
					<p class="description"><em><?php the_field('growth_job_work'); ?></em></p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="container">
	<div class="row section-padding">
		<div class="col-sm-16">
			<h2 class="section-header center"><?php the_field('leadership_title'); ?></h2>
			<div class="ui divider"></div>
		</div>

		<?php if( have_rows('leadership_section') ): ?>
			<?php while( have_rows('leadership_section') ): the_row(); 

			// vars
			$leadershipHeadline = get_sub_field('leadership_headline');
			$leadershipBody = get_sub_field('leadership_body');
			$leadershipImage = get_sub_field('leadership_image');
			$leadershipCta = get_sub_field('leadership_cta');

			?>

			<div class="col-sm-8">
				<!-- <img class="ui image centered" src="<?php echo $leadershipImage; ?>"> -->
				<h3><?php echo $leadershipHeadline; ?></h3>
				<p><?php echo $leadershipBody; ?></p>
				<a class="" href=""><?php echo $leadershipCta; ?></a>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
	<div class="col-sm-16">
		<div class="row">
			<div class="ui segment bump-top">
				<div class="col-md-6">
					<img class="ui image img-center" src="<?php the_field('leadership_job_image'); ?>">
				</div>
				<div class="col-md-10">
					<h4 class="bump-top"><?php the_field('leadership_job_title'); ?></h4>
					<div class="sub header"><?php the_field('leadership_job_date'); ?></div>
					<div class="ui divider"></div>
					<p><?php the_field('leadership_job_description'); ?></p>
					<p class="description"><em><?php the_field('leadership_job_work'); ?></em></p>
				</div>
			</div>
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
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php get_footer(); ?>
