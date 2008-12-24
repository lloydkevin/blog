  
  <div id="right_side">
  <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(2) ) : ?>
<div class="block block-node">
<h3>Subscribe</h3>
<div style="width: 100px;">
<div class="block block-node">


<h3>Search</h3>
<form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">

<input type="text" size="10" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" /><input type="submit" id="sidebarsubmit" value="Search" />

 </form>
     </div> 
        <div class="block block-user">
<h3>Categories</h3>
<ul>
<?php wp_list_cats('sort_column=name&hierarchical=0'); ?>

</ul>
   
 </div>

<div class="block block-node">
		<h3><?php _e('Blogroll'); ?></h3>

<ul>
<?php get_links(-1, '<li>', '</li>', '', FALSE, 'name', FALSE, FALSE, -1, FALSE); ?>
</ul> 
     </div>
	 
 <?php endif; ?>


  </div>

