<?php
$_SESSION['user'] = null;
$_SESSION = array();
session_destroy();
header('Location: index.php');
