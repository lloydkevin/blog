<div class="rightcolumn">
<a href="<?php bloginfo('url'); ?>/?feed=rss2" title="RSS Feeds for <?php bloginfo('name'); ?>" class="rss">Rss Feeds</a>
	<div class="sidebar">
<!--<h3>Sponsors:</h3>-->
<? //include(TEMPLATEPATH."/ads.php"); ?>
	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar') ) : else : ?>
		<div class="item latest">
			<h3>Latest Articles:</h3>
			<ul>
			<?php
			global $post;
			$myposts = get_posts('numberposts=5');
			foreach($myposts as $post) :
			?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><br /><?php the_time('F jS, Y') ?></li>
			<?php endforeach; ?>
			</ul>
		</div>
		<div class="item categories">
			<h3>Categories:</h3>
			<ul id="half">
				<?php wp_list_categories('show_count=1&title_li='); ?>
			</ul>
			<div style="clear:both;"></div>
		</div>
		<div class="item monthly">
			<h3>Monthly Archive</h3>
			<ul>
				<?php wp_get_archives('show_post_count=1&title_li='); ?>
			</ul>
			<div style="clear:both;"></div>
		</div>
	<?php endif; ?>
	</div>
</div>
