
<?php get_header(); ?>


<section class="list main_left">
  <?php
    if(have_posts()):
    while(have_posts()):
    the_post();
  ?>

  <article <?php post_class("single_post"); ?>>

  <h1 class="single_title"><?php the_title(); ?></h1>

  <div class="postinfo">
      <a class="" href="<?php echo get_month_link(get_the_date('Y'), get_the_date('m')); ?>">
        <time datetime="<?php echo get_the_date('c'); ?>">
          <i class="fa fa-clock-o" aria-hidden="true"></i><?php echo get_the_date('d/m/Y'); ?>
        </time>
      </a>
    <span class="category">
      <?php if(has_category()): ?>
        <i class="fa fa-folder-open-o" aria-hidden="true"></i><?php the_category(', ') ?>
      <?php endif; ?>
    </span>
    <span>
      <i class="fa fa-commenting" aria-hidden="true"></i><?php comments_number('No comments', '', '% comments'); ?>
    </span>

  </div>

  <?php the_content(); ?>

  <!-- next & prev link -->
  <div class="navlink">
    <span class="nav-prev">
      <?php previous_post_link('%link', '<i class="fa fa-angle-left" aria-hidden="true"></i>%title'); ?>
    </span>
    <span class="nav-next">
      <?php next_post_link('%link', '%title<i class="fa fa-angle-right" aria-hidden="true"></i>'); ?>
    </span>
  </div>

  <?php comments_template(); ?>


  </article>

  <?php endwhile; endif; ?>

</section>

<section class="sidebar main_right">
<?php get_sidebar(); ?>
</section>


<?php get_footer(); ?>

<?php wp_footer(); ?>
