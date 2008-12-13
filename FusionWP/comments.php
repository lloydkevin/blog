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
<?php if (function_exists(similar_posts)): ?>
	<!-- Related Posts -->
	<h4>Related Posts</h4>
		<?php similar_posts(); ?>
	<!-- Related Posts -->
<?php endif; ?>

<?php
function list_pings($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment;
?>
        <li id="comment-<?php comment_ID(); ?>"><?php comment_author_link(); ?>
<?php } ?>

<?php
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>

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
		<?php comment_reply_link(array_merge( $args, array('add_below' => 'comment', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?> 
				<?php if ($comment->comment_approved == '0') : ?>
				<em><?php _e('Your comment is awaiting moderation.'); ?></em>
		 		<?php endif; ?>

		</strong>
		
		</div>





		<?php /* Changes every other comment to a different class */
			if ('alt' == $oddcomment) $oddcomment = '';
			else $oddcomment = 'alt';
		?>

<?php
        }
?>

<div class="boxcomments">
<h5 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h5>
<?php
if (have_comments()) : 	
	if (!empty($comments_by_type['comment'])) : ?>

		<ol class="commentlist">
			<?php wp_list_comments(array('avatar_size'=>40, 'type'=>'comment', 'callback'=>'mytheme_comment')); ?>
		</ol>
	<?php endif;
	if ( ! empty($comments_by_type['pings']) ) : ?>

		<h3 id="pings">Trackbacks/Pingbacks</h3>

		<ol class="pinglist">
			<?php wp_list_comments('type=pings&callback=list_pings'); ?>
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

<div id="respond">
	
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
				
		<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" class="formin" />
		<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>

		<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" class="formin" />
		<label for="email"><small>Mail <?php if ($req) echo "(*)"; ?></small></label></p>

		<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" class="formin" />
		<label for="url"><small>Website</small></label></p>

	<?php endif; ?>
	
		<!--<p><small><strong>XHTML:</strong> <?php _e('You can use these tags&#58;'); ?> <?php echo allowed_tags(); ?></small></p>-->

		<p><textarea name="comment" id="comment" rows="10" tabindex="4" class="formin"></textarea></p>

		<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
		<?php comment_id_fields(); ?>
		</p>
	
	<div><?php do_action('comment_form', $post->ID); ?></div>

	</form>
</div><!-- end #respond -->

<?php
	endif; // If registration required and not logged in
endif;
?>
</div><!-- end boxcomments -->