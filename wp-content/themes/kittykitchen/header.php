<?php
/**
 *
 * @package mr-consulting
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/magnific-popup/dist/magnific-popup.css" >
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/Naver/jquery.fs.naver.css" >
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/semantic-ui/dist/semantic.min.css" />

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/Naver/jquery.fs.naver.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/parallax.js/parallax.min.js"></script>

	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php
  	// Fix menu overlap bug..
	if ( is_admin_bar_showing() ) echo '<div class="admin-bar-fix"></div>';
	?>
	<nav class="nav-background cl-effect-1">
		<div class="container">
			<div class="row">
				<div class="col-sm-16">
					<div class="logo pull-left hidden-xs">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Mitch Ray — UX Consulting</a>
					</div>
					<div class="pull-right hidden-xs">
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'menu-main-menu' ) ); ?>
					</div>
					<div class="visible-xs center">
						<ul class="no-left"><li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li></ul>
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'menu-main-menu' ) ); ?>
					</div>
				</div>
			</div>
		</div>	
	</nav>
	<script>
		$("nav").naver();
	</script>



