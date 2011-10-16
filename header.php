<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-lafoodheroes-org" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<meta name="author" content="Robert C Edwards">
	<meta name="Copyright" content="Copyright LA Food Heroes 2011. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="LA Food Heroes">
	<meta name="DC.subject" content="Food Heroes is a 501(c)(3) Non Profit Organization dedicated to improving the health of our communities through our relationship to food.">
	<meta name="DC.creator" content="We Creative">
	
	<!--  Mobile Viewport meta tag
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width -->
	<!-- Uncomment to use; use thoughtfully!
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
		 
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->
	

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/_/css/columnal.css">
<!-- Fixes for IE -->
	<!--[if lt IE 9]>
    	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/_/css/ie.css" type="text/css" media="screen" />
	<![endif]-->

	<!-- use "fixed-984px-ie.css" or "fixed-960px-ie.css for a 984px or 960px fixed width for IE6 and 7 -->
	<!--[if lte IE 7]>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/_/css/fixed-984px-ie.css" type="text/css" media="screen" />
	<![endif]-->
	
<!-- Fixes for IE6, only needed if IE 6 will be supported - width must match 984px or 960px of css file used above -->
<!-- Use .imagescale to fix IE6 issues with full-column width images (class must be added to any image wider than the column it is placed into) -->
	<!--[if lte IE 6]>
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/_/css/ie6-984px.css" type="text/css" media="screen" />
	<![endif]-->
  <!-- End fixes for IE -->	<!-- CSS: screen, mobile & print are all in the same file -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">

	<!-- all our JS is at the bottom of the page, except for Modernizr. -->
	<script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<script type="text/javascript">(function(d){
  var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
  js = d.createElement('script'); js.id = id; js.async = true;
  js.src = "//connect.facebook.net/en_US/all.js#appId=262586560424891&xfbml=1";
  d.getElementsByTagName('head')[0].appendChild(js);
}(document));</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/_/js/blueberry.css">
<script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.blueberry.js"></script>
<script>$(window).load(function() {$('.blueberry').blueberry();});</script>

</head>

<body <?php body_class(); ?>>
	
	<div class="container "><!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->

		<header id="header" class="row negative">
			<div class="col_4 logo"><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"</a></div>
			<h1 style="display:none;"><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div style="display:none"; class="description"><?php bloginfo('description'); ?></div>
			<div id="social" class="col_4 last rounded transparent">
				<ul>
					<li><a href="#"><div class="fb-like social" data-href="http://www.facebook.com/pages/LA-Food-Heroes/126965250720277" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false"></div></a></li>
					<li><a href="#"><div class="social "><g:plusone href="http://www.lafoodheroes.org"></g:plusone></div></a></li>
					<li ><a href="#"><div class="social twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div></a></li>
				</ul>			
			</div>
			<div id="nav" class="col_6 last"><?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => '' ) ); ?></div>
			<div id="searchform" class=" col_4 rounded transparent last">
				<?php get_search_form( $echo ); ?>
			</div>
		</header>