<?php 

$letters='abcdefghilmnopqrstuezABCDEFGHILMNOPQRSTUEZ';
$numbers = '0123456789';
$special = '!?&%$<>^+-*/()[]{}@#_=';
$finalString ='';
$finalString.= $letters;
$finalString.=$numbers;
$finalString.=$special;

$all = '';

$repeat = $_GET['tot'] ?? '';
$isIn= false;
$error = false;
$output = '';
if (!empty($repeat)) {

  if ($repeat < 8 || $repeat > 32 ) {
    $isIn= false;
    $error = true;
    $output = 'Il numero minimo di caratteri della password è 8 e massimo 32';
  }else{
     $isIn = true;
    while(strlen($all) < $repeat ){
    $all .= $finalString[rand(0,(strlen($finalString) -1 ))];
  }
  }

  if($isIn){
    session_start();
    header('Location: ./result.php');
    $_SESSION['all'] = $all;
  }
} 

$check = $_GET['characters'] ?? '';

var_dump($check);






?>