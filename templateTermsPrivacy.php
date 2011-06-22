<?php
/*
 * @package WordPress
 * @subpackage PG2C
 * Template Name: Privacy and Terms Reusable Template
 */

get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="termsOfUse">
	<?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
	
<?php get_footer(); ?>