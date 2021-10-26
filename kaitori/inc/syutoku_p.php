<?php
//着物専門
$pjyoken1 = $_POST["jyoken1"];
if (!empty($pjyoken1)) :
	if ($pjyoken1 === "1") :
		$pjyoken1_txt = 'あり';
	elseif ($pjyoken1 === "2") :
		$pjyoken1_txt = 'なし';
	endif;
else :
	$pjyoken1_txt = '指定なし';
endif;

//買取までの早さ
$pjyoken2 = $_POST["jyoken2"];
if (!empty($pjyoken2)) :
	if ($pjyoken2 === "1") :
		$pjyoken2_txt = '★★★';
	endif;

	if ($pjyoken2 === "2") :
		$pjyoken2_txt = '★★';
	endif;

	if ($pjyoken2 === "3") :
		$pjyoken2_txt = '★';
	endif;
else :
	$pjyoken2_txt = '指定なし';
endif;


//出張買取
$pjyoken3 = $_POST["jyoken3"];
if (!empty($pjyoken3)) :
	if ($pjyoken3 === "1") :
		$pjyoken3_txt = 'あり';
	elseif ($pjyoken3 === "4") :
		$pjyoken3_txt = 'なし';
	endif;
else :
	$pjyoken3_txt = '指定なし';
endif;

//現金受取り
$pjyoken4 = $_POST["jyoken4"];
if (!empty($pjyoken4)) :
	if ($pjyoken4 === "1") :
		$pjyoken4_txt = 'あり';
	elseif ($pjyoken4 === "4") :
		$pjyoken4_txt = 'なし';
	endif;
else :
	$pjyoken4_txt = '指定なし';
endif;

//事前の電話相談
$pjyoken5 = $_POST["jyoken5"];
if (!empty($pjyoken5)) :
	if ($pjyoken5 === "1") :
		$pjyoken5_txt = 'あり';
	elseif ($pjyoken5 === "4") :
		$pjyoken5_txt = 'なし';
	endif;
else :
	$pjyoken5_txt = '指定なし';
endif;

$ua = $_SERVER['HTTP_USER_AGENT'];
$browser = ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false) || (strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false));
if ($browser == true) {
	$browser = 'sp';
}

if ($browser !== 'sp') :

$kekka_table  = <<<EOD

<table class="jyoken">
  <tbody>
    <tr>
		<th>着物専門 <i class="fas fa-store"></i></th><td>{$pjyoken1_txt}</td>
		<th>買取までの早さ <i class="far fa-clock"></i></th><td>{$pjyoken2_txt}</td>
		<th>出張買取 <i class="fas fa-truck"></i></th><td>{$pjyoken3_txt}</td>
	</tr>
    <tr>
		<th>現金受取り <i class="fas fa-hand-holding-usd"></i></th><td>{$pjyoken4_txt}</td>
		<th>事前の電話相談 <i class="fas fa-phone-square"></i></th><td>{$pjyoken5_txt}</td>
	</tr>
  </tbody>
</table>

EOD;

	echo $kekka_table;
endif;
