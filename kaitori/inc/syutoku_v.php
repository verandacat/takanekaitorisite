<?php
$name = $v['name']; //商品名
$url = $v['url']; //URL
$img1 = $v['img1']; //画像
$setumei = $v['setumei']; //説明
$campaign = $v['campaign']; //キャンペーン
$jyoken1 = $v['jyoken1']; //着物専門
$jyoken2 = $v['jyoken2']; //買取までの早さ
$jyoken3 = $v['jyoken3']; //出張買取
$jyoken4 = $v['jyoken4']; //現金受取り
$jyoken5 = $v['jyoken5']; //事前の電話相談

global $maru2;
$maru2 = '<img src="./img/maru001.png" alt="◎" class="kigou">';
global $maru;
$maru = '<img src="./img/maru002.png" alt="〇" class="kigou">';
global $sank;
$sank = '<img src="./img/maru003.png" alt="△" class="kigou">';
global $batu;
$batu = '<img src="./img/maru004_2.png" alt="×" class="kigou">';

if ($jyoken1 === "1") :
	$jyoken1_tab = 'あり';
else :
	$jyoken1_tab = 'なし';
endif;

if ($jyoken2 === "1") :
	$sjyoken2 = "1";
	$jyoken2_tab = $maru2;
elseif ($jyoken2 === "2") :
	$sjyoken2 = "1";
	$jyoken2_tab = $maru;
elseif ($jyoken2 === "3") :
	$sjyoken2 = "1";
	$jyoken2_tab = $sank;
elseif ($jyoken2 === "4") :
	$sjyoken2 = "4";
	$jyoken2_tab = $batu;
endif;

if ($jyoken3 === "1") :
	$sjyoken3 = "1";
	$jyoken3_tab = $maru2;
elseif ($jyoken3 === "2") :
	$sjyoken3 = "1";
	$jyoken3_tab = $maru;
elseif ($jyoken3 === "3") :
	$sjyoken3 = "1";
	$jyoken3_tab = $sank;
elseif ($jyoken3 === "4") :
	$sjyoken3 = "4";
	$jyoken3_tab = $batu;
endif;

if ($jyoken4 === "1") :
	$sjyoken4 = "1";
	$jyoken4_tab = $maru2;
elseif ($jyoken4 === "2") :
	$sjyoken4 = "1";
	$jyoken4_tab = $maru;
elseif ($jyoken4 === "3") :
	$sjyoken4 = "1";
	$jyoken4_tab = $sank;
elseif ($jyoken4 === "4") :
	$sjyoken4 = "4";
	$jyoken4_tab = $batu;
endif;

if ($jyoken5 === "1") :
	$sjyoken5 = "1";
	$jyoken5_tab = $maru2;
elseif ($jyoken5 === "2") :
	$sjyoken5 = "1";
	$jyoken5_tab = $maru;
elseif ($jyoken5 === "3") :
	$sjyoken5 = "1";
	$jyoken5_tab = $sank;
elseif ($jyoken5 === "4") :
	$sjyoken5 = "4";
	$jyoken5_tab = $batu;
endif;
