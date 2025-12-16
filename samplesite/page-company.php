<?php get_header(); ?>

<?php
/* Template Name: 会社概要 */
?>

    <div id="cont_first" class="container">
        <div id="contents">
            <div id="cont_left">

            <div class="">
                <?php if (function_exists('bcn_display')) { bcn_display(); } ?>
            </div>

                <h2>会社概要</h2>
                <table>
    	            <tr>
    					<th>会社名</th>
    		            <td>Sample site</td>
    	            </tr>
                    <tr>
                        <th>本社</th>
                        <td>〒000-0000<br>
                            東京都架空区1-2-3-4-5
                        </td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td>2015年1月1日</td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td>2000万円 （2020年3月31日現在）</td>
                    </tr>
                    <tr>
                        <th>従業員数</th>
                        <td><?php the_field('add_member'); ?></td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td><?php the_field('add_tel'); ?></td>
                    </tr>
    	            <tr>
    					<th>代表者</th>
    		            <td>サンプル太郎</td>
    	            </tr>
                </table>
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
<?php get_footer(); ?>
