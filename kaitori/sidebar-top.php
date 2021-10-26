<aside>

  <div id="post__list" class="post__01">

    <h2 class="post__list--title">おすすめ第1位の買取店</h2>

    <?php wp_reset_postdata();
        $args = array(
          'posts_per_page' => '1',
          'category_name' => 'ranking',
          'meta_key' => 'rank-num',
          'post_type' => 'post',
          'orderby' => 'meta_value_num',
          'order' => 'asc'
      );
      $the_query = new WP_Query($args);
      
      if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post();

    $url = get_field('url');
    $pick_img = get_field('side_pick_img');
      ?>
    <div class="side__gold">
      <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank" class="prrrr">
        <img src="<?php echo $pick_img; ?>" alt="">
      </a>
    </div>
    <?php endwhile; endif; wp_reset_query(); ?>


    <h2 class="post__list--title">おすすめの着物買取専門店</h2>

    <ul class="list-new">

      <?php wp_reset_postdata();
        $args = array(
          'posts_per_page' => '3',
          'category_name' => 'ranking',
          'meta_key' => 'rank-num',
          'post_type' => 'post',
          'orderby' => 'meta_value_num',
          'order' => 'asc'
      );
      $the_query = new WP_Query($args);
      
      if ( $the_query->have_posts() ) :
      while ( $the_query->have_posts() ) : $the_query->the_post();

    $url = get_field('url');
    $gUrl = get_field('url2');
      ?>

      <li>
        <a href="<?php echo home_url('/'); ?><?php echo $url; ?>" target="_blank" class="prrrr">
          <?php the_title(); ?>
        </a>
      </li>

      <?php endwhile; endif; wp_reset_query(); ?>

    </ul>

  </div>

  <div id="post__list" class="post__02">

    <h2 class="post__list--title">着物買取コラム</h2>

    <ul class="list-new">

      <?php wp_reset_postdata();
            $args = array(
              'posts_per_page' => '10',
              'category_name' => 'category-kimono',
              'post_type' => 'post',
              'orderby' => 'meta_value',
              'order' => 'asc',
            //   'meta_query' => array(array(
            //     'key' => 'post_02',
            //     'value' => '1',
            //     'compare' => '='
            //   ))
          );
          $the_query = new WP_Query($args);
          
          if ( $the_query->have_posts() ) :
          while ( $the_query->have_posts() ) : $the_query->the_post();
          ?>

      <li>
        <a href="<?php the_permalink(); ?>" class="">
          <?php the_title(); ?>
        </a>
      </li>

      <?php endwhile; endif; wp_reset_query(); ?>

    </ul>

  </div>


</aside>