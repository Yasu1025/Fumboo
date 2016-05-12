<?php

  // Set content(URL) Width
  // if(!isset($content_width)){
  //     $content_width = 600;
  // }




  function myScripts(){
    wp_enqueue_script('jquery');
      // Comment Reply
    if(is_single()){
    wp_enqueue_script('comment-reply');
    }

  }
  add_action('wp_enqueue_scripts', 'myScripts');



  function myLength($length){
    return 100;
  }
  add_filter("excerpt_mblength","myLength");

  function moreWord($more){
    return "...";
  }
  add_filter("excerpt_more", "moreWord");

  add_theme_support('post-thumbnails');

  // Widget
  register_sidebar(array(
    'id' => "Column01",
    'name' => "Col01",
    'description' => "First Col",
    'before_widget' => '<aside id="%1$s" class="widgets %2$s">',
    'after_widget' => "</aside>",
    'before_title' => '<h3 class="widget_title">',
    'after_title' => "</h3>"
  ));
  register_sidebar(array(
    'id' => "Column02",
    'name' => "Col02",
    'description' => "Second Col",
    'description' => "First Col",
    'before_widget' => '<aside id="%1$s" class="widgets %2$s">',
    'after_widget' => "</aside>",
    'before_title' => '<h3 class="widget_title">',
    'after_title' => "</h3>"
  ));
  register_sidebar(array(
    'id' => "Column03",
    'name' => "Col03",
    'description' => "Third Col",
    'description' => "First Col",
    'before_widget' => '<aside id="%1$s" class="widgets %2$s">',
    'after_widget' => "</aside>",
    'before_title' => '<h3 class="widget_title">',
    'after_title' => "</h3>"
  ));
  register_sidebar(array(
    'id' => "Column04",
    'name' => "Col04",
    'description' => "Forth Col",
    'description' => "Forth Col",
    'before_widget' => '<aside id="%1$s" class="widgets %2$s">',
    'after_widget' => "</aside>",
    'before_title' => '<h3 class="widget_title">',
    'after_title' => "</h3>"
  ));

  add_theme_support('html5', array('search-form'));

  /* change the number of post for small articles */

  function myQuery($query){
    if(is_admin() || !$query->is_main_query()){
      return;
    }
    if($query->is_home()){
      $query->set('posts_per_page','6');
    }
  }
  add_action('pre_get_posts', 'myQuery');



?>
