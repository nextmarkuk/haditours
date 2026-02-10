<?php
session_start();
header('Content-Type: text/plain');

$num1 = mt_rand(1, 9);
$num2 = mt_rand(1, 9);

$_SESSION['captcha_answer'] = $num1 + $num2;

echo "$num1 + $num2";
?>
