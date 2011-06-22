<?php
/*
 * @package WordPress
 * @subpackage PG2C
 * Template Name: For Adult Students - Other resources for general college information:
 */

get_header(); ?>

<div id="subnav" class="otherResources clearfix">
	<div class="top">
		<h3><img class="headline" src="<?php bloginfo('template_directory'); ?>/style/images/forAdultStudentsSubnavHeader.gif" alt="Resources for Adult Students" /></h3>
		<ul>
			<?php include('wp-content/themes/pg2c/subnav/forAdultStudents.php'); ?>
		</ul>
	</div>
	<div class="bottom"></div>
</div>
<div id="pageCopy">
	<h2 class="hidden">For Adult Students</h2>
	<h3><img class="headline" src="<?php bloginfo('template_directory'); ?>/style/images/forAdultStudentsOtherHeader.png" alt="Other Resources for General College Information" /></h3>
	<p>Going to college is a process. And it takes some work to find the right path for you. Fortunately, there are some great website resources that can help you figure it all out.</p>
	<ul class="resources">
		<li class="clearfix">
			<h4>Free Library of Philadelphia</h4>
			<div class="resourceContent clearfix">
				<div class="logo">
					<a href="http://www.freelibrary.org"><img src="<?php bloginfo('template_directory'); ?>/style/images/forAdultStudents/freeLibrary.gif" alt="" /></a>
				</div>
				<div class="resourceCopy">
					<p>
						<a href="http://www.freelibrary.org">Visit the Free Library website</a> to determine the library branch that is closest to you.  You may also visit the Parkway Central Library located at 19th &amp; Vine Streets.  They have books and other resources on colleges, SAT prep, scholarship information, etc.  They also provide free SAT prep classes and basic college prep workshops throughout the year.
					</p>
				</div>
			</div>
		</li>
	</ul>	
</div>
<?php get_footer(); ?>