<?php get_header(); ?>

<? include(TEMPLATEPATH."/subheader.php"); ?> 

<div id="wrap">
<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	<div class="date">Posted by <?php the_author_posts_link(); ?> | <?php the_time('F j, Y'); ?>.</div>
	<?php the_content(__('...CONTINUE READING =>'));?>

	<div class="postinfo">
	Posted under <?php the_category(', ') ?> | <?php comments_popup_link('Comment', '1 Comment', '% Comments'); ?>
	</div> <!-- postinfo-->

	<!--
	<?php trackback_rdf(); ?>
	-->
	
	<?php comments_template(); // Get wp-comments.php template ?>
	<?php endwhile; else: ?><?php endif; ?>
	
	<div class="prevnext">
		<?php if(function_exists('wp_pagenavi')): { wp_pagenavi('', '', '', '', 20, true); }  else : ?>
						<div class="alignleft">
								<?php next_posts_link('&laquo; Previous Entries') ?> <?php previous_posts_link('Next Entries &raquo;') ?>
						</div> <!-- alignleft-->
						<div class="alignright">
							<?php previous_posts_link('Next Entries &raquo;') ?>
						</div><!-- alignright-->
		<?php endif ?>
	</div> <!-- prevnext-->

	
</div> <!-- content -->

<!-- The main column ends  -->

<?php get_sidebar(); ?>
</div> <!-- wrap -->
<?php get_footer(); ?>