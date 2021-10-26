<?php get_header(); ?>

<body>
    <div id="container">
        <main id="main" class="main">
            <h1 id="logo"><a href="<?php echo home_url('/'); ?>">HOME</a> > <?php the_title(); ?></h1>

            <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
                the_content(); 
                endwhile; 
            endif; 
            ?>
        </main>
        <?php get_sidebar('top'); ?>


    </div>
    <?php get_footer(); ?>