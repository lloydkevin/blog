<?php get_header(); ?>
	<div class="leftcolumn">
			<?php if (have_posts()) : ?>
 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h4 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h4>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h4 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h4>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h4 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h4>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h4 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h4>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h4 class="pagetitle">Archive for <?php the_time('Y'); ?></h4>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h4 class="pagetitle">Author Archive</h4>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h4 class="pagetitle">Blog Archives</h4>
 	  <?php } ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="article" id="<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<span class="postmeta"><?php the_time('F jS, Y') ?>, Author: <?php the_author(); ?>, Categories: <?php the_category(', '); ?></span>
					<div class="postcontent">
						<?php the_excerpt(); ?>
					</div>
					<span class="mcomments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			<div style="clear:both;"></div>
		</div>
	</div>
	<?php get_sidebar(); ?>
	<div style="clear:both;"></div>
</div>
<?php get_footer(); ?>