<?php /*?>

----------- START HEADER -----------

<?php */?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
  <head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <!--[if IE]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/css/ie.css" media="screen" /><![endif]-->
    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/css/ie6.css" media="screen"  /><![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style/css/jquery.lightbox-0.5.css" media="screen" />
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.scrollfollow.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.lightbox-0.5.min.js"></script>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
    <script type="text/javascript">
    $(function(){
        $('ul.resources a').click(function(){
            window.open(this.href);
            return false;
        });
        $('#pageCopy.noResources a').click(function(){
            window.open(this.href);
            return false;
        });
      $('#subnav').scrollFollow();
      $('a.lightbox').lightBox({fixedNavigation:true});
    });
    </script>
    <style type="text/css">
      a.gmap { display: none; !important; }
      #event-meta { border-color: #B7B7B7; border-bottom: 0; }
    </style>
    <SCRIPT LANGUAGE="JavaScript">
    function popUp(URL) {
      day = new Date();
      id = day.getTime();
      eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=1,menubar=0,resizable=1,width=650,height=400,left = 420,top = 250');");
    }
    </script>
  </head>
  
  <body <?php body_class(); ?>>
    
    <div id="headerWrapper">
      <div id="header" class="clearfix">
        <h1><a href="<?php echo get_option('home'); ?>/"><span class="hidden">PhillyGoes2College.com</span></a></h1>
        <ul id="navigation" class="clearfix">
          <?php wp_list_pages('depth=1&title_li=<h2>Pages</h2>&exclude=201,284,332,337' ); ?>
        </ul>
      </div>
    </div>
    <div id="contentWrapper">
      <div id="content">
      
<?php /*?>

----------- END HEADER ------------

----------- START INDEX -----------

<?php */?>

<ul id="homeContent" class="clearfix">
  <li class="hidden"><h2>Home</h2></li>
  <li>
    <img src="<?php bloginfo('template_directory'); ?>/style/images/homeContentForStudents.jpg" alt="Photo of Student" class="photo" />
    <h3><a href="/students"><img src="<?php bloginfo('template_directory'); ?>/style/images/homeHeaderForStudents.gif" alt="For Student" class="headline" /></a></h3>
    <div class="copy">
      <p><strong>Are you a student looking to go to college?</strong> If you&#8217;re in school now and want to go to college, click here to find the resources you need to get there.</p>
    </div>
    <a href="/students" class="buttonLink"><img src="<?php bloginfo('template_directory'); ?>/style/images/homeButtonForStudents.png" alt="Resources For Students" /></a>
  </li>
  <li>
    <img src="<?php bloginfo('template_directory'); ?>/style/images/homeContentForParents.jpg" alt="Photo of Student" class="photo" />
    <h3><a href="/parentsandmentors"><img src="<?php bloginfo('template_directory'); ?>/style/images/homeHeaderForParents.gif" alt="For Students" class="headline" /></a></h3>
    <div class="copy">
     <p><strong>Are you an adult looking to help a student go to college?</strong> If there&#8217;s a student in your life who wants to go to college, click here to find the resources you need to help them get there.<p>
    </div>
    <a href="/parentsandmentors" class="buttonLink"><img src="<?php bloginfo('template_directory'); ?>/style/images/homeButtonForParents.png" alt="Resources For Students" /></a>
  </li>
  <li class="last">
    <img src="<?php bloginfo('template_directory'); ?>/style/images/homeContentForAdultStudents.jpg" alt="Photo of Student" class="photo" />
    <h3><a href="/adultstudents"><img src="<?php bloginfo('template_directory'); ?>/style/images/homeHeaderForAdultStudents.gif" alt="For Students" class="headline" /></a></h3>
    <div class="copy">
      <p><strong>Are you an adult (19 years of age or older) and have some college credit or have never attended college and want to get a degree?</strong> Click here to find the resources you need to get there.</p>
    </div>
    <a href="/adultstudents" class="buttonLink"><img src="<?php bloginfo('template_directory'); ?>/style/images/homeButtonForAdultStudents.png" alt="Resources For Students" /></a>
  </li>
