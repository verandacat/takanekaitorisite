<? 

//スマホ表示分岐
function is_mobile(){
    $useragents = array(
        'iPhone', // iPhone
        'iPod', // iPod touch
        'Android.*Mobile', // 1.5+ Android *** Only mobile
        'Windows.*Phone', // *** Windows Phone
        'dream', // Pre 1.5 Android
        'CUPCAKE', // 1.5+ Android
        'blackberry9500', // Storm
        'blackberry9530', // Storm
        'blackberry9520', // Storm v2
        'blackberry9550', // Storm v2
        'blackberry9800', // Torch
        'webOS', // Palm Pre Experimental
        'incognito', // Other iPhone browser
        'webmate' // Other iPhone browser

    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

//アイキャッチ画像設定
add_theme_support('post-thumbnails');


function my_excerpt_length($length) {
    return 80;
    }
add_filter('excerpt_length', 'my_excerpt_length');

function excerpt_more_alter($more){
    return "...<span>more</span>";
    }
add_filter("excerpt_more", "excerpt_more_alter");

// ページネーション

function the_pagination() {
    global $wp_query;
    $bignum = 10;
    if ( $wp_query->max_num_pages <= 1 )
    return;
    echo '<nav class="pagination">';
    echo paginate_links( array(
    'base' => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format' => '',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages,
    'prev_text' => '&larr;',
    'next_text' => '&rarr;',
    'type' => 'list',
    'end_size' => 3,
    'mid_size' => 3
    ) );
    echo '</nav>';
    }


// 比較表ショートコード
function table() {
    echo '
    <table><colgroup> <col width="13%" /> <col width="28%" /> <col width="28%" /> <col width="28%" /> </colgroup>
    <tbody>
    <tr class="rank-img">
    <td></td>
    <td align="center"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/rank-01.jpg" alt="" /></td>
    <td align="center"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/rank-02.jpg" alt="" /></td>
    <td align="center"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/rank-03.jpg" alt="" /></td>
    </tr>
    <tr>
    <th class="item-title"></th>
    <th class="item-king"><a href="./link/gold.php" target="_blank" rel="noopener">
    <img src="https://xn--tor46et59ao6w.com/wp-content/uploads/2021/03/ranking-item-gold.jpg" alt="" width="100%" />
    ザ・ゴールド</a></th>
    <th><a href="./link/buysell.php" target="_blank" rel="noopener">
    <img src="https://xn--tor46et59ao6w.com/wp-content/uploads/2021/03/ranking-item-buy.jpg" alt="" width="100%" />
    バイセル</a></th>
    <th><a href="./link/kaitori.php" target="_blank" rel="noopener">
    <img src="https://xn--tor46et59ao6w.com/wp-content/uploads/2021/03/ranking-item-kaitori.jpg" alt="" width="100%" />
    買取プレミアム</a></th>
    </tr>
    <tr>
    <td class="item-title" style="text-align: center;">実績</td>
    <td align="center" valign="top" class="item-king"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru001.png" alt="" /></span>
    <p style="text-align: center;">総買取件数80万人以上</p>
    </td>
    <td align="center" valign="top"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru001.png" alt="" /></span>
    <p class="bold" style="text-align: center;">問い合わせ月間20000件以上2年連続でお客様満足度が第1位</p>
    </td>
    <td align="center" valign="top"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru003.png" alt="" /></span>
    <p style="text-align: center;">問い合わせ月間10000件以上</p>
    </td>
    </tr>
    <tr>
    <td class="item-title" style="text-align: center;">専門性</td>
    <td align="center" valign="top" class="item-king"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru001.png" alt="" /></span>
    <p style="text-align: center;">経験豊富な査定員</p>
    </td>
    <td valign="top" style="text-align: center;"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru001.png" alt="" /></span>
    <p style="text-align: center;">経験豊富な査定員</p>
    </td>
    <td align="center" valign="top"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru001.png" alt="" /></span>
    <p style="text-align: center;">経験豊富な査定員</p>
    </td>
    </tr>
    <tr>
    <td class="item-title" style="text-align: center;">全国対応</td>
    <td valign="top" class="item-king">
    <p style="text-align: center;"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru003.png" alt="" /></span></p>
    <p style="text-align: center;">一部未対応</p>
    </td>
    <td valign="top" style="text-align: center;"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru001.png" alt="" /></span>
    <p class="bold" style="text-align: center;">47都道府県</p>
    </td>
    <td align="center" valign="top"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru001.png" alt="" /></span>
    <p class="bold" style="text-align: center;">47都道府県</p>
    </td>
    </tr>
    <tr>
    <td class="item-title" style="text-align: center;">現金即払い</td>
    <td align="center" valign="top" class="item-king"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru001.png" alt="" /></span>
    <p class="bold" style="text-align: center;">その場で受取可</p>
    </td>
    <td align="center" valign="top" style="text-align: center;"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru001.png" alt="" /></span>
    <p class="bold" style="text-align: center;">その場で受取可</p>
    </td>
    <td align="center" valign="top" style="text-align: center;"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru001.png" alt="" /></span>
    <p class="bold" style="text-align: center;">その場で受取可</p>
    </td>
    </tr>
    <tr>
    <td class="item-title" style="text-align: center;">電話受付</td>
    <td align="center" valign="top" class="item-king"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru003.png" alt="" /></span>
    <p style="text-align: center;">10:00-18:00</p>
    </td>
    <td align="center" valign="top"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru001.png" alt="" /></span>
    <p class="bold" style="text-align: center;">24時間いつでも</p>
    </td>
    <td align="center" valign="top"><span class="maru_01"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/maru001.png" alt="" /></span>
    <p style="text-align: center;">24時間いつでも</p>
    </td>
    </tr>
    <tr class="btn_wrapper">
    <td class="item-title" style="text-align: center;">公式サイト</td>
    <td align="center" class="item-king"><a class="btn" href="./link/gold.php" target="_blank" rel="noopener"><img id="camera" class="fluffy aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/btn-img.png" alt="" /></a></td>
    <td align="center"><a href="./link/buysell.php" target="_blank" rel="noopener"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/btn-img-bk.png" alt="" /></a></td>
    <td align="center"><a href="./link/kaitori.php" target="_blank" rel="noopener"><img class="aligncenter" src="https://xn--tor46et59ao6w.com/wp-content/themes/kaitori/img/btn-img-bk.png" alt="" /></a></td>
    </tr>
    </tbody>
    </table>
    ';
}
add_shortcode( 'tb', 'table' );