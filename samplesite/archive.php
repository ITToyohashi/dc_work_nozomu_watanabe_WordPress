<?php get_header(); ?>

<div id="cont_first" class="container">
  
  <?php if ( function_exists( 'bcn_display' ) ) : ?>
  <div class="breadcrumb">
    <?php bcn_display(); ?>
  </div>
  <?php endif; ?>

  <div id="contents">

<div id="cont_left">

  <div class="information">
    <h2>INFORMATION</h2>

    <dl>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <dt><?php the_time('Y-m-d'); ?></dt>
      <dd>

        <?php
          $cat = get_the_category();
          $cat = $cat[0];
        ?>
        <span class="tab tag_<?php echo esc_attr($cat->slug); ?>">
          <?php echo esc_html($cat->cat_name); ?>
        </span>

        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を掲載しました。
      </dd>
      <?php endwhile; endif; ?>
    </dl>

    <?php if ( function_exists('wp_pagenavi') ) { wp_pagenavi(); } ?>
  </div>

    </div>
    <?php get_sidebar(); ?>
  </div>
  
</div>

<?php get_footer(); ?>
