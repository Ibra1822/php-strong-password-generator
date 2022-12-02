<?php 

$letters='abcdefghilmnopqrstuezABCDEFGHILMNOPQRSTUEZ';
$numbers = '0123456789';
$special = '!?&%$<>^+-*/()[]{}@#_=';
$finalString ='';
$finalString.= $letters;
$finalString.=$numbers;
$finalString.=$special;

$all = '';
$repeat = $_GET['tot'];

if (!empty($repeat)) {
  while(strlen($all) < $repeat ){
    $all .= $finalString[rand(0,(strlen($finalString) -1 ))];
  }
}
var_dump($all);



?>