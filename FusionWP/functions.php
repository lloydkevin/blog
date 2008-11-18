<?php
if ( function_exists('register_sidebar') )
    register_sidebars(1);
	

function popular_posts() {
	akpc_most_popular();
}

register_sidebar_widget('Popular Posts', 'popular_posts');
?>