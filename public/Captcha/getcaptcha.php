<?php
session_start();
$_SESSION = array();

include("simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();

echo '<img width="90px" src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA code">';
