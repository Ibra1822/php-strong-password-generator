<?php 
require __DIR__ .'/functions.php';
session_start();

?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Result</title>

  </head>
  <body> 
  
  <div class="cont-res">
      <h2>La tua password è : <?php echo $_SESSION['all'] ?> </h2>
  </div>
  
  </body>
  </html>