</ul>
<span style="font-size:medium;"> <i> The PhillyGoes2College office is a referral center within the Mayor's Office of Education that helps Philadelphians of all ages earn a college degree. When you call, email, or visit the office we will connect you with organizations that will help you through the college application process. We can also provide information on preparing for college, returning to college as an adult, finding financial aid, and much more.  <a href="http://www.phillygoes2college.org/1215-2" target=blank>Para www.PhillyGoes2College.com en Español haga clic aquí.</a> </i> </span>
  <p>
    <br>
    <br>
  <a href="http://www.phillygoes2college.org/home/campaign" target_blank><img src="http://www.phillygoes2college.org/wp-content/uploads/2011/01/FAFSA-Logo-e1294927057149.png" ALIGN="left"></a>  <span style="font-family:courier new ms;font-size:x-large;"> <strong>City-Wide Financial Aid and FAFSA Completion Campaign</strong></span>
      <p>
        <p>
          <span style="font-size:medium;"> <a href="http://www.phillygoes2college.org/home/campaign" target_blank>Click here to learn how to get hands on help completing the FAFSA (Free Application for Federal Student Aid), the most important financial aid document.</a> Partners in the City-Wide Financial Aid and FAFSA campaign are offering free workshops all over Philadelphia. </span>
    <p>
        <BR CLEAR="left">
<br>
      <br>
          <span style="font-family:courier new ms;font-size:x-large;"><strong>PhillyGoes2College Spotlight</strong></span>
      <p>
        <span style="font-size: medium;"> <strong>The Young People's Computer Center</strong> offers a community space and computer access for youth. Over the summer they will also be offering workshops on finding a summer job and getting ready for college at 1 PM every Thursday. The center is on the 2nd floor at 4205 Chestnut St and is open Monday-Thursday, 11 AM - 5 PM. For more information email chris@mediamobilizing.org or call 215-253-4586.       </span>
      <p>
  <br>
          <div>
      <p>
        <br>
  
      </p>
      <div id="nutter">
  <img src="<?php bloginfo('template_directory'); ?>/style/images/homeMichaelNutter.png" alt="" id="michaelNutter" />
  <img src="<?php bloginfo('template_directory'); ?>/style/images/homeNutterQuote.png" alt="&#8220;Let&#8217;s make Philadelphia a place where anyone, the young and the not so young, who wants to earn a college degree can get the support they need.&#8221;" id="nutterQuote" />
  <a href="<?php bloginfo('template_directory'); ?>/style/images/nutterLetter.jpg" class="lightbox">Read a letter from Mayor Michael Nutter</a>
</div>

