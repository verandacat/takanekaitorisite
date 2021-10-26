<?php get_header(); ?>

<body>
    <?php include 'inc/bodytag.php'; ?>


    <div id="container">

        <main id="main" class="main">
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
                'p' => 54

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
                'p' => 79

            );
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
                $image_id = get_post_thumbnail_id ();
                $image_url = wp_get_attachment_image_src ($image_id, true);
            ?>
            <?php the_content() ; ?>
            <?php endwhile; endif; wp_reset_query(); ?>

        </main>
        <?php get_sidebar('top'); ?>


        <?php get_footer(); ?>