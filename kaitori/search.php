<?php get_header(); ?>

<body>
    <div id="container--main">
        <section id="result">
            <?php get_search_form(); ?>
            <div class="dropmenu">
                <form id="drop-form" name="dropform">
                    <select name="sortlink" onchange="dropLink()">
                        <option value="">並び替え順を選択</option>
                        <option value="<?php echo add_query_arg( array('c_key' => 'rank-num', 'c_o' => 'ASC') ); ?>">
                            評価の高い順</option>
                        <option value="<?php echo add_query_arg( array('c_key' => 'rank-num', 'c_o' => 'DESC') ); ?>">
                            評価の低い順</option>
                        <option value="<?php echo add_query_arg( array('c_key' => 'speed', 'c_o' => 'ASC') ); ?>">
                            買取の早い順</option>
                        <option value="<?php echo add_query_arg( array('c_key' => 'speed', 'c_o' => 'DESC') ); ?>">
                            買取の遅い順
                        </option>
                    </select>
                </form>
            </div>

            <!-- startRank -->
            <?php
            if( isset($_GET['c_key']) ){
                $sort_key = $_GET['c_key'];
                $sort_order = $_GET['c_o'];
            }else{
                $sort_key = 'rank-num';
                $sort_order = 'ASC';
            }
	
            $args = array(
                'numberposts' => -1,
                'category_name' => 'ranking',
                'meta_key' => $sort_key,
                'orderby' => 'meta_value_num',
                'order' => $sort_order,
                'meta_query' => array(
                    array(
                        'key'=>'specialty',
                        'value'=>$_GET['specialty'],
                        'compare'=>'LIKE',
                    ),
                    array(
                        'key'=>'speed',
                        'value'=>$_GET['speed'],
                        'compare'=>'LIKE',
                    ),
                    array(
                        'key'=>'official',
                        'value'=>$_GET['official'],
                        'compare'=>'LIKE',
                    ),
                    array(
                        'key'=>'cash',
                        'value'=>$_GET['cash'],
                        'compare'=>'LIKE',
                    ),
                    array(
                        'key'=>'tel',
                        'value'=>$_GET['tel'],
                        'compare'=>'LIKE',
                    ),
                    'relation'=>'AND'
                ),
            );
            $posts = get_posts($args); ?>
            <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
            <?php 
            $url = get_field('url');
            $specialty = get_field('specialty');
            $speed = get_field('speed');
            $official = get_field('official');
            $cash = get_field('cash');
            $tel = get_field('tel');

            ?>
            <div id="resultBlock">

                <table class="resulttable">


                    <!--TITLE-->
                    <tr>
                        <td colspan="2" class=""><a href="<?php echo $url; ?>" class="prrrr" target="_blank">
                                <?php the_title(); ?></a>
                        </td>
                    </tr>
                    <!--main画像-->

                    <tr>
                        <td><a href="<?php echo $url; ?>" class="prrrr" target="blank">
                                <img src=" <?php the_field('result-img'); ?>" alt="<?php the_title(); ?>">
                            </a>
                        </td>
                        <td><?php the_field('descript'); ?></td>
                    </tr>
                </table>

                <table class="resultpoint">
                    <tr>
                        <th>着物専門</th>
                        <th>買取までの早さ</th>
                        <th>出張買取</th>
                        <th>現金受取り</th>
                        <th>事前の電話相談</th>
                    </tr>
                    <tr>
                        <td>
                            <?php 
                            if($specialty == 1) {
                                echo "あり";
                            } else {
                                echo "なし"; 
                            }
                        ?>
                        </td>

                        <td>
                            <?php 
                            if($speed == 1) {
                                echo "★★★";
                            }elseif($speed == 2) {
                                echo "★★";
                            }else {
                                echo "★";
                            }
                        ?>
                        </td>

                        <td>
                            <?php 
                            if($official == 1) {
                                echo "あり";
                            } else {
                                echo "なし"; 
                            }
                        ?>
                        </td>
                        <td>
                            <?php 
                            if($cash == 1) {
                                echo "あり";
                            } else {
                                echo "なし"; 
                            }
                        ?>
                        </td>
                        <td>
                            <?php 
                            if($tel == 1) {
                                echo "あり";
                            } else {
                                echo "なし"; 
                            }
                        ?>
                        </td>
                    </tr>
                </table>

                <div class="t-link">
                    <a href="<?php echo $url; ?>" class="prrrr" target="_blank">
                        <div class="btn">公式サイトはこちら</div>
                    </a>
                </div>

            </div>

            <?php endforeach; else: ?>

            <?php $args = array(
                'numberposts' => -1,
                'category_name' => 'ranking',
                'meta_query' => array(array(
                    'key' => 'rank-num',
                    'value' => '1',
                    'compare' => '='
                )),
            );
            ?>


            <!-- <h1>見つかりませんでした。</h1> -->
            <?php wp_reset_postdata();
            $the_query = new WP_Query( $args );
            if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <?php 
            $url = get_field('url');
            $specialty = get_field('specialty');
            $speed = get_field('speed');
            $official = get_field('official');
            $cash = get_field('cash');
            $tel = get_field('tel');

            ?>

            <div id="resultBlock">

                <table class="resulttable">


                    <!--TITLE-->
                    <tr>
                        <td colspan="2" class=""><a href="<?php echo $url; ?>" class="prrrr" target="_blank">
                                <?php the_title(); ?></a>
                        </td>
                    </tr>
                    <!--main画像-->

                    <tr>
                        <td><a href="<?php echo $url; ?>" class="prrrr" target="blank">
                                <img src=" <?php the_field('result-img'); ?>" alt="<?php the_title(); ?>">
                            </a>
                        </td>
                        <td><?php the_field('descript'); ?></td>
                    </tr>
                </table>

                <table class="resultpoint">
                    <tr>
                        <th>着物専門</th>
                        <th>買取までの早さ</th>
                        <th>出張買取</th>
                        <th>現金受取り</th>
                        <th>事前の電話相談</th>
                    </tr>
                    <tr>
                        <td>
                        <?php 
                            if($specialty == 1) {
                                echo "あり";
                            } else {
                                echo "なし"; 
                            }
                        ?>
                        </td>

                        <td>
                        <?php 
                            if($speed == 1) {
                                echo "★★★";
                            }elseif($speed == 2) {
                                echo "★★";
                            }else {
                                echo "★";
                            }
                        ?>
                        </td>

                        <td>
                        <?php 
                            if($official == 1) {
                                echo "あり";
                            } else {
                                echo "なし"; 
                            }
                        ?>
                        </td>
                        <td>
                        <?php 
                            if($cash == 1) {
                                echo "あり";
                            } else {
                                echo "なし"; 
                            }
                        ?>
                        </td>
                        <td>
                        <?php 
                            if($tel == 1) {
                                echo "あり";
                            } else {
                                echo "なし"; 
                            }
                        ?>
                        </td>
                    </tr>
                </table>

                <div class="t-link">
                    <a href="<?php echo $url; ?>" class="prrrr" target="_blank">
                        <div class="btn">公式サイトはこちら</div>
                    </a>
                </div>

            </div>


            <?php $i++; endwhile; endif; wp_reset_query(); ?>

            <?php endif; ?>
            <!-- /endRank -->

        </section>
        <script>
        function dropLink() {
            var sorturl = document.dropform.sortlink.value;
            location.href = sorturl;
        }
        </script>


        <?php get_footer(); ?>