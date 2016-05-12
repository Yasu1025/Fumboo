</div><!-- /.wrap -->
<footer>
  <div class="contents_wrap">
    <div class="f_contents footer_left">
      <div class="col col3">
        <?php dynamic_sidebar('Col03'); ?>
      </div>
    </div><!--
    --><div class="f_contents footer_right">
          <?php dynamic_sidebar('Col04'); ?>
        </div>
  </div>
  <div class="copyright">
    <small>
      Copyright &copy; <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
    </small>
  </div>

</footer>

<?php wp_footer(); ?>
</body>
</html>
