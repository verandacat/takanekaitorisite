<?php get_header(); ?>

<body>
    <div id="container--main">
        <main id="main">
            <h1 id="logo"><a href="<?php echo home_url('/'); ?>">HOME</a> > <?php the_title(); ?></h1>

            <?php 
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
                the_content(); 
                endwhile; 
            endif; 
            ?>
        </main>

    </div>
    <?php get_footer(); ?>