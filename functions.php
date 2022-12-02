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
  $isIn = true;
  while(strlen($all) < $repeat ){
    $all .= $finalString[rand(0,(strlen($finalString) -1 ))];
  }
  if($isIn){
    session_start();
    header('Location: ./result.php');
    $_SESSION['all'] = $all;
  }
 
}



?>