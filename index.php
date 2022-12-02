<?php 

require './functions.php'


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width  initial-scale=1.0">

  <link rel="stylesheet" href="css/style.css">

  <title>Password Generator</title>
</head>

<body>

  <div class="cont-title" >
    <h1>Crea una password sicura</h1>
    <h2> Inserisci quanti caratteri vuoi nella tua password</h2>
  </div> 
  

  <form action="./index.php" method="GET">

    <input type="number" name="tot">

    <button type="submit" >Crea</button>

  </form>


</body>
</html>