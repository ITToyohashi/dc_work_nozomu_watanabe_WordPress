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
                <h2>Blog</h2>
                <dl>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <dt><?php the_time('Y-m-d'); ?></dt>
                    <dd>
                        <div class="b_img">
                            <?php the_post_thumbnail('thumbside'); ?>
                        </div>
                        <div class="b_right">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                    </dd>
                    <?php endwhile; endif; ?>
                </dl>

                <?php if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi(); } ?>
            </div>

        </div>
        <?php get_sidebar(); ?>   
    </div>
</div>
<?php get_footer(); ?>
