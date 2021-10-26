<?php get_header(); ?>

<body>
    <?php include 'inc/bodytag.php'; ?>

     
    <div id="container--main">

        <main id="main">
            <?php if ($browser == 'sp') : ?>
            <header>
                <img src="<?php bloginfo('template_url'); ?>/img/sp-kimono-fv.jpg" alt="">
            </header>
            <!-- header END -->
            <?php else : ?>
            <header>
            
            </header>
            <?php endif; ?>

            <div class="formwrap">
            <?php get_search_form(); ?>

            </div>

            <!--------------------------------------
                            ランキング上
            ---------------------------------------->
            <?php wp_reset_postdata(); 
            $args = array(
                'post_type' => 'post',
                'category_name' => 'content',
                'p' => 1274

            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $image_id = get_post_thumbnail_id ();
                $image_url = wp_get_attachment_image_src ($image_id, true);
            ?>
            <?php the_content() ; ?>
            <?php endwhile; endif; wp_reset_query(); ?>
            
            
            <!-----------------------------------------RANKING START------------------------------------------------->
            <section id="section08 center">
                
                <?php include('ranking.php'); ?>

            </section>
            <!-- #section08 END -->
            <!-----------------------------------------RANKING END------------------------------------------------->


            <!--------------------------------------
                            ランキング下
            ---------------------------------------->
            <?php wp_reset_postdata(); 
            $args = array(
                'post_type' => 'post',
                'category_name' => 'content',
                'p' => 1258

            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $image_id = get_post_thumbnail_id ();
                $image_url = wp_get_attachment_image_src ($image_id, true);
            ?>
            <?php the_content() ; ?>
            <?php endwhile; endif; wp_reset_query(); ?>

            <section id="section11">

                <?php include "kimono2/sorter-table.php"; ?>

                <div class="column-lists-box">
                    <h2 class="midashi-h2">着物買取のコラム</h2>
                    <ul>
                        <?php
                        $catquery = new WP_Query( array(
                            'post_status' => 'publish',
                            'category_name' => 'column',
                            'post_type' => 'post', //　ページの種類（例、page、post、カスタム投稿タイプ名）
                            'paged' => $paged,
                            'posts_per_page' => 10, // 表示件数
                            'orderby'     => 'date',
                            'order' => 'ASC',
                            'meta_query' => array(array(
                                'key' => 'footer_column_list',
                                'value' => '1',
                                'compare' => '='
                              ))
                        )); // 카테고리 ID, 표시 글 개수
                        while($catquery->have_posts()) : $catquery->the_post();
                        ?>
                        <li>
                            <a class="column-list-link" href="<?php the_permalink() ?>">
                            <i class="fas fa-pen-square"></i><?php the_title(); ?>
                            </a>
                        </li>
                        <?php endwhile; ?>

                    </ul>
                </div>

            </section>
            
        </main>
       
       <?php get_footer(); ?>