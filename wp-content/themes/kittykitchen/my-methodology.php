<?php
/**
 * Template Name: My Methodology
 *
 * @package mr-consulting
 *
 */

get_header(); 

?>

<div data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/images/methods.jpg" class="hero-image-header" data-parallax="scroll">
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
				<!-- <img class="ui image centered" src="<?php echo $researchImage; ?>"> -->
				<h3><?php echo $researchHeadline; ?></h3>
				<p><?php echo $researchBody; ?></p>
				<!-- <a class="" href=""><?php echo $researchCta; ?></a> -->
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</div>
</div>

<div class="hero-solid">
	<div class="hero-3">
		<div class="container">
			<div class="row">
				<div class="col-sm-16">
					<h2 class="hero-cta center"><?php the_field('build_headline'); ?></h2>
					<div class="ui divider"></div>
				</div>
			</div>
			<div class="row">
				<?php if( have_rows('build_section') ): ?>
					<?php while( have_rows('build_section') ): the_row(); 

					// vars
					$buildHeadline = get_sub_field('build_headline');
					$buildBody = get_sub_field('build_body');
					$buildImage = get_sub_field('build_image');
					$buildCta = get_sub_field('build_cta');
					$buildAnchor = get_sub_field('build_anchor');

					?>

					<div class="col-sm-8 col-md-4">
						<a href="#<?php echo $buildAnchor; ?>"><img class="ui image centered" src="<?php echo $buildImage; ?>"></a>
						<div class="list-padding">
							<h4 class="inverted-text center"><?php echo $buildHeadline; ?></h4>
							<p><?php echo $buildBody; ?></p>

						</div>
					</div>

				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
</div>

<div id="bmc" class="container">
	<div class="row bump-top">
		<div class="col-sm-16">
			<h2 id="strategy" class="section-header center"><?php the_field('strategy_title'); ?></h2>
			<div class="ui divider"></div>
		</div>
		<?php if( have_rows('strategy_section') ): ?>
			<?php while( have_rows('strategy_section') ): the_row(); 

			// vars
			$strategyHeadline = get_sub_field('strategy_headline');
			$strategyBody = get_sub_field('strategy_body');
			$strategyImage = get_sub_field('strategy_image');
			$strategyCta = get_sub_field('strategy_cta');
			$strategySample = get_sub_field('strategy_sample');
			$strategySubtitle = get_sub_field('strategy_subtitle');

			?>

			<div class="col-sm-8">
				<img class="ui image centered" src="<?php echo $strategyImage; ?>">
				<h3><?php echo $strategyHeadline; ?></h3>
				<p><?php echo $strategyBody; ?></p>
				<a class="image-popup-vertical-fit" title="<?php echo $strategySubtitle; ?>" href="<?php echo $strategySample; ?>"><?php echo $strategyCta; ?></a>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<div class="col-sm-16 bump-top">
		<div class="ui divider"></div>
		<h3 class="center"><?php the_field('strategy_feature_headline'); ?></h3>
		<p class=""><?php the_field('strategy_feature_body'); ?></p>
		<div class="center">
			<a href="<?php the_field('strategy_feature_sample'); ?>" target="_blank" class="lead"><?php the_field('strategy_feature_cta'); ?></a>
		</div>
		<a href="<?php the_field('strategy_feature_sample'); ?>" target="_blank"><img class="ui image centered" src="<?php the_field('strategy_feature_image'); ?>"></a>
	</div>
</div>
</div>

<div class="ui segment notop nobottom">
	<div id="persona" class="container">
		<div class="row bump-top">
			<div class="col-sm-16">
				<h2 id="user" class="section-header center"><?php the_field('user_title'); ?></h2>
				<div class="ui divider"></div>
			</div>
			<?php if( have_rows('user_section') ): ?>
				<?php while( have_rows('user_section') ): the_row(); 

			// vars
				$userHeadline = get_sub_field('user_headline');
				$userBody = get_sub_field('user_body');
				$userImage = get_sub_field('user_image');
				$userCta = get_sub_field('user_cta');
				$userSubtitle = get_sub_field('user_subtitle');
				$userSample = get_sub_field('user_sample');

				?>

				<div class="col-sm-8">
					<img class="ui image centered" src="<?php echo $userImage; ?>">
					<h3><?php echo $userHeadline; ?></h3>
					<p><?php echo $userBody; ?></p>
					<a class="image-popup-vertical-fit" title="<?php echo $userSubtitle; ?>" href="<?php echo $userSample; ?>"><?php echo $userCta; ?></a>

				</div>
			<?php endwhile; ?>
		<?php endif; ?>

		<div class="col-sm-16 bump-top">
			<div class="ui divider"></div>
			<h3 class="center"><?php the_field('user_feature_headline'); ?></h3>
			<p class=""><?php the_field('user_feature_body'); ?></p>
			<div class="center">
				<a class="image-popup-vertical-fit lead" title="<?php the_field('user_featured_subtitle'); ?>" href="<?php the_field('user_featured_sample'); ?>"><?php the_field('user_feature_cta'); ?></a>

			</div>
			<a class="image-popup-vertical-fit" title="<?php the_field('user_featured_subtitle'); ?>" href="<?php the_field('user_featured_sample'); ?>"><img class="ui image centered" src="<?php the_field('user_feature_image'); ?>"></a>

		</div>
	</div>
