<?php get_header(); ?>

<body>
    <?php //include 'inc/bodytag.php'; ?>

    <div id="container">

       
        <main id="column">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
            ?>

            

            <div id="wrapper--single">

                <?php if(have_posts()): while(have_posts()):the_post(); ?>

                <h1><?php the_title(); ?></h1>

                <div class="single__img">
                    <?php the_post_thumbnail('large'); ?>
                </div>

                <div class="singleItem">

                    <div class="item__descript">
                        <?php the_content(); ?>
                    </div>

                </div>

                <?php endwhile; endif; ?>

                <div class="preNex">
                <?php previous_post_link('%link', '<< 前の記事へ'); ?>
                <?php next_post_link('%link', '次の記事へ >>'); ?>
                </div>

            </div>
            
        </main>
        <?php get_sidebar(); ?>


<?php get_footer(); ?>