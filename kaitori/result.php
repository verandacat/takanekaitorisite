<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include 'inc/headtag.php'; ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>着物</title>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.0/css/theme.default.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/addstyle.css" type="text/css" />
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.0/js/jquery.tablesorter.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/inc/myquery.js"></script>

</head>

<body>
  <?php include 'inc/bodytag.php'; ?>

  <div id="container">

    <?php if ($browser == 'sp') : ?>
      <header>
        <img src="<?php bloginfo('template_url'); ?>/img/sp-kimono-fv.jpg" alt="">
      </header>
      <!-- header END -->
    <?php else : ?>
      <header>
      <img src="<?php bloginfo('template_url'); ?>/img/pc-kimono-fv.jpg" alt="">
      </header>
    <?php endif; ?>
    <!-- header END -->





    <!------------------------------------------------------------------------------------------------>
    <section id="section01">
      <div class="bread"><a href="<?php echo home_url('/'); ?>">トップページ</a> ＞ 検索結果<br></div>
      <h2 class="midashi-h2">検索結果</h2>
      <p class="kekka"><i class="fas fa-search"></i> 検索結果： <span id="kensu"></span>件</p>
      <?php include('inc/syutoku_p.php'); ?>

      <?php $ua = $_SERVER['HTTP_USER_AGENT'];
      $browser = ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false) || (strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false));
      if ($browser == true) {
        $browser = 'sp';
      }
      if ($browser == 'sp') : ?>
        <div class="select-box">
          <select id="ssort">
            <option value="">項目を選択</option>
            <option value="jyoken1">着物専門</option>
            <option value="jyoken2">買取までの早さ</option>
            <option value="jyoken3">出張買取</option>
            <option value="jyoken4">現金受取り</option>
            <option value="jyoken5">事前の電話相談</option>
          </select>
          <button class='ssort_btn sort_btn'>昇順<i class="fas fa-sort-numeric-down"></i></button>
          <button class='ksort_btn sort_btn'>降順<i class="fas fa-sort-numeric-down-alt"></i></button>
        </div>
        <div id="store-data">

          <?php
          include('inc/koumoku.php');
          $i = 0;
          foreach ($list as $v) {
            $i++;
            include('inc/syutoku_v.php');

            $html = <<<EOS

<figure class="sorttable" data-jyoken1={$jyoken1} data-jyoken2={$jyoken2} data-jyoken3={$jyoken3} data-jyoken4={$jyoken4} data-jyoken5={$jyoken5}>
  <table class="r-table" >
  	<tbody>
      <tr>
        <td colspan="4" class="item-d1">
          <a href={$url}{$para} target=_blank><br><img src={$img1}>{$name}</a><br clear=all>
        </td>
      </tr>
      <tr>
        <th colspan="2">買取までの早さ</th><td colspan="2">{$jyoken2_tab}</td>
      </tr>
      <tr>
        <th>着物専門</th><td class="min">{$jyoken1_tab}</td>
        <th>出張買取</th><td class="min">{$jyoken3_tab}</td>
      </tr>
      <tr>
        <th>現金受取り</th><td class="min">{$jyoken4_tab}</td>
        <th>事前の<br>電話相談</th><td class="min">{$jyoken5_tab}</td>
      </tr>
      <tr>
        <td colspan="4" class="setumei_title1"><i class="far fa-hand-point-right"></i> おすすめポイント</td>
      </tr>
      <tr>
        <td colspan="4" class="setumei">{$setumei}</td>
      </tr>
      
      <tr>
        <td colspan="4"><a href={$url}{$para} target=_blank class=kousiki_btn>公式サイト</a></td>
      </tr>
    </tbody>
  </table>
</figure>

EOS;
            include('search.php');
          } ?>
        </div><!-- #store-data -->
      <?php else : //$browser 
      ?>

        <div id="store-data">
          <figure>
            <table class="r-table tablesorter" id="myTable">
              <thead>
                <tr>
                  <td class="row2 sorter-false">店舗名</td>
                  <td>着物専門</td>
                  <td>買取まで<br>の早さ</td>
                  <td>出張買取</td>
                  <td>現金受取り</td>
                  <td>事前の<br>電話相談</td>
                  <td class="row2 sorter-false">公式<br>サイト</td>
                </tr>
              </thead>
              <tbody>

                <?php
                include('inc/koumoku.php');
                $i = 0;

                foreach ($list as $v) {
                  $i++;
                  include('inc/syutoku_v.php');

                  $html = <<<EOD

        <tr>
          <td class="item-d1" rowspan="3">
            <a href={$url}{$para} target=_blank><img src={$img1}>{$name}</a>
          </td>
          <td>{$jyoken1_tab}</td>
          <td>{$jyoken2_tab}</td>
          <td>{$jyoken3_tab}</td>
          <td>{$jyoken4_tab}</td>
          <td>{$jyoken5_tab}</td>
          <td rowspan="3"><a href={$url}{$para} target=_blank class=kousiki_btn>公式サイトへ</a></td>
        </tr>
        <tr class="tablesorter-childRow tablesorter-infoOnly">
          <td colspan="5" class="setumei_title1"><i class="far fa-hand-point-right"></i> おすすめポイント</td>
         
        </tr>
        <tr class="tablesorter-childRow tablesorter-infoOnly">
          <td colspan="5" class="setumei">{$setumei}</td>
         
        </tr>

EOD;

                  include('search.php');
                } ?>
              </tbody>
            </table>
          </figure>
        </div>
        <!--.content end-->
      <?php endif; //$browser 
      ?>

      <div class="content">
        <?php include 'form.php'; ?>
      </div>
      <!--.content end-->

    </section>
    <!-- #section01 END -->





    <div id="float-wrap">
      <ul class="content-wrap">
        <li class="float-content-01">
          <a href="">
            <div>
              <span>無料</span>
            </div>
            今すぐ、電話で相談
          </a>
        </li>
        <li class="float-content-02">
          <a href="">
            <i class="fa fa-2x fa-envelope"></i>メールで相談
          </a>
        </li>
        <li class="float-content-03">
          <a href="">topへ</a>
        </li>
      </ul>
    </div>

    <!------------------------------------------------------------------------------------------------>
    <footer>
      <a class="footer-link" href="unei.php">運営者情報</a>
      <a class="footer-link" href="./">ページTOPへ</a>
    </footer>
    <!-- footer END -->


  </div><!-- #container END-->


  <script>
    new WOW().init();
  </script>
<script>
$(document).ready(function() { 
	$("#myTable").tablesorter();
});
</script>
</body>

</html>