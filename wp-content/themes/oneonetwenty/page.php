<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

echo '<section class="pt-[140px] pb-[100px]">';
echo 	'<div class="max-w-[900px] mx-auto px-4">';
echo 		get_the_content();
echo 	'</div>';
echo '</section>';

get_footer();
