<?php
/**
 * @package WordPress
 * @subpackage PG2C
 */
?>
		<ul>
			<li class="subnav">
				<h3>Resources <?php echo get_the_title($post->post_parent); ?></h3>
				<?php
				  if($post->post_parent)
				  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
				  else
				  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
				  if ($children) { ?>
				  <ul>
				  <?php echo $children; ?>
				  </ul>
				  <?php } ?>
				 
			</li>	
		</ul>
		