<?php get_header(); ?>

    <div id="cont_first" class="container">
        <div id="contents">
            <div id="cont_left">
                <div class="information">
                    <h2>Blog</h2>

                    <dl>
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <dt><?php the_time('Y-m-d'); ?></dt>
                    <dd>
                        <div class="b_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/sample.jpg" alt="">
                        </div>
                        <div class="b_right">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </div>
                    </dd>
                    <?php endwhile; endif; ?>
                    </dl>

                    <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

                </div>
                <div class="information">
                    <h2>INFORMATION</h2>

                    <dl>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <dt><?php the_time('Y-m-d'); ?></dt>
                            <dd>
                            <?php
                                $cats = get_the_category();          // get_ は「取得」(配列で返る)
                                $cat  = $cats ? $cats[0] : null;     // 先頭カテゴリを使う
                            ?>
                            <?php if ($cat) : ?>
                                <span class="tab tag_<?php echo esc_attr($cat->slug); ?>">
                                <?php echo esc_html($cat->cat_name); ?>
                                </span>
                            <?php endif; ?>

                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>を掲載しました。
                            </dd>
                        <?php endwhile; endif; ?>
                    </dl>

                    <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>

                </div>
            </div>
            	<?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>	