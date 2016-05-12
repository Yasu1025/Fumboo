<?php if(have_comments()): ?>
  <ul>
    <?php wp_list_comments(array(
      'format' => 'html5'
    )) ?>
  </ul>
<?php endif; ?>

<?php comment_form(array(
  'title_reply' => 'Leave a Comment',
  'label_submit' => 'Submit',
  'format' => 'html5'
  )); ?>
