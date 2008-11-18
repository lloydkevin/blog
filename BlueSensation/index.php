<?php get_header(); ?>
	<div class="leftcolumn">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="article" id="<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<span class="postmeta"><?php the_time('F jS, Y') ?>, Author: <?php the_author(); ?>, Categories: <?php the_category(', '); ?></span>
					<div class="postcontent">
						<?php the_content('Read the rest...'); ?>
					</div>
					<span class="mcomments"><?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<div class="navigation">
		<?php if(function_exists('wp_pagenavi')): { wp_pagenavi(); }  else : ?>
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		<?php endif ?>
			
			<div style="clear:both;"></div>
		</div>
	</div>
	<?php get_sidebar(); ?>
	<div style="clear:both;"></div>
</div>
<?php get_footer(); ?>