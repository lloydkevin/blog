<!-- begin sidebar -->

<div id="sidebar">
<div class="search_header">SEARCH
<form id="searchform_header" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>"><input type="text" name="s" id="s" value="Type and hit Enter..." onfocus="if (this.value == 'Type and hit Enter...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Type and hit Enter...';}" /></form>
</div><!-- search_header-->
<? include(TEMPLATEPATH."/ads.php"); ?>
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('top-sidebar') ) : ?>

<?php endif; ?>
<div id="sidebar-left">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('left') ) : ?>

<?php endif; ?>
</div> <!-- sidebar-left -->
<div id="sidebar-right">
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('right') ) : ?>

<?php endif; ?>
</div> <!-- sidebar-right -->

</div><!-- sidebar-->