<!DOCTYPE html>
<html lang="ja">
  <head>
  <meta charset="UTF-8">
  
<?php if ( is_home() || is_front_page() ) : ?>
    <title><?php bloginfo('name'); ?></title>
<?php else : ?>
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
<?php endif; ?>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
  <script type="text/javascript">
  $(function() {
      $('#slide').slideshow({
          autoSlide    : true,
          effect       : 'fade',
          type         : 'repeat',
          interval     : 2000,
          duration     : 500,
          imgHoverStop : true,
          navHoverStop : true
      });
  });
  </script>
  
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <?php wp_head(); ?>
  </head>
  <body>
  <header>
    <div class="container">
      <h1>
        <a href="<?php echo home_url(); ?>/">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="SAMPLE WEB SITE" />
        </a>
      </h1>
      <div id="menu">
        <ul>
          <li class="home"><a href="<?php echo home_url(); ?>/">TOP</a></li>
          <?php wp_nav_menu( array(
            'theme_location'=>'place_global',
            'container' =>'',
            'menu_class' =>'',
            'items_wrap' => '%3$s',
          )); ?>
        </ul>
      </div>
    </div>
  </header>