<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php if (is_home () ) { bloginfo('name'); echo " - "; bloginfo('description'); 
} else { wp_title('',true); echo " - "; bloginfo('name'); }?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<!-- Additional IE/Win specific style sheet (Conditional Comments) -->
	<!--[if lte IE 7]>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styleie.css" type="text/css" media="projection, screen">
	<![endif]-->
	<?php wp_head(); ?>

</head>
<body>
<div id="wrap">
	
	<div class="header">
		<div class="titles">
			<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
			<p><?php bloginfo('description'); ?></p>
		</div>
	<div class="searchbar">
		<span>Search</span> <form method="get" id="searchtop" action="<?php bloginfo('home'); ?>/"><input name="s" type="text" id="s" onfocus="if (this.value == 'to search, type and hit enter') {this.value = '';}" onblur="if (this.value == '') {this.value = 'to search, type and hit enter';}" value="to search, type and hit enter" size="28" /></form>
		<div class="clear"></div>
	</div>
	
	<div class="clear"></div>
	</div>
		
	<div class="menu">
		<ul>
			<li class="page_item<?php if (is_home() || is_single()) {echo ' current_page_item';} ?>"><a href="<?php bloginfo('url'); ?>">Home</a></li>
			<?php wp_list_pages('sort_column=menu_order&title_li=&depth=1'); ?>
			<div style="clear:both;"></div>
		</ul>
	</div>
	
<br/>
<?php if (function_exists('mightyadsense4template'))
		mightyadsense4template(3);
?>
	<div id="content">
