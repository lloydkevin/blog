<?php get_header(); ?>
	<div class="leftcolumn">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="article" id="<?php the_ID(); ?>">
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<span class="postmeta"><?php the_time('F jS, Y') ?>, Author: <?php the_author(); ?>, Categories: <?php the_category(', '); ?></span>
					<div class="postcontent">
						<?php the_content('Read the rest...'); ?>
						<?php
						if (function_exists('mightyadsense4template'))
							mightyadsense4template(2);
						?>
						<?php if (function_exists(similar_posts)): ?>
							<!-- Related Posts -->
							<h3>Similar Posts</h3>
								<?php similar_posts(); ?>
							<!-- Related Posts -->
						<?php endif; ?>
					</div>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php comments_template(); ?>
	</div>
	<?php get_sidebar(); ?>
	<div style="clear:both;"></div>
</div>
<?php get_footer(); ?>