<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head id="www-sitename-com" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	<META HTTP-EQUIV="EXPIRES" CONTENT="Mon, 22 Jul 2002 11:12:01 GMT">
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
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

<!-- Meta Information -->
	<meta name="google-site-verification" content="">
	<meta name="author" content="Your Name Here">
	<meta name="Copyright" content="Copyright Your Name Here 2013. All Rights Reserved.">
	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="What you're about.">
	<meta name="DC.creator" content="Who made this site.">

<!-- Stylesheets -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Signika:400,300,700' rel='stylesheet' type='text/css'>
<!-- Facebook Image -->
	<link rel="image_src" href="" />
<!-- Facebook Image -->

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>

</head>
<body>
<div id="preloader"></div>
<header>

		<div class="row full over overlogo">
	        <div class="large-2 small-6 columns">
	          <div class="large-10  small-10 columns">
					<img src="http://fakeimg.pl/350x200/00CED1/FFF/?text=img+placeholder">
	          </div>
	        </div>
	    </div>


    <div class="row full">
    	<section id="menu" class="hide-for-medium-up">
		<!-- PLUGIN -->
			    <?php
				if ( has_nav_menu('mobilemenu') ) { 
				    wp_nav_menu( array(
				        'theme_location' => 'mobilemenu',
				        'container' => false,
				        'walker' => new ftb_menu()
				    ));
				}
				?>
		</section>

        <ul class="mainslider" data-orbit data-options="pause_on_hover:false;bullets:false;slide_number:false;animation:fade;timer_speed: 5000;variable_height: false;">

            <?php
              $the_query = new WP_Query(array(
                'post_type' => 'slide',
                'showposts' => 10, 
                'posts_per_page'  => -1,
                'order'       => 'DESC'
              ));
          	?>
          	<li><img src="http://fakeimg.pl/350x200/00CED1/FFF/?text=img+placeholder"></li>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  				<?php endwhile;?> 
  			<?php wp_reset_query(); ?>
        </ul>
    </div>

</header>

<nav class="mainnav hide-for-small">
    <div class="row full">
        <div class="large-9 columns">
         <?php wp_nav_menu( array( 'theme_location' => 'mainmenu' , 'menu_class' => 'mainmenu') ); ?>
        </div>
        <div class="large-3 columns">
            <?php get_product_search_form(); ?>
        </div>
    </div>
</nav>
