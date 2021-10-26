<?php 

$i = 1;
if(is_page('880')) {
    $args = array(
        'posts_per_page' => 1,
        'category_name' => 'ranking',
        'meta_key' => 'rank-num',
        'orderby' => 'meta_value_num',
        'order' => 'asc'
    );
} else {
    $args = array(
        'posts_per_page' => 3,
        'category_name' => 'ranking',
        'meta_key' => 'rank-num',
        'orderby' => 'meta_value_num',
        'order' => 'asc',
    );
}

function image($img) {
    if($img == 1) :  
        echo '<img src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru001.png" alt="" width="50">';   
    elseif($img == 2) :
        echo '<img src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru002.png" alt="" width="50">'; 
    elseif($img == 3) :
        echo '<img src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru003.png" alt="" width="50">';   
    else :
        echo '<img src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru004.png" alt="" width="50">';   
    endif;
}
?>

<?php wp_reset_postdata();
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();

    $url = get_field('url');
    $gUrl = get_field('url2');
    $specialty = get_field('specialty');
    $speed = get_field('speed');
    $official = get_field('official');
    $cash = get_field('cash');
    $tel = get_field('tel');
    $area = get_field('area');
    $eval = get_field('eval-point');
    $point = get_field('point');
    $descript = get_field('descript');
?>

    <?php if(is_page('goldpage')) : ?>
    <div id="rk-wrap" class="gold no-border">
    <?php else : ?>
    <div id="rk-wrap">
        <?php endif; ?>

        <div class="title">

            <?php if(!is_page('goldpage')) : ?>
            <img src="<?php bloginfo('template_url'); ?>/img/ranking-icon-0<?php echo $i; ?>.png" alt="">
            <?php endif; ?>
            <h1 class="title-h1">
                <?php if(is_page('kimono2')) : ?>
                <a href="<?php echo home_url('/'); ?><?php echo $gUrl; ?>" class="prrrr" target="_blank"><?php the_title(); ?></a>
                <?php else : ?>
                <a href="<?php echo $url; ?>" class="prrrr" target="_blank"><?php the_title(); ?></a>
                <?php endif; ?>
            </h1>
            <?php if(!is_page('goldpage')) : ?>
            <p>評価 <?php echo $eval; ?>/5.0</p>
            <?php endif; ?>

        </div>

        <div class="t-imgpoint">

            <div class="t-img">

                <?php if(is_page('kimono2')) : ?>
                <a href="<?php echo home_url('/'); ?><?php echo $gUrl; ?>" class="prrrr" target="_blank">
                <?php else : ?>
                <a href="<?php echo $url; ?>" class="prrrr" target="_blank">
                <?php endif; ?>

                    <?php the_post_thumbnail('full'); ?>
                </a>

            </div>

            <div class="t-point">

                <div class="t-list">POINT<i class="far fa-hand-point-left"></i></div>

                <ul>

                    <?php echo $point; ?>

                </ul>

            </div>

        </div>

        <div class="t-table">

            <table>

                <tr>
                    <th>着物買取の専門性</th>
                    <th>買取の早さ</th>
                    <th>出張買取の対応</th>
                </tr>

                <tr>
                    <td>
                        <?php image($specialty) ?>
                    </td>
                    <td>
                        <?php image($speed) ?>
                    </td>
                    <td>
                        <?php image($official) ?>
                    </td>
                </tr>

                <tr>
                    <th>対応エリア</th>
                    <th>現金の受け取り</th>
                    <th>事前の電話相談</th>
                </tr>

                <tr>
                    <td><?php image($area) ?></td>
                    <td><?php image($cash) ?></td>
                    <td><?php image($tel) ?></td>
                </tr>

            </table>

        </div>

        <div class="t-text">
            <?php echo $descript; ?>
        </div>


        <div class="t-link">
            <?php if(is_page('kimono2')) : ?>
            <a href="<?php echo home_url('/'); ?><?php echo $gUrl; ?>" class="prrrr" target="_blank">
            <?php else : ?>
            <a href="<?php echo $url; ?>" class="prrrr" target="_blank">
            <?php endif; ?>
                <!-- <img src="" alt=""> -->
                <div class="btn">公式サイトはこちら</div>
            </a>
        </div>

        <?php if($i == 1) : ?>
        <?php if(is_mobile()) : ?>
            <div class="gold-link">
                <a href="<?php echo home_url('/'); ?>goldpage/">
                    ザ・ゴールドの<br>レビュー＆口コミは＞＞
                </a>
            </div>
            <?php else : ?>
            <div class="gold-link">
                <a href="<?php echo home_url('/'); ?>goldpage/">
                    ザ・ゴールドのレビュー＆口コミは＞＞
                </a>
            </div>
        <?php endif; ?>

        <?php endif; ?>
    </div>


    <?php $i++; endwhile; endif; wp_reset_query(); ?>