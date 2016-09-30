<?php
require('aes.php');
//example: see AES.java 
//eEdJZjNNcnpkWkVmdlFxTjdQVVZJQT09
//hello world!

$secKey = "aDoye54%^sNqhIs";
$aesHandler = new Aes($secKey);
$res = $aesHandler->encrypt("hello world!");
$encStr = base64_encode($res);
echo $encStr;
echo PHP_EOL;

$data = base64_decode($encStr);
$orgStr = $aesHandler->decrypt($data);
echo $orgStr;
echo PHP_EOL;
