<?php get_header(); ?>
<div id="c_wrap">
<div id="content">
<?php if (have_posts()) : ?>
<?php $postNum = 0 ?>
<?php while (have_posts()) : the_post(); ?>
<?php $postNum++ ?>
<div class="posttitle">
<h2><img src="<?php bloginfo('template_directory'); ?>/img/post.png" alt="Post" class="moveDown2" />
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> 

</div>

<span class="date">
<span class="light">Published:</span> <?php the_time('l, F jS, Y') ?></span>	
	
<div class="post">
	<?php
		if (function_exists('wp_ozh_wsa') && $postNum == 1) {
			wp_ozh_wsa("content-ad");
		}
		the_content('Continue Reading &raquo;');
	?>
						<?php //the_content('Continue Reading &raquo;'); ?>
	<?php
		if (function_exists('wp_ozh_wsa') && $postNum == 3) {
			wp_ozh_wsa("ad-bottom");
		}
	?>
<!--
<?php trackback_rdf(); ?>
-->

						<?php wp_link_pages(); ?>
</div>

<div class="metadata">
<img src="<?php bloginfo('template_directory'); ?>/img/archived.png" alt="Archived:" class="moveDown" />&nbsp;

Filed under: <?php the_category(', ') ?>  | 
<?php the_tags( 'Tags: ', ', ', ' | '); ?>
<?php edit_post_link('Edit', '', ' | '); ?> 

<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>  

</div>
<br /><br />
	<?php endwhile; ?>
			<p align="center"><?php if (function_exists('wp_pagenavi')): wp_pagenavi('', '', '&laquo; Previous Entries', 'Next Entries &raquo;', 50, false); else:?>
				<?php next_posts_link('&laquo; Previous Entries') ?>   <?php previous_posts_link('Next Entries &raquo;') ?>
			<?php endif; ?></p>

	<?php
		//if (function_exists('wp_ozh_wsa'))
			//wp_ozh_wsa("ad-footer");
	?>
	
<?php else : ?>
Whatever you were looking for is not here or was never here to begin with... try again!
<?php endif; ?>

</div>
<?php get_sidebar(); ?>
</div>
<?php
		if (function_exists('wp_ozh_wsa'))
			wp_ozh_wsa("ad-footer");
	?>
</div> <!-- Cwrap -->

<?php get_footer(); ?>