<div id="bottomContent" class="clearfix">
  <div id="topReasons" class="clearfix">
    <div class="top">
      <h4><img src="<?php bloginfo('template_directory'); ?>/style/images/homeTopReasonsHeader.gif" alt="Five Most Important Steps To Take If You Want To Go To College:" class="headline" /></h4>
      <ol>
        <li><span>If you&#8217;re in 9th grade, you should start to plan ahead NOW to choose the high school classes you will need to get into the college of your choice. Check with your college guidance counselor to make sure you&#8217;re on the right track.</span></li>
        <li><span>If you are in high school, you&#8217;ll need to take a college admission test to get admitted to college.  Take the PSATs (which is a practice test), prior to taking the SAT or ACT test. Check out the <a href="http://www.freelibrary.org">Free Library</a> near you for resources to study for the tests. They have books to help you study and also provide free SAT prep classes throughout the year. They provide free SAT prep classes and basic college prep workshops throughout the year.</span></li>
        <li><span>Paying for college is sometimes the biggest challenge for all students – whether you&#8217;re currently in school or not. You need to plan for how to pay for college way before you enroll.  </span></li>
        <li><span>If you need financial aid, the first step is to complete the FAFSA form (which stands for the Free Application for Federal Student Aid) to find out how much money you are eligible to receive to go to college. You can find information on organizations that can help by <a href="/students/find-ways-to-pay-for-college">clicking here</a>.</span></li>
        <li><span>Ask for help! Going to college can be confusing.  People want to help. If you don&#8217;t ask for guidance, you will never get it! There are on-line resources you can get through on this website by <a href="/students/connect-to-a-caring-adult">clicking here</a>. </span></li>
      </ol>
    </div>
    <div class="bottom"></div>
  </div>
  <div id="upcomingEvents" class="clearfix">
    <h4><img src="<?php bloginfo('template_directory'); ?>/style/images/homeUpcomingHeader.png" alt="Upcoming Events To Help You Go 2 College" class="headline" /></h4>
    <p><a href="/category/events/month">Click here</a> to find events that are free or low cost that will help you go 2 college.</p>
    <?php get_sidebar(); ?>
  </div>
  <div id="stopIn">
    <h4><img src="<?php bloginfo('template_directory'); ?>/style/images/homeStopInHeader.png" alt="Stop In and See Us" class="headline" /></h4>
    <p>
      Stay informed on upcoming events and important deadlines, follow us on <strong> <FONT COLOR="1E90FF"> FACEBOOK </FONT> </strong> and <strong> <FONT COLOR="1E90FF">TWITTER</FONT></strong>!
      <p>
        <p>
          <a href="http://www.facebook.com/pages/Philadelphia-PA/PhillyGoes2College/270185798220" target="_blank"><img src="http://www.phillygoes2college.org/wp-content/uploads/2010/05/facebook_128x128.png"/></a> <a href="http://twitter.com/Philly2College" target="_blank"><img src="http://www.phillygoes2college.org/wp-content/uploads/2010/05/twitter_128x128.png"/></a>
      <p>
    <p>
      Text COLLEGE to 888777 for instant updates on important deadlines and upcoming events.
      <p>
        <p>
      Stop by and talk with us in person, our office is located right on the ground floor of City Hall (Room 115 on the Market Street East side)
      and we&#8217;re open every weekday from 9:00 &ndash; 5:00 PM. Or you can call us at 215.686.0315. Email us at <a href="mailto:info@PhillyGoes2College.com">info@PhillyGoes2College.com</a>.
     <br>
    <p>
   <p>
      <a href="http://www.phila.gov/"><img src="<?php bloginfo('template_directory'); ?>/style/images/homeCityLogo.png" alt="City of Philadelphia" class="headline" /></a>
    </div>
  </div>
</div>

<div id="alternateLanguages">
  <div id="pleaseCall">
    <a href="http://www.phillygoes2college.org/1215-2" target=blank>www.PhillyGoes2College.com en Español</a>
    <br>
    <br>
      Please call 215.686.0315 if you would like information about college.
  </div>
  <img src="<?php bloginfo('template_directory'); ?>/style/images/alternateLanguages.png" alt="If you need help in a language other than English." class="headline" />
 </div>
    

<?php /*?>

----------- END INDEX ------------

---------- START FOOTER ----------

<?php */?>
    
        <?php wp_footer(); ?>
        <div id="footer" class="clearfix">
          <ul>
            <?php wp_list_pages('depth=1&title_li=<h2>Pages</h2>&exclude=201,284,332,337' ); ?>
          </ul>
          <div id="terms">
            <a href="/terms-of-use">PhillyGoes2College Terms of Use</a>
            <a href="/privacy-statement" style="margin-left: 20px;">Privacy Statement</a>
          </div>
        </div>
      </div><!-- END id="content" -->
    </div><!-- END id="contentWrapper" -->
    <script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
    try {
    var pageTracker = _gat._getTracker("UA-15054630-1");
    pageTracker._setDomainName("none");
    pageTracker._setAllowLinker(true);
    pageTracker._trackPageview();
    } catch(err) {}</script>
  </body>
</html>