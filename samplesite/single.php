<?php get_header(); ?>

    <div id="cont_first" class="container">
        <div id="contents">
            <div id="cont_left">

            <?php if(have_posts()): while(have_posts()): the_post();?>

                <div class="breadcrumb">
                  <a href="<?php echo esc_url(home_url('/')); ?>">TOP</a>
                  <span> &gt; </span>
                  <?php
                  $cats = get_the_category();
                  if ($cats) :
                    $cat = $cats[0];
                  ?>
                    <a href="<?php echo esc_url(get_category_link($cat)); ?>">
                      <?php echo esc_html($cat->name); ?>
                    </a>
                    <span> &gt; </span>
                  <?php endif; ?>
                  <span><?php the_title(); ?></span>
                </div>

                <?php the_time('Y/m/d'); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
            
            </div>
            	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>
