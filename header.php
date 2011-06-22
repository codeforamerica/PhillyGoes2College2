<?php
/**
 * @package WordPress
 * @subpackage PG2C
 */
?>

<?php
function relative_links($str) {
 $url = 'http://www.phillygoes2college.com';
 $str = str_replace("'" . $url ."/", "'/", $str);
 $str = str_replace('"' . $url . '/', '"/', $str);
 $str = str_replace('"' . $url . '"', '"/"', $str);
 $str = str_replace("'" . $url . "'", "'/'", $str);
 return $str;
}
ob_start('relative_links');
?>

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