</div>
</div>

<div class="container">
	<div class="row bump-top">
		<div class="col-sm-16">
			<h2 id="architecture" class="section-header center"><?php the_field('architecture_title'); ?></h2>
			<div class="ui divider"></div>
		</div>
		<?php if( have_rows('architecture_section') ): ?>
			<?php while( have_rows('architecture_section') ): the_row(); 

			// vars
			$architectureHeadline = get_sub_field('architecture_headline');
			$architectureBody = get_sub_field('architecture_body');
			$architectureImage = get_sub_field('architecture_image');
			$architectureCta = get_sub_field('architecture_cta');
			$architectureSubtitle = get_sub_field('architecture_subtitle');
			$architectureSample = get_sub_field('architecture_sample');

			?>

			<div class="col-sm-8">
				<img class="ui image centered" src="<?php echo $architectureImage; ?>">
				<h3><?php echo $architectureHeadline; ?></h3>
				<p><?php echo $architectureBody; ?></p>
				<a class="image-popup-vertical-fit" title="<?php echo $architectureSubtitle; ?>" href="<?php echo $architectureSample; ?>"><?php echo $architectureCta; ?></a>

			</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<div class="col-sm-16 bump-top">
		<div class="ui divider"></div>
		<h3 class="center"><?php the_field('architecture_feature_headline'); ?></h3>
		<p class=""><?php the_field('architecture_feature_body'); ?></p>
		<div class="center">
			<a class="image-popup-vertical-fit lead" title="Data models created to represent relationships between each piece of a franchise." href="<?php the_field('architecture_feature_sample'); ?>"><?php the_field('architecture_feature_cta'); ?></a>
		</div>
		<a class="image-popup-vertical-fit" title="Data models created to represent relationships between each piece of a franchise." href="<?php the_field('architecture_feature_sample'); ?>"><img class="ui image centered"  src="<?php the_field('architecture_feature_image'); ?>"></a>
	</div>
</div>
</div>

<div class="ui segment notop nobottom">
	<div class="container">
		<div class="row bump-top">
			<div class="col-sm-16">
				<h2 id="design" class="section-header center"><?php the_field('design_title'); ?></h2>
				<div class="ui divider"></div>
			</div>
			<?php if( have_rows('design_section') ): ?>
				<?php while( have_rows('design_section') ): the_row(); 

				// vars
				$designHeadline = get_sub_field('design_headline');
				$designBody = get_sub_field('design_body');
				$designImage = get_sub_field('design_image');
				$designCta = get_sub_field('design_cta');
				$designSample = get_sub_field('design_sample');
				$designSubtitle = get_sub_field('design_subtitle');

				?>

				<div class="col-sm-8">
					<img class="ui image centered" src="<?php echo $designImage; ?>">
					<h3><?php echo $designHeadline; ?></h3>
					<p><?php echo $designBody; ?></p>
					<a class="image-popup-vertical-fit" title="<?php echo $designSubtitle; ?>" href="<?php echo $designSample; ?>"><?php echo $designCta; ?></a>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

		<div class="col-sm-16 bump-top">
			<div class="ui divider"></div>
			<h3 class="center"><?php the_field('design_feature_headline'); ?></h3>
			<p class=""><?php the_field('design_feature_body'); ?></p>
			<div class="center">
				<a class="" href="<?php the_field('design_feature_sample'); ?>"><?php the_field('design_feature_cta'); ?></a>
			</div>
			<a class="" href="<?php the_field('design_feature_sample'); ?>"><img class="ui image centered" src="<?php the_field('design_feature_image'); ?>"></a>
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

<script type="text/javascript">
	$(document).ready(function() {

		$('.image-popup-vertical-fit').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			mainClass: 'mfp-img-mobile',
			image: {
				verticalFit: true
			}

		});

		$('.image-popup-fit-width').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			image: {
				verticalFit: false
			}
		});

		$('.image-popup-no-margins').magnificPopup({
			type: 'image',
			closeOnContentClick: true,
			closeBtnInside: false,
			fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});

	});
</script>
<?php get_footer(); ?>
