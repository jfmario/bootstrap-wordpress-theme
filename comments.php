<?php if($comments) : ?>
  	<?php foreach($comments as $comment) : ?>
		<div id="comment-<?php comment_ID(); ?>" class="well well-sm">
			
			<?php if ($comment->comment_approved == '0') : ?>
				<p class="text-info">Your comment is awaiting approval</p>
			<?php endif; ?>
			<?php comment_text(); ?>
			
			<cite><?php comment_type(); ?> by <?php comment_author_link(); ?> on <?php comment_date(); ?> at <?php comment_time(); ?></cite>
		</div>
	<?php endforeach; ?>
<?php else : ?>
<?php endif; ?>
<?php if(comments_open()) : ?>
	<?php if(get_option('comment_registration') && !$user_ID) : ?>
	
		<p class="text-warning">You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>
		
		<div class="well">
    		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="form-horizontal">
    			
    			<?php if($user_ID) : ?>
    				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
    			<?php else : ?>
    			    <div class="form-group">
    			        <div class="col-lg-3">
    			            <label for="author" class="control-label">Name <?php if($req) echo "(required)"; ?></label>
    			        </div>
    			        <div class="col-lg-9">
    			            <input class="form-control" type="text" name="author" id="author" value="<?php echo $comment_author; ?>"/>
    			        </div>
    			    </div>
    			    <div class="form-group">
    			        <div class="col-lg-3">
    			            <label for="email" class="control-label">Email <?php if($req) echo "(required)"; ?></label>
    			        </div>
    			        <div class="col-lg-9">
    			            <input class="form-control" type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>"/>
    			        </div>
    			    </div>
    			    <div class="form-group">
    			        <div class="col-lg-3">
    			            <label for="url" class="control-label">Website</label>
    			        </div>
    			        <div class="col-lg-9">
    			            <input class="form-control" type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>"/>
    			        </div>
    			    </div>
    			<?php endif; ?>
    			
    			<div class="form-group">
    			    <div class="col-lg-3">
    			        <label for="comment" class="control-label">Comment</label>
    			    </div>
    			    <div class="col-lg-9">
    			        <textarea class="form-control" name="comment" id="comment" cols="100%" rows="8"></textarea>
    			     </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <input class="btn btn-primary" name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
                    </div>
                </div>
                
                <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
    			
    			<?php do_action('comment_form', $post->ID); ?>
    		</form>
    	</div>
	<?php endif; ?>
<?php else : ?>
	<p class="text-danger">Comments are not allowed for this item.</p>
<?php endif; ?>