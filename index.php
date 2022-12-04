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
  <?php if($error === true): ?>
  <div class="error" >
    <h2><?php echo $output?></h2>
  </div>
  <?php endif; ?>

  <form action="./index.php" method="GET">

    <input type="number" name="tot">

    <div class="cont-check">
    <input type="checkbox" name="characters[]" value="0" id="">
    <label for="">Lettere</label>
    <input type="checkbox" name="characters[]" value="1" id="">
    <label for="">Numeri</label>
    <input type="checkbox" name="characters[]" value="2" id="">
    <label for="">Simboli</label>
    </div>


    <button type="submit" >Crea</button>
  </form>


</body>
</html>