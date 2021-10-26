<?php get_header(); ?>

<body>
    <?php include 'inc/bodytag.php'; ?>


    <div id="container">
        
        <main id="column">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?>

            <div id="wrapper--column">
                <h2>コラム一覧</h2>

                <ul class="column__list">

                    <?php
                        $catquery = new WP_Query( array(
                            'post_status' => 'publish',
                            'category_name' => 'category-mansion,category-toch,category-kodate, category-kimono',
                            'post_type' => 'post', //　ページの種類（例、page、post、カスタム投稿タイプ名）
                            'paged' => $paged,
                            'posts_per_page' => 13, // 表示件数
                            'orderby' => 'date',
                            'order' => 'DESC'
                            
                        )); // 카테고리 ID, 표시 글 개수
                        while($catquery->have_posts()) : $catquery->the_post();
                        $column_not = get_field('footer_column_list');
                            
                        ?>
                        <?php if(!$column_not) : ?>
                        <li>
                            <a href="<?php the_permalink() ?>" rel="bookmark">
                                <div class="column__left">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </div>

                                <div class="column__right">

                                    <div class="right__top"><?php the_title(); ?></div>
                                    <div class="right__bottom"><?php the_excerpt(); ?></div>

                                </div>
                            </a>
                        </li>
                        <?php endif; ?>
                    <?php endwhile; ?>

                    <?php
                    $args = array(
                        'mid_size' => 1,
                        'prev_text' => '&lt;&lt;前へ',
                        'next_text' => '次へ&gt;&gt;',
                        'screen_reader_text' => ' ',
                    );
                    the_posts_pagination($args);
                    ?>
                </ul>
            </div>
        </main>

        <?php get_sidebar(); ?>

<?php get_footer(); ?>