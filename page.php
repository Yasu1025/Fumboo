
<?php get_header(); ?>


<section class="list main_left">
  <?php
    if(have_posts()):
    while(have_posts()):
    the_post();
  ?>

  <article <?php post_class("page_post"); ?>>

  <h1 class="single_title"><?php the_title(); ?></h1>


  <?php the_content(); ?>

  

  <?php comments_template(); ?>


  </article>

  <?php endwhile; endif; ?>

</section>

<section class="sidebar main_right">
<?php get_sidebar(); ?>
</section>


<?php get_footer(); ?>

<?php wp_footer(); ?>
