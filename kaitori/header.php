<?php //include('session.php'); ?>
<?php $ua = $_SERVER['HTTP_USER_AGENT'];
      $browser = ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) || (strpos($ua, 'iPhone') !== false) || (strpos($ua, 'Windows Phone') !== false) || (strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false));
      ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include 'inc/headtag.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>着物</title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.min.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"
        integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/addstyle.css?<?php echo time(); ?>"
        type="text/css" />
    <link rel="stylesheet" href="https://買取王国.com/css/custom.css">
    
    <script src="<?php bloginfo('template_url'); ?>/js/wow.min.js"></script>

    <?php //wp_head(); ?>
</head>