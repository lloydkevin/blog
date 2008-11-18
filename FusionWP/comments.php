<?php // Do not delete these lines
if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die ('Please do not load this page directly. Thanks!');
if (!empty($post->post_password)) { // if there's a password
	if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
?>

<h2><?php _e('Password Protected'); ?></h2>
<p><?php _e('Enter the password to view comments.'); ?></p>

<?php return;
	}
}

	/* This variable is for alternating comment background */

$oddcomment = 'alt';

?>

<!-- You can start editing here. -->
<?php if (function_exists(similar_posts)): ?>
	<!-- Related Posts -->
	<h4>Related Posts</h4>
		<?php similar_posts(); ?>
	<!-- Related Posts -->
<?php endif; ?>	

<?php if ($comments) : ?>
	<h5>&nbsp; 
 <?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h5>
<br /><br />
<ol class="commentlist">
<!-- Not Trackback -->

<?php foreach ($comments as $comment) : ?>
<? if ($comment->comment_type != "trackback" && $comment->comment_type != "pingback" && !ereg("<pingback />", $comment->comment_content) && !ereg("<trackback />", $comment->comment_content)) : ?> 
	<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">




	<div class="commentmetadata">

	<div class="comment<?php if ($comment->user_id == get_the_author_ID()) echo ' mycomment'; ?>">

<?php if(function_exists("MyAvatars")) MyAvatars(); ?>
<?php if(function_exists("gravatar")) gravatar(); ?>
<?php echo get_avatar($comment, 50) ?>
	<div><?php comment_text() ?></div>
	

	<p class="line">
	<strong>

	<?php comment_author_link() ?></strong>, <?php _e('on'); ?> <?php comment_date('F jS, Y') ?> <?php _e('at');?> <?php comment_time() ?></a> <?php edit_comment_link('[Manage]','',''); ?>
	 		<?php if ($comment->comment_approved == '0') : ?>
			<em><?php _e('Your comment is awaiting moderation.'); ?></em>
	 		<?php endif; ?>

	</strong>
	<br />
	</div>


		


	<?php /* Changes every other comment to a different class */
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>
<?php endif; ?>
<!-- No Trackbacks -->

<?php endforeach; /* end for each comment */ ?>
	</ol>
	
<!-- Track Backs -->
<?php foreach ($comments as $comment) : ?>
<? if ($comment->comment_type == "trackback" || $comment->comment_type == "pingback" || ereg("<pingback />", $comment->comment_content) || ereg("<trackback />", $comment->comment_content)) : ?>
		<? if (!$runonce) { $runonce = true; ?>
		<h2 id="trackbacks">Trackbacks & Pingbacks</h2>
		<ol id="trackbacklist">
		<? } ?>	
	
		<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">

		



	<div class="commentmetadata">

	<div class="ping">
	<?php //comment_text() ?>

	<p class="line">
	<strong>
	<?php comment_author_link() ?></strong>, <?php _e('on'); ?> <?php comment_date('F jS, Y') ?> <?php _e('at');?> <?php comment_time() ?></a> <?php edit_comment_link('[Manage]','',''); ?>
	 		<?php if ($comment->comment_approved == '0') : ?>
			<em><?php _e('Your comment is awaiting moderation.'); ?></em>
	 		<?php endif; ?>

	</strong>
	<br />
	</div>


		


	<?php /* Changes every other comment to a different class */
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>
<?php endif; ?>
<!-- No Trackbacks -->

<?php endforeach; /* end for each comment */ ?>
	<? if ($runonce) { ?>
	</ol>
	<? } ?>






<!-- Track Backs -->




<?php else : // this is displayed if there are no comments so far ?>

<?php if ('open' == $post->comment_status) : ?>
	<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>

	<!-- If comments are closed. -->
<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

		<h3 id="respond">
Leave a Reply (I Follow)</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" class="formin" />
<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" class="formin" />
<label for="email"><small>Mail <?php if ($req) echo "(*)"; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" class="formin" />
<label for="url"><small>Website</small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> <?php _e('You can use these tags&#58;'); ?> <?php echo allowed_tags(); ?></small></p>-->

<p><textarea name="comment" id="comment" cols="60" rows="10" tabindex="4" class="formin"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>

<?php do_action('comment_form', $post->ID); ?>

</form>
<br /><br /><br /><br />

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>