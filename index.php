<?php
    session_start();
    include_once 'var/www/zaesporttest/includes/functions.php';
    include_once 'var/www/zaesporttest/includes/config.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/zaesporttest/">
    <script language="JavaScript" type="text/javascript" src="var/www/zaesporttest/includes/jquery.js?<?=filemtime("var/www/zaesporttest/includes/jquery.js")?>"></script>
    <script type="text/javascript" src="var/www/zaesporttest/includes/functions.js?<?=filemtime("var/www/zaesporttest/includes/functions.js")?>"></script>
    <link rel="stylesheet" href="var/www/zaesporttest/includes/foundation/css/foundation.min.css" />
    <link rel="stylesheet" href="var/www/zaesporttest/includes/foundation/css/app.css" />
    <link rel="stylesheet" type="text/css" href="var/www/zaesporttest/includes/style.css?<?=filemtime("var/www/zaesporttest/includes/style.css")?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <title>Tohost</title>
</head>
<body>
   <?php
    echo __DIR__;
    if ($_SESSION['user'] == null) {
        include_once 'pages/login.php';
    } else {
        include_once 'var/www/zaesporttest/includes/nav.php';
        if (isset($menu[$_GET['page']])) {
            include_once($menu[$_GET['page']]);
        }
    }
   ?>
</body>
</html>