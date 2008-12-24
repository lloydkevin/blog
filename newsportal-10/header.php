<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
<link rel="shortcut icon" href="/favicon.ico" />
 <META name="y_key" content="27e79c5b6a459004" />

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title(''); ?> <?php if(wp_title('', false)) { echo '|'; } ?> <?php bloginfo('name'); ?></title>
 <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->


<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />

<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_get_archives('type=monthly&format=link'); ?>

<?php wp_head(); ?>


<?php global $user_identity; get_currentuserinfo(); if ($user_identity) { ?>
<style type="text/css">
  /* <![CDATA[ */

  #InBusiness-admin-bar {
  margin: 0;
  padding: 0;
  background: #4E7DD1;
  border-bottom: 1px solid #000000;
  text-align: left;
  width: 100%;
  }

  #InBusiness-admin-bar ul {
  margin: 0;
  padding: 4px;
  list-style-type: none;
  }

  #InBusiness-admin-bar ul li {
  list-style-type: none;
  display: inline;
  margin: 0 10px;
  padding: 0;
  font-size: 1.1em;
  color: #ffffff;
  }

  #InBusiness-admin-bar ul li.login { margin-right: 30px; }
  #InBusiness-admin-bar ul li.howdy { position: absolute; right: 1em; }
  #InBusiness-admin-bar a { color: #ffffff; text-decoration: none;}
  #InBusiness-admin-bar a:hover { color: #000000; }

  /* ]]> */
</style>
<?php } ?>
<meta name="verify-v1" content="xzkTbJfyPi4Nf8labnG5uHr5HacZmUQBr4/q+SYu+vQ=" />
</head>
<body>


<?php global $user_identity,$user_level; get_currentuserinfo(); if ($user_identity) {
echo '<div id="InBusiness-admin-bar"><ul>';
echo "\n\t<li><a href='".get_settings('siteurl')."/wp-admin/'><strong>".__('Dashboard','InBusiness')." 	&#187;</strong></a></li>";
if ($user_level >= 1) {
echo '<li><a href="'.get_settings('siteurl').'/wp-admin/post.php">'.__('New Post','InBusiness').'</a></li>';
echo '<li><a href="'.get_settings('siteurl').'/wp-admin/page-new.php">'.__('New Page','InBusiness').'</a></li>';
}
echo "\n\t<li class=\"howdy\">".__('Logged in as ','InBusiness')." <strong>"."<a href='".get_settings('siteurl')."/wp-admin/profile.php'>".$user_identity."</a></strong>, ["; wp_loginout(); echo "]</li>";
echo "\n</ul></div>";
 } ?>


<div id="page_wrapper">
  <div id="header_wrapper">
    <div id="header">
<a href="<?php bloginfo('url'); ?>">
<img src="<?php bloginfo('template_directory');?>/images/header.gif" alt="<?php bloginfo('name');?>" title="<?php bloginfo('name');?>" border="0">
</a>

			</div>
    <div id="navcontainer">
	<ul id="navlist">

<li class="page_item"><a href="<?php bloginfo('url'); ?>">Home</a></li>

<?php wp_list_pages('depth=1&title_li='); ?>

</ul>

<div align=center>
<script type="text/javascript"><!--
google_ad_client = "pub-8590368810104125";
google_alternate_color = "4E7DD1";
google_ad_width = 728;
google_ad_height = 15;
google_ad_format = "728x15_0ads_al_s";
//2006-12-31: top-link-unit
google_ad_channel = "4310798599";
google_color_border = "4E7DD1";
google_color_bg = "4E7DD1";
google_color_link = "FFFFFF";
google_color_text = "FFFFFF";
google_color_url = "FFFFFF";
//--></script>
<script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>


          </div>
  </div>