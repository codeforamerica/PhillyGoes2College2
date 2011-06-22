<?php
/*
 * @package WordPress
 * @subpackage PG2C
 * Template Name: Form Template
 */

include 'formHeader.php'; ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="termsOfUse">
	<?php the_content(); ?>
</div>
<?php endwhile; endif; ?>
	
<?php include 'formFooter.php'; ?>