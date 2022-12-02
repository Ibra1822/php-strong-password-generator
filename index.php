<?php 

require './functions.php'

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width  initial-scale=1.0">
  <title>Password Generator</title>
</head>
<style>
  h1, h2,h3,form{
    text-align: center;
  }
  input,button{
    padding: 10px 15px;
  }
  .ris{
    text-align: center;
  }

</style>
<body>

  <div class="cont-title" >
    <h1>Crea una password sicura</h1>
    <h2> Inserisci quanti caratteri vuoi nella tua password</h2>
  </div> 
  

  <form action="./index.php" method="GET">

    <input type="number" name="tot">

    <button type="submit" >Crea</button>

  </form>

  <div class="ris"  >
    <h3> La tua password è: <?php echo $all ?></h3> 
  </div>

</body>
</html>