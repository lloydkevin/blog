<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- XHTML Strict 1.0 -->

<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<title><?php if (is_single() || is_page() || is_archive()) { wp_title('',true); } else { bloginfo('name'); echo(' &#8212; '); bloginfo('description'); } ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" /><!-- Page stylesheet -->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_single() ) wp_enqueue_script( 'comment-reply' );?>
<?php wp_enqueue_script('jquery');?>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/tabs.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/tabs.css" type="text/css" media="screen" /><!-- Page stylesheet -->
<script>
jQuery(document).ready(function(){
  jQuery("#tabs > ul").tabs({ fx: { height: 'toggle', opacity: 'toggle' } });
});
</script>

</head>
<body>
<div id="header">
	<div id="header-center">
		<div style="float:left; text-align: left">
			<div class="logo"></div>
			<div class="title">
				<a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a>
				<span style="font-size: 0.7em;"><?php bloginfo('description'); ?></span>
			</div>
		</div>
		<div class="rbox">
			<a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/rss.gif" alt="RSS"/></a>
		</div>
	</div>
	<div class="nav">
		<ul>
		<li class="page_item">
			<a title="Home" href="http://www.webdevelopment2.com/">Home</a>
		</li>
		<?php wp_list_pages('title_li=&exclude=456'); ?>
		</ul>
	</div>
</div>

<?php
	if (function_exists('wp_ozh_wsa'))
		wp_ozh_wsa("ad-header");
?>
