<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
   <head>
<link rel="shortcut icon" type="image/x-icon" href="http://rice.hugs.nu/smile.ico" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<title><?php wp_title('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-', true, 'right');  ?><?php bloginfo('name'); ?>&nbsp;&nbsp;</title>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>

   </head>
     <body>

<div id="container">

<ul id="navigation">
<?php wp_list_pages('title_li=&depth=1'); ?>


</ul>

<div id="header"><a href="/" class="header">rice.hugs.nu</a></div>


<?php get_sidebar(); ?>
		  <div id="content">