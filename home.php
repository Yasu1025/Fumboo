<?php get_header(); ?>


  <section class="list main_left home">
  <div class="post_colmuns">
    
    <?php
      if(have_posts()):
      while(have_posts()):
      the_post();
    ?>
    <?php get_template_part('post','mid'); ?>
    <?php endwhile; endif; ?>
  </div><!-- /.post_columns -->
  <div class="page_nav">
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
  </div>
</section>

<section class="sidebar main_right">
  <?php get_sidebar(); ?>
</section>

<!-- next & prev link -->



<?php get_footer(); ?>
