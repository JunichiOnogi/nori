<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
$current_url = 'http'.(!empty($_SERVER['HTTPS']) ? 's' : '').'://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
include(APP_PATH.'libs/argument.php');
?>
<script src="https://cdn.jsdelivr.net/npm/viewport-extra@1.0.2/dist/viewport-extra.min.js"></script>

<title><?php echo $titlepage?></title>
<meta name="description" content="<?php echo $desPage; ?>">
<meta name="keywords" content="<?php echo $keyPage; ?>">

<!-- Facebook
======================================================================-->
<meta property="og:title" content="<?php echo $titlepage?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo htmlspecialchars($current_url);?>">
<meta property="og:image" content="<?php echo APP_ASSETS; ?>img/ogp.jpg">
<meta property="og:site_name" content="のりちゃん">
<meta property="og:description" content="<?php echo $desPage; ?>">

<meta name="twitter:card" content="summary_large_image">

<!--css-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/layout/reset.min.css" rel="stylesheet">
<link href="<?php echo APP_ASSETS; ?>css/layout/base.min.css" rel="stylesheet">
<!--/css-->

<link rel="icon" href="<?php echo APP_ASSETS; ?>img/favicon.png">
<link rel="shortcut icon" href="<?php echo APP_ASSETS; ?>img/favicon.png">
<link rel="apple-touch-icon" href="<?php echo APP_ASSETS; ?>img/favicon.png">
<meta name="apple-mobile-web-app-title" content="のりちゃん">