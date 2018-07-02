<!-- COMMENTS -->  
<div id="blog-comments" class="comments">
  <h5 class="widget-title title-alt"><strong>0 comments</strong></h5>

  <ul class="comment-list">
    <?php 
      $args = array(
        'walker'            => null,
        'max_depth'         => '',
        'style'             => 'ul',
        'callback'          => null,
        'end-callback'      => null,
        'type'              => 'all',
        'reply_text'        => 'Reply',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 32,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
        'short_ping'        => false,   // @since 3.6
              'echo'              => true     // boolean, default is true
      );
    ?>
    <?php wp_list_comments($args, $comments); ?>
  </ul>

</div> <!-- END #blog-comments --> 
<!-- COMMENTS end -->

<!-- LEAVE COMMENT -->
<div id="blog-leavecomment" class="leavecomment">                    
  <?php
    $comments_args = array(
      // change the title of send button 
      'label_submit'=>'Send',
      // change the title of the reply section
      'title_reply'=>'Leave a Comment',
      // remove "Text or HTML to be displayed after the set of comment fields"
      'comment_notes_after' => '',
      // redefine your own textarea (the comment body)
      'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
    );

    comment_form($comments_args);
  ?>
</div> <!-- END #blog-leavecomment -->   
<!-- LEAVE COMMENT -->