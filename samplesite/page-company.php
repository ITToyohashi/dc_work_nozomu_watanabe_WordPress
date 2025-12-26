<?php get_header(); ?>

<?php
/* Template Name: 会社概要 */
?>

    <div id="cont_first" class="container">
        
            <?php if ( function_exists( 'bcn_display' ) ) : ?>
            <div class="breadcrumb">
                <?php bcn_display(); ?>
            </div>
            <?php endif; ?>

        <div id="contents">
            <div id="cont_left">

                <h2>会社概要</h2>
                <table>
                    <tr>
                        <th>会社名</th>
                        <td><?php the_field( 'add_company' ); ?></td>
                    </tr>
                    <tr>
                        <th>本社</th>
                        <td><?php the_field( 'add_address' ); ?></td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td><?php the_field( 'add_established' ); ?></td>
                    </tr>
                    <tr>
                        <th>資本金</th>
                        <td><?php the_field( 'add_capital' ); ?></td>
                    </tr>
                    <tr>
                        <th>従業員数</th>
                        <td><?php the_field( 'add_member' ); ?></td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td><?php the_field( 'add_tel' ); ?></td>
                    </tr>
                    <tr>
                        <th>代表者</th>
                        <td><?php the_field( 'add_ceo' ); ?></td>
                    </tr>
                </table>
            </div>

            <?php get_sidebar(); ?>

        </div>
    </div>
<?php get_footer(); ?>
