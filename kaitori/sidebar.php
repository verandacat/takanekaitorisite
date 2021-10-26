<aside>

    <div id="post__list" class="post__01">

        <h2 class="post__list--title">話題の特集</h2>

        <ul class="list">

        <?php wp_reset_postdata();
        $args = array(
          'posts_per_page' => '5',
          'category_name' => 'category-kimono',
          'post_type' => 'post',
          'orderby' => 'meta_value',
          'order' => 'asc',
          'meta_query' => array(array(
            'key' => 'post_01',
            'value' => '1',
            'compare' => '='
          ))
      );
      $the_query = new WP_Query($args);
      
      if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post();
      ?>

            <li>
                <a href="<?php the_permalink(); ?>" class="flex">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <?php the_title(); ?>
                </a>
            </li>

            <?php endwhile; endif; wp_reset_query(); ?>

        </ul>

    </div>

    <div id="post__list" class="post__02">

        <h2 class="post__list--title">お役立ち記事</h2>

        <ul class="list">

            <?php wp_reset_postdata();
            $args = array(
              'posts_per_page' => '5',
              'category_name' => 'category-kimono',
              'post_type' => 'post',
              'orderby' => 'meta_value',
              'order' => 'asc',
              'meta_query' => array(array(
                'key' => 'post_02',
                'value' => '1',
                'compare' => '='
              ))
          );
          $the_query = new WP_Query($args);
          
          if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>

            <li>
                <a href="<?php the_permalink(); ?>" class="flex">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <?php the_title(); ?>
                </a>
            </li>

            <?php endwhile; endif; wp_reset_query(); ?>

        </ul>

    </div>


</aside>