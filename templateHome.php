<?php
/*
 * @package WordPress
 * @subpackage PG2C
 * Template Name: Home
 */

get_header(); ?>

<ul id="homeContent" class="clearfix">
  <li onclick="document.location='<?php echo site_url('students'); ?>'">
    <img src="<?php bloginfo('template_directory'); ?>/images/homeContentForStudents.jpg" alt="Photo of Student" class="photo" />
    <h3><a href="<?php echo site_url('students'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/homeHeaderForStudents.gif" alt="For Student" class="headline" /></a></h3>
    <div class="copy">
      <p><strong>Are you a student looking to go to college?</strong> If you&#8217;re in school now and want to go to college, click here to find the resources you need to get there.</p>
    </div>
    <a href="<?php echo site_url('students'); ?>" class="buttonLink">Resources<br />For Students</a>
  </li>
  <li onclick="document.location='<?php echo site_url('parentsandmentors'); ?>'">
    <img src="<?php bloginfo('template_directory'); ?>/images/homeContentForParents.jpg" alt="Photo of Student" class="photo" />
    <h3><a href="<?php echo site_url('parentsandmentors'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/homeHeaderForParents.gif" alt="For Students" class="headline" /></a></h3>
    <div class="copy">
     <p><strong>Are you an adult looking to help a student go to college?</strong> If there&#8217;s a student in your life who wants to go to college, click here to find the resources you need to help them get there.<p>
    </div>
    <a href="<?php echo site_url('parentsandmentors'); ?>" class="buttonLink">Resources<br />For Parents/Mentors</a>
  </li>
  <li onclick="document.location='<?php echo site_url('adultstudents'); ?>'" class="last">
    <img src="<?php bloginfo('template_directory'); ?>/images/homeContentForAdultStudents.jpg" alt="Photo of Student" class="photo" />
    <h3><a href="<?php echo site_url('adultstudents'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/homeHeaderForAdultStudents.gif" alt="For Students" class="headline" /></a></h3>
    <div class="copy">
      <p><strong>Are you an adult (19 years of age or older) and have some college credit or have never attended college and want to get a degree?</strong> Click here to find the resources you need to get there.</p>
    </div>
    <a href="<?php echo site_url('adultstudents'); ?>" class="buttonLink">Resources<br />For Adult Students</a>
  </li>
</ul>



<div id="mayor">
	<p class="blurb">The PhillyGoes2College office is a referral center within the Mayor’s Office of Education that helps Philadelphians of all ages earn a college degree. When you call, email, or visit the office we will connect you with organizations that will help you through the college application process. We can also provide information on preparing for college, returning to college as an adult, finding financial aid, and much more.</p>
	
	<div id="nutter">
	  <p class="quote"><img src="<?php bloginfo('template_directory'); ?>/images/homeMichaelNutter.png" alt="" id="michaelNutter" />"Let&#8217;s make Philadelphia a place where anyone, the young and the not so young, who wants to earn a college degree can get the support they need."</p>
	  
	  <a href="<?php bloginfo('template_directory'); ?>/images/nutterLetter.jpg" class="lightbox">Read a letter from Mayor Michael Nutter</a>
	</div>
</div>

<div class="languages"><img src="<?php bloginfo('template_directory'); ?>/images/alternateLanguages.png" alt="If you need help in a language other than English." class="headline" /></div>

   

  
<?php get_footer(); ?>