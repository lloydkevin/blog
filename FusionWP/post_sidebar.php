<div id="sidebar">


<ul>

<li class="side">

<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(1) ) : ?>


</li>

<li class="side">

<h2>Recent Entries</h2>
<h1>Recent Articles</h1>

<ul>
<?php get_archives('postbypost', '5', 'custom', '<li>', '</li>'); ?>
</ul>

</li>



<li class="side">

<h2>Catagories</h2>
<h1>Articles by category</h1>

<ul>
<?php wp_list_cats(); ?>
</ul>

</li>


<li class="side">

<h2>Archives</h2>
<h1>Dig into our archives</h1>

     <ul>
<?php wp_get_archives('type=monthly'); ?>
     </ul>

</li>


<li class="side">
<h2>Authors &amp; Contributers</h2>
<h1>Meet our team!</h1>
<ul>
    <?php
    $order = 'user_nicename';
    $user_ids = $wpdb->get_col("SELECT ID FROM $wpdb->users ORDER BY $order"); // query users
    foreach($user_ids as $user_id) : // start authors' profile "loop"
    $user = get_userdata($user_id);
    ?>
    <li><?php echo '<a href="' . $user->user_url . '">' . $user->display_name . '</a>'; ?><br /></li>
    <?php
    endforeach; // end of authors' profile 'loop'
    ?>
</ul>
</li>



<!-- Ad Spot -->

<?php endif; ?>
</ul>