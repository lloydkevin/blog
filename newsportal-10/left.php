  <div id="left_side">
  
  <?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(1) ) : ?>
		
		
		      <div class="block block-user">
<?php if (function_exists('wp_theme_switcher')) { ?>

<h3>Themes</h3>

<?php wp_theme_switcher('dropdown'); ?>

<?php } ?>
   
 </div>
 

  <?php endif; ?>
  
  </div>
  


