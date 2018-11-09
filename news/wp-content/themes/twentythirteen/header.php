<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
	<!-- JavaScript -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="../../../../scripts/jsMove.js"></script>
	<script type="text/javascript" src="../../../../scripts/jsScrollTo.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			controls();
			images_size();
		});
	</script>
	
	
	<script type="text/javascript">
		$(document).ready(function () {  
		  var top = $('#navigation').offset().top - parseFloat($('#navigation').css('marginTop').replace(/auto/, 100));
		  $(window).scroll(function (event) 
		  {
				//Get the Y position of the scroll
				var y = $(this).scrollTop();

				//Check Y position 
				if (y >= top) 
				{
					//If so, ad the fixed class
				  	$('#navigation').css('position', 'fixed');
					$('#navigation').css('top', '0');
					$('#nav-logo').css('visibility', '');
				} 
				else 
				{
				  // otherwise remove it
				  $('#navigation').css('position', 'relative');
				  $('#nav-logo').css('visibility', 'hidden');
				}
		  });
		});
	</script>
	
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">

		<div id="top"> </div>
		   

		<!-- start | HEADER
		================================================== -->
		<header class="top-header">
				
			<div id="logo">
				<a href="http://www.ailona.co.uk/news/">Ailona Lukiyanova</a>
			</div>
			
			<!-- start # SITE NAVIGATION -->
			<menu id="menu-site">
				<ul>
					<li><a href="#branding" class="ancre">Home</a></li>
					<li><a href="#news" class="ancre">Photos</a></li>
					<li><a href="#contact" class="ancre">Videos</a></li>
					<li><a href="#branding" class="ancre">Biography</a></li>
					<li><a href="#news" class="ancre">Lona</a></li>
					<li><a href="#contact" class="ancre">Contact</a></li>
				</ul>
			</menu>
			<!-- end # SITE NAVIGATION -->
			
			
			<div id="social">
				<ul>
					<li class="slick"><a href="https://www.facebook.com/pages/Ailona/151609988252256"><img src="../../../../Images/icon_facebook.png" /></a></li>
					<li class="slick"><a href="https://www.facebook.com/pages/Ailona/151609988252256"><img src="../../../../Images/icon_linkedin.png" /></a></li>
				</ul>
			</div>
			   
		</header>    
	  

		<style>
		
			::selection, a:focus { background:#000; color:#FFF !important; /* Safari */ }
			::-moz-selection { background:#000; color:#FFF !important; /* Firefox */ }
			#social ul li { background:#000; }
					
		</style>



		<!-- start | BRANDING
		================================================== -->
		<section id="branding">
		
			<div class="container">
				<h1>
					<!-- <p><b>Welcome</b><br/>to my personal website. <u>Feel free</u> to look around.</p> -->
				</h1>
			</div>
			
			<div class="intro-shadow">
			</div>
			
		</section>
		<!-- end # BRANDING-->
		

		
		
		
		
		<!-- start | PAGE NAVIGATION
		================================================== -->
		<nav id="navigation">
				
			<div id="nav-logo">
				<a href="#top" class="ancre">↑ Top</a>
			</div>
			
			<!-- start # MENU/NAVIGATION -->
			<menu id="menu-page">
				<ul>
					<li><a href="#news" class="ancre">News</a></li>
					<li><a href="#footerFake" class="ancre">Archive</a></li>
				</ul>
			</menu>
			<!-- end # MENU/NAVIGATION -->
			
			
			<div class="clear"></div>
			   
		</nav>        
		<!-- end # PAGE NAVIGATION-->
		
		
		
		<section id="news"></section>
		
		<div id="main" class="site-main">
		