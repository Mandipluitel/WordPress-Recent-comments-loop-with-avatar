<h4>Recent Comments</h4>	
<?php $args = array(
  'posts_per_page' => 5,
  'orderby' => 'date',
  'order' => 'DESC'
);

$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
if ( $comments ) {
    foreach ( $comments as $comment ) { ?>
      <div class="recent-comment-line">
      
        // Displays Commentator Avatar
        <?php echo get_avatar( $comment, 50 ); ?>
        <div class="comment-desc">
          <p><a href="<?php echo get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID ?>"><?php echo $comment->comment_author ?></a></p>

          // Controlling Comment content text length and limiting it to 81
          <p><?php echo substr($comment->comment_content, 0, 81); ?>...</p>
        </div>
      </div>  
    <?php	}
} ?>
