<!-- Coda -->
<li id="slider">
	<ul class="navigation">
		<li><h2><a href="#popular-posts-coda">Popular Posts</a></h2></li>
		<li><h2><a href="#recent-posts-coda">Recent Posts</a></h2></li>
		<li><h2><a href="#tag_cloud-coda">Tag Cloud</a></h2></li>
	</ul>

	<!-- element with overflow applied -->
	<div class="scroll">
		<!-- the element that will be scrolled during the effect -->
		<div class="scrollContainer">
			<!-- our individual panels -->
			<li id="popular-posts-coda" class="panel">
				<!--<h2 class="widgettitle">Popular Posts</h2>-->
				<?php if (function_exists('WPPP_show_popular_posts')) 
				WPPP_show_popular_posts( "title=&number=10&days=0&show=posts&format=<a href='%post_permalink%' title='%post_title_attribute%'>%post_title% (%post_views% views)</a>" );
				?>
			</li>
			<li id="recent-posts-coda" class="panel">
				<!--<h2>Recent Articles</h2>-->
				<ul>
				<?php get_archives('postbypost', '10', 'custom', '<li>', '</li>'); ?>
				</ul>
			</li>
			<li id="tag_cloud-coda" class="panel">
				<!--<h2 class="widgettitle">Tags</h2>-->
				<?php wp_tag_cloud(''); ?>
			</li>
		</div>
	</div>
</li>
<!-- Coda -->