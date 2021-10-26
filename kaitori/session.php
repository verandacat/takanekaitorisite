<?php
	session_start();
  $paraurl = $_SERVER['REQUEST_URI'];
  if(strstr($url,'g=on')==true){
    $para = '?g=on&logid=';
  }else{
    $para = '?logid=';
  }
	if(isset($_GET["logid"])){
    $_SESSION['logid'] = htmlspecialchars($_GET["logid"], ENT_QUOTES, 'UTF-8');
  }
	if(isset($_GET["cam"])){
    $_SESSION['cam'] = htmlspecialchars($_GET["cam"], ENT_QUOTES, 'UTF-8');
  }
	if(isset($_GET["ad_no"])){
    $_SESSION['ad_no'] = htmlspecialchars($_GET["ad_no"], ENT_QUOTES, 'UTF-8');
  }
	if(isset($_GET["gr_no"])){
    $_SESSION['gr_no'] = htmlspecialchars($_GET["gr_no"], ENT_QUOTES, 'UTF-8');
  }
  $para .= $_SESSION['logid'];
  $para .= '&cam=';
  $para .= $_SESSION['cam'];
  $para .= '&gr_no=';
  $para .= $_SESSION['gr_no'];
  $para .= '&ad_no=';
  $para .= $_SESSION['ad_no'];
 header('Content-Type: text/html; charset=UTF-8');
 ?>
