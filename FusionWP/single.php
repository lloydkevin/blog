<?php get_header(); ?>
<div id="c_wrap">
<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="posttitle">
<h2><img src="<?php bloginfo('template_directory'); ?>/img/post.png" alt=">"  class="moveDown2" /> <a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>

</div>
<span class="date"><?php the_time('l, F jS, Y') ?></span>
	<div class="post">
	<?php
		if (function_exists('wp_ozh_wsa'))
			wp_ozh_wsa("content-ad");
	?>

					<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
	<?php
		if (function_exists('wp_ozh_wsa')) {
			wp_ozh_wsa("ad-bottom");
		}
	?>
<!--
<?php trackback_rdf(); ?>
-->	
					<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

</div>
	<br /><br />
					<span class="metadata">
						Filed Under <?php the_category(', ') ?> <?php the_tags( ' | Tags: ', ', ', ''); ?><?php edit_post_link('Edit', ' | ', ' '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
					</span>
<div id="comtemp">

			<?php comments_template(); ?>
</div>
			<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
</div>
<?php include (TEMPLATEPATH . '/post_sidebar.php'); ?>
</div>
</div>
<?php
		if (function_exists('wp_ozh_wsa'))
			wp_ozh_wsa("ad-footer");
	?>
</div> <!-- Cwrap -->
<?php get_footer(); ?>