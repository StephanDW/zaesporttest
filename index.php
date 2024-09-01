<?php
    session_start();
    include_once 'includes/functions.php';
    include_once 'includes/config.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script language="JavaScript" type="text/javascript" src="includes/jquery.js?<?=filemtime("includes/jquery.js")?>"></script>
    <script type="text/javascript" src="includes/functions.js?<?=filemtime("includes/functions.js")?>"></script>
    <link rel="stylesheet" href="includes/foundation/css/foundation.min.css" />
    <link rel="stylesheet" href="includes/foundation/css/app.css" />
    <link rel="stylesheet" type="text/css" href="includes/style.css?<?=filemtime("includes/style.css")?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <title>Tohost</title>
</head>
<body>
   <?php
    if ($_SESSION['user'] == null) {
        include_once 'pages/login.php';
    } else {
        include_once 'includes/nav.php';
        if (isset($menu[$_GET['page']])) {
            include_once($menu[$_GET['page']]);
        }
    }
   ?>
</body>
</html>