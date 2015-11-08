<?php
/**
 * Template Name: Home Page
 *
 * @package thekittykitchen
 *
 */

get_header(); 

get_template_part( 'templates/hero-section' );
get_template_part( 'templates/featured-posts' );
get_template_part( 'templates/recipe-posts' );
?>

<?php get_footer(); ?>