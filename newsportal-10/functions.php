<?php


if ( function_exists('register_sidebars') )
 register_sidebars(2,array(
        'before_widget' => '<div class="block block-node">',
    'after_widget' => '</div>',
 'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));


// WP-newsportals Pages Box  
 function widget_newsportal_pages() {
?>
  <div class="block block-node">

<h3><?php _e('Pages'); ?></h3>
   <ul>
<li class="page_item"><a href="<?php bloginfo('url'); ?>">Home</a></li>

<?php wp_list_pages('title_li='); ?>

 </ul>
 </div>

<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Pages'), 'widget_newsportal_pages');


// WP-newsportals Search Box  
 function widget_newsportal_search() {
?>

  <div class="block block-node">
  <h3><?php _e('Search'); ?></h3>
   <ul>

<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<input type="text" size="10" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" /><input type="submit" id="sidebarsubmit" value="Search" />

 </form>

 </ul>
 </div>

<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_newsportal_search');

// WP-newsportal Blogroll  
 function widget_newsportal_blogroll() {
?>


  <div class="block block-node">
<h3><?php _e('Blogroll'); ?></h3>

<ul>

<?php get_links(-1, '<li>', '</li>', '', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>

</ul>

</div>
<?php
}
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Blogroll'), 'widget_newsportal_blogroll');
 
// WP-newsportal Links  

function widget_links_with_style() {
   global $wpdb;
   $link_cats = $wpdb->get_results("SELECT cat_id, cat_name FROM $wpdb->linkcategories");
   foreach ($link_cats as $link_cat) {
  ?>

  <div class="block block-node">
  <h3><?php echo $link_cat->cat_name; ?></h3>

   <ul>
   <?php get_links($link_cat->cat_id, '<li>', '</li>', '<br />', FALSE, 'rand', TRUE,  TRUE, -1, TRUE); ?>
   </ul>
   </div>

   <?php } ?>
   <?php }
   if ( function_exists('register_sidebar_widget') )
   register_sidebar_widget(__(' Links With Style'), 'widget_links_with_style');
  

// Recent Posts
 function widget_newsportal_recent_posts() 
 {
	$today = current_time('mysql', 1);
	
	if ( $recentposts = $wpdb->get_results("SELECT ID, post_title FROM $wpdb->posts WHERE post_status = 'publish' AND post_date_gmt < '$today' ORDER BY post_date DESC LIMIT 7")):

?>
<div class="block block-node">
<h3><?php _e('Recent Posts'); ?></h3>
<ul>
<?php
	foreach ($recentposts as $post) {
		if ($post->post_title == '')
	$post->post_title = sprintf(__('Post #%s'), $post->ID);
	echo "<li><a href='".get_permalink($post->ID)."'>";
	the_title();
	echo '</a></li>';
}
?>

</ul>
</div>
<?php endif; ?>
<?php }
if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Lua Recent Posts'), 'widget_newsportal_recent_posts');



function widget_newsportal_topcomment()

{ ?>
<!-- Top Commentors -->
<?php if(function_exists('ns_show_top_commentators')) { ?>
<div class="block block-user">
	<h3>Top Commentors</h3>
	<ul><?php ns_show_top_commentators(); ?></ul>
</div>
<?php } ?>
<!-- Top Commentors -->

<?php }
   if ( function_exists('register_sidebar_widget') )
   register_sidebar_widget(__('Top Commentors'), 'widget_newsportal_topcomment');


function widget_subscribe()
{ ?>

<div class="block block-node">
<h3>Subscribe</h3>
<div style="width: 100px;">
<? if (function_exists('chicklet_creator')) { chicklet_creator(); } ?>
</div>

     </div> 
	 
<? }
   if ( function_exists('register_sidebar_widget') )
   register_sidebar_widget(__('Subscribe'), 'widget_subscribe');

function widget_news_categories()
{ ?>
<div class="block block-user">
 
<h3>Categories</h3>

<ul>

<?php wp_list_cats('sort_column=name&hierarchical=0'); ?>

</ul>
   
 </div>
<? } 
if ( function_exists('register_sidebar_widget') )
   register_sidebar_widget(__('Categories'), 'widget_news_categories');
   
   
function widget_poll()
{ ?>
<!-- Poll -->
<?php if(function_exists('jal_democracy')) { ?>
	<div class="block block-user">
		<h3><?php _e("Current Poll"); ?></h3>
		<?php jal_democracy() ?>
	</div>
<?php } ?>
<!-- Poll -->

<? } 
if ( function_exists('register_sidebar_widget') )
   register_sidebar_widget(__('Poll'), 'widget_poll');


?>