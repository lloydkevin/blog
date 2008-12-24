<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php
if (function_exists('mightyadsense4template'))
	mightyadsense4template(2);
?>
<?php if (function_exists(similar_posts)): ?>
	<!-- Related Posts -->
	<h4>Related Posts</h4>
		<?php similar_posts(); ?>
	<!-- Related Posts -->
<?php endif; ?>
<div class="commentblock">
<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>
<?php
if (have_comments()) : 	

	if (!empty($comments_by_type['comment'])) : ?>

		<ol id="commentlist">
			<?php wp_list_comments(array('avatar_size'=>70, 'type'=>'comment')); ?>
		</ol>
	<?php endif;
	if ( ! empty($comments_by_type['pings']) ) : ?>

		<h3 id="pings">Trackbacks/Pingbacks</h3>

		<ol class="tblist">
			<?php wp_list_comments('type=pings'); ?>
		</ol>
	<?php endif; ?>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far 

	if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
		<!-- I don't see the point of this bit but have left it here just incase! -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p id="comments-closed">Sorry, comments for this entry are closed at this time.</p>

	<?php endif;
endif;
?>

<?php if ('open' == $post->comment_status) : ?>

<div id="respond" class="commentsform">
	
	<?php if (get_option('comment_registration') && !$user_ID ) : ?>
		<p id="comments-blocked">You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=
		<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	<?php comment_form_title( 'Leave a Comment', 'Leave a Reply to %s' ); ?>
	
	<p><?php cancel_comment_reply_link() ?></p>

	<?php if ($user_ID) : ?>
	
	<p>You are logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php">
		<?php echo $user_identity; ?></a>. To logout, <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">click here</a>.
	</p>
	
	<?php else : ?>
	
	<p><?php _e('Name ');?><?php if ($req) _e('(required)'); ?><br />
	<input type="text" name="author" id="s1" value="<?php echo $comment_author; ?>" size="40" tabindex="1" />
	</p>

	<p><?php _e('Email ');?><?php if ($req) _e('(required)'); ?><br />
	<input type="text" name="email" id="s2" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" />
	</p>

	<p><?php _e('Website');?><br />
	<input type="text" name="url" id="s3" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" />
	</p>
	
	<?php endif; ?>

		 <p>
	      <?php _e('Comments');?><br />
	        <textarea name="comment" id="s4" rows="10" tabindex="4"></textarea>
	      </p>
	      <p>
		
		<div><input class="sbutt" name="submit" type="submit" id="submit" value="Submit Comment" />
		<?php comment_id_fields(); ?>
		</div>

	<div><?php do_action('comment_form', $post->ID); ?></div>

	</form>
</div><!-- end #respond -->

<?php
	endif; // If registration required and not logged in
endif;
?>
</div><!-- end boxcomments -->