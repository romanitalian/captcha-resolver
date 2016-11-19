<?php
error_reporting(E_ALL);

$url = 'captcha.jpg';
$image = file_get_contents($url);
file_put_contents('captcha.jpg', $image);
//file_get_contents('hasherv2.php');
include '../Hasherv.php';
$cf = file_get_contents('res.txt');
var_dump($cf);

