
  <article <?php post_class('post_mid'); ?>>
  <a href="<?php the_permalink(); ?>">

    <?php if(has_post_thumbnail()): ?>
      <?php the_post_thumbnail('thumbnail'); ?>
    <?php else: ?>
      <?php preg_match('/wp-image-(\d+)/s', $post->post_content, $thumb); ?>
      <?php if($thumb): ?>
        <?php echo wp_get_attachment_image($thumb[1], 'thumbnail') ?>
      <?php else: ?>
<img src="<?php echo get_template_directory_uri(); ?>/screenshot.jpg" width="250" height="180" alt="" /><?php endif; ?>
    <?php endif; ?>


  </a>
  <div class="post_con">
    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>

  <div class="postinfo">
     <time datetime="<?php echo get_the_date('c'); ?>">
      <i class="fa fa-clock-o" aria-hidden="true"></i><?php echo get_the_date('d/m/Y'); ?>
     </time>
     <span class="category">
       <?php if(has_category()): ?>
         <i class="fa fa-folder-open-o" aria-hidden="true"></i><?php the_category(', ') ?>
       <?php endif; ?>
     </span>
  </div>

  <?php the_excerpt(); ?>
  </div>

  </article>
