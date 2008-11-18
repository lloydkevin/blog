<?php
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div class="item">', 
		'after_widget' => '</div>', 
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
?>
