<?php get_header(); ?>

<? include(TEMPLATEPATH."/subheader.php"); ?> 

<div id="wrap">
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	<div class="date">Posted by
	  <?php the_author_posts_link(); ?>
	  |
  <?php the_time('F j, Y'); ?>
	  .</div>
	<?php the_excerpt(__('Read more'));?>
 	
	<div class="postinfo">
	<?php comments_popup_link('Comment', '1 Comment', '% Comments'); ?><br />
	</div>

	<!--
	<?php trackback_rdf(); ?>
	-->
	
	<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
	<p><?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?></p>
	
</div>

<!-- The main column ends  -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>