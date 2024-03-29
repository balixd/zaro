<?php
session_start();
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="shortcut icon" type="x-icon" href="B8.png">
  <link rel="icon" href="B8.png" type="image/x-icon">

  <script src="utils.js"></script>


</head>

<body>
  <div id="tarolo" class=" w-100 p-0" style="background-color:white;">
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded shadow text-light">

      <div class="collapse navbar-collapse" id="navbarNav">
       
            <a class="nav-link" href="index.php?prog=fooldal.php">Föoldal</a>
            <a class="nav-link" href="index.php?prog=./loginout/regisztracio.php">Regisztráció</a>

    
     
      </div>
      <div>
        <?=isset($_SESSION['username'])? $_SESSION['username']: ''?>
        <?=isset($_SESSION['username'])? ' <a class="nav-link" href="index.php?prog=./loginout/logout.php">Kijelentkezés</a>' :''?>
      </div>
    </nav>
    <div class="container ">
      <!--az URL-ben kapott program betöltése-->
      <?php
      //php logika-routingolás
      extract($_GET);
      if(isset($prog))
         include $prog;
      else
        include "fooldal.php";
      ?>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>