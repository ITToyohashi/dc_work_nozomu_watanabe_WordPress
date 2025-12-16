<?php get_header(); ?>

<div id="cont_first" class="container">
  <div id="contents">
    <div id="cont_left">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <p class="post_date"><?php the_time('Y/m/d'); ?></p>
        <h2 class="post_title"><?php the_title(); ?></h2>

        <div class="post_content">
          <?php the_content(); ?>
        </div>

      <?php endwhile; endif; ?>

    </div>

    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
