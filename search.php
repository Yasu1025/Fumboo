<?php get_header(); ?>

    <section class="list main_left">

    <?php
      if(have_posts()):
      while(have_posts()):
      the_post();
    ?>
    <?php get_template_part('post','mid'); ?>
  <?php endwhile;else:?>
    <div class="no_result">
      <p>
        There is no such Articles... Please try again with another keyword..
      </p>
      <!-- <?php get_search_form(); ?> -->
    </div>
  <?php endif; ?>

</section>
<section class="sidebar main_right">
  <?php get_sidebar(); ?>
</section>

<!-- next & prev link -->
<?php if($wp_query->max_num_pages > 1): ?>
<div class="navlink">
  <span class="nav-prev">
    <?php next_posts_link('Older'); ?>
  </span>
  <span class="nav-next">
    <?php previous_posts_link('Next'); ?>
  </span>
</div>
<?php endif; ?>

<?php get_footer(); ?>
