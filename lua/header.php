<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<style type="text/css" media="screen">
<!-- @import url( <?php bloginfo('stylesheet_url'); ?>?v1.23 ); -->
</style>

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_single() ) wp_enqueue_script( 'comment-reply' ); ?>
<!-- Wordpress Header -->
<?php wp_head(); ?>
<!-- Wordpress Header -->
<meta name="verify-v1" content="xzkTbJfyPi4Nf8labnG5uHr5HacZmUQBr4/q+SYu+vQ=" />
<meta name="y_key" content="27e79c5b6a459004" />
</head>

<body>
<div id="body-container">

<div id="header">

<div class="TopMenu">
   <ul>
     <li><a href="<?php bloginfo('url'); ?>" title="<?php _e('Home'); ?>" id="home">Home</a></li><?php wp_list_pages('depth=1&sort_column=menu_order&title_li=' . __('') . '' ); ?>
   </ul>
</div><!-- TopMenu-->

<div class="headline">
<h1><a href="<?php bloginfo('url'); ?>" title="<?php _e('Home'); ?>"><?php bloginfo('name'); ?></a></h1>
<div class="Desc"><?php bloginfo('description'); ?></div>
</div><!-- headline-->
</div><!-- header-->
