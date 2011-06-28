<?php get_header(); ?>

<?php get_sidebar(); ?>

<div id="content">
	<?php if (have_posts()) : ?>
	
		<?php while (have_posts()) : the_post(); ?>
	
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
	
		<?php endwhile; ?>
		
	<?php else : ?>
	
		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>
	
	<?php endif; ?>

</div>
    
    
<?php get_footer(); ?>