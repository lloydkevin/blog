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
	<?php the_content(__('Read more'));?>
	<div class="postinfo"> Posted under
	  <?php the_category(', ') ?>
	  |
  <?php comments_popup_link('Comment', '1 Comment', '% Comments'); ?>
	  Like this article? Subscribe to our <?php comments_rss_link('RSS'); ?>
  <?php if ('open' == $post-> ping_status) { ?>
  <?php } ?> feed
    </div> <!-- postinfo -->
	<!--
	<?php trackback_rdf(); ?>
	-->

	<?php comments_template(); // Get wp-comments.php template ?>
	<?php endwhile; else: ?><?php endif; ?>
	
	<div class="prevnext">

					<div class="alignleft">
						<?php next_posts_link('&laquo; Previous Entries') ?>
					</div>

					<div class="alignright">
						<?php previous_posts_link('Next Entries &raquo;') ?>
					</div>
	</div> <!-- prevnext -->
</div> <!-- conent -->

<!-- The main column ends  -->
<?php get_sidebar(); ?>
</div> <!-- wrap -->
<?php get_footer(); ?>