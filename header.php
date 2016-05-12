<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title><?php wp_title('-',true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/responsive.css">
    <?php wp_head(); ?>
  </head>
  <body>

<header>
  <div class="contents_wrap header_wrap">
    <div class="header_in site_title">
      <div class="logos">
        <h1>
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/famboologo.png" width="37" height="37"  alt="Logo" />
            <?php bloginfo('name'); ?>
          </a>
        </h1>
      </div>
    </div>

    <div class="header_in gnav">
      <ul>
        <li><a href="<?php echo home_url() ?>">Home</a></li><!--
     --><li><a href="#">Category</a>
          <ul>
            <li><a href="<?php $cat = get_category_by_slug('movie');
echo get_category_link( $cat->cat_ID ); ?>">Movie</a></li>
            <li><a href="<?php $cat = get_category_by_slug('music');
echo get_category_link( $cat->cat_ID ); ?>">Music</a></li>
            <li><a href="<?php $cat = get_category_by_slug('Other');
echo get_category_link( $cat->cat_ID ); ?>">Other</a></li>
          </ul>
        </li><!--
     --><li><a href="<?php $cat = get_category_by_slug('web-design');
echo get_category_link( $cat->cat_ID ); ?>">Web Design</a></li><!--
     --><li><a href="http://wp.yasuhirokitasaka.com/about-me/">About</a></li>
      </ul>
    </div>
    <div class="header_in search_box">
      <form role="search" method="get" id="searchform" action="http://localhost:8888/wordpress" >
      	  <input type="text" placeholder="Search" name="s" id="s" />
      </form>
    </div>
  </div>

  <a class="menu-trigger" href="#">
  	<span></span>
  	<span></span>
  	<span></span>
  </a>

</header>

<?php if(!is_single()): ?>
<div class="page_title">
  <div class="contents_wrap">
  <?php if(is_home()): ?>
      <h3 class="list_title">News</h3>
<?php elseif(is_category()): ?>
  <h3 class="list_title">Category</h3>
  <p><?php single_cat_title(); ?></p>
<?php elseif (is_tag()):?>
  <h3 class="list_title">Tag</h3>
  <p><?php single_tag_title(); ?></p>
<?php elseif (is_date()):?>
  <h3 class="list_title">Archives</h3>
  <p><?php echo get_the_date('m/Y') ?></p>
<?php elseif (is_search()):?>
  <h3 class="list_title">Search</h3>
  <p><?php echo get_search_query(); ?></p>
<?php endif; ?>
  </div>
</div>
<?php endif; ?>

<div class="contents_wrap main_contents">
