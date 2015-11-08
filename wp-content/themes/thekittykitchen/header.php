<?php
/**
 *
 * @package thekittykitchen
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta name="apple-itunes-app" content="app-id=572939440">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/semantic-ui/dist/semantic.min.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:300,400,600,700' rel='stylesheet' type='text/css'>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/bower_components/Naver/jquery.fs.naver.min.js"></script>		

	<div id="fb-root"></div>


	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php
  	// Fix menu overlap bug..
	if ( is_admin_bar_showing() ) echo '<div class="admin-bar-fix"></div>';
	?>
	<nav class="nav-background">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="logo pull-left hidden-xs">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a>
					</div>
					<div class="hidden-xs pull-right cl-effect-1">
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'menu-main-menu' ) ); ?>
					</div>
				</div>
			</div>			
		</div>
	</nav>

	<div id="wrap">
		<div id="main">
	



