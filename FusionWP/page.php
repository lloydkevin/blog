<?php get_header(); ?>
<div id="c_wrap">
<!-- Adsense Area -->

<!-- End Adsense -->

<div id="content">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="pagetitle">	

		<div class="page" id="post-<?php the_ID(); ?>">

<h2><img src="<?php bloginfo('template_directory'); ?>/img/page.png" alt=">" /> &nbsp;&nbsp;<a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
</div>

				<div class="page">
	<?php
		if (function_exists('wp_ozh_wsa'))
			wp_ozh_wsa("content-ad");
	?>
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	
					<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	
				</div>
			</div>
		  <?php endwhile; endif; ?>
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		
	</div>

<?php include (TEMPLATEPATH . '/page_sidebar.php'); ?>

</div></div></div>

</div>
<?php
		if (function_exists('wp_ozh_wsa'))
			wp_ozh_wsa("ad-footer");
	?>
</div> <!-- Cwrap -->
<?php get_footer(); ?>