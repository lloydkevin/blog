<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}
	
		$oddcomment = ' alt';
?>

<!-- You can start editing here. -->
<div class="comments" id="comments">
	<h2><?php comments_number('0', '1', '%' );?> Comments until now.</h2>

	<?php if ($comments) : ?>
		<?php foreach ($comments as $comment) : ?>
			<div class="comment<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>"  >
				<div class="comment-meta">
					<span><?php comment_author_link() ?></span> + <?php comment_date('F jS, Y') ?> (<a href="#comment-<?php comment_ID() ?>" title="">#</a>):
				</div>
				<?php if ($comment->comment_approved == '0') : ?>
				<p><strong>Your comment is waiting for approval.</strong></p>
				<?php endif; ?>
				<?php comment_text() ?>
			</div>
			<?php
			/* Changes every other comment to a different class */
			$oddcomment = ( empty( $oddcomment ) ) ? ' alt' : '';
			?>
		<?php endforeach; /* end for each comment */ ?>

	<?php else : // this is displayed if there are no comments so far ?>
		<p class="nocomments">Be the first commenter!</p>
		<?php if ('open' == $post->comment_status) : ?>
			<!-- If comments are open, but there are no comments. -->
		<?php else : // comments are closed ?>
			<!-- If comments are closed. -->
			<p class="nocomments">Comments are closed.</p>
		<?php endif; ?>
	<?php endif; ?>

	<div style="height: 50px;"></div>
	<?php if ('open' == $post->comment_status) : ?>
		<h2>Comment!</h2>
		<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
		<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
		<?php else : ?>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

			<?php if ( $user_ID ) : ?>
			<?php else : ?><?php endif; ?>
			<div class="commentform">
				<span class="alignleft">
					Name:*<br />
					Mail Adress:*<br />
					Website:<br />
					Comment:*
				</span>
				<span class="alignright">
					<input class="input" type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="2" />
					<input class="input" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="3" />
					<input class="input" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="4" />
					<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="1"></textarea>
					<div style="clear:both;"></div>
				</span>
				<div style="clear:both;"></div>
				<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment!" class="submitbutton" />
				<input type="hidden" name="comment_post_ID" style="display: none; height: 0; width: 0;" value="<?php echo $id; ?>" />
				<div style="clear:both;"></div>
			</div>
			<?php do_action('comment_form', $post->ID); ?>
		</form>
		<?php endif; // If registration required and not logged in ?>
	<?php endif; // if you delete this the sky will fall on your head ?>
	
</div>

