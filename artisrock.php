<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital@1&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Document</title>
    <style>
        <?php
            include "artis.css";
        ?>
    </style>
</head>
<body>
<div class="navbar">
        <div class="logo"><img src="logo.png" alt=""></div>
        <ul>
            <li><a href="#">Login</a></li>
        </ul>
    </div>  
    <div class="kls">
        <h1>Artis Rock</h1>
        <a href="artis.php" style="position: absolute; width: 62px; height: 22px;left: 188px;top: 165px;font-family: 'Montserrat'; font-style: normal; font-weight: 700; font-size: 20px; line-height: 24px; color: #FFFFFF; text-decoration: none; font-family: 'Monserrat'", sans-serif;>Artist</a>
        <a href="#" style="position: absolute; width: 62px; height: 22px;left: 49px;top: 165px;font-family: 'Montserrat'; font-style: normal; font-weight: 700; font-size: 20px; line-height: 24px; color: #FFFFFF; text-decoration: none;">Overview</a>
    </div>

    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="smoke.png" alt="...">
      <div class="card-body">
        <a href="queen.php"><h5 class="card-title">Queen</h5></a>
        <p class="card-text">Kelahiran 5 SEPTEMBER 1946
tinggi : 196cm
Agama : ZOROASTRIAN
UMUR : -
Penghargaan :
BRIT AWARD</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="ardilla.png" alt="...">
      <div class="card-body">
        <a href="nike.php"><h5 class="card-title">NIKE ARDILLA</h5></a>
        <p class="card-text">Kelahiran  27  DESEMBER 1975
Tinggi : 156cm
Agama : Islam
UMUR : -
Penghargaan :
-LEGEND AWARD
AMI LEGEND AWARD</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="ahmad.png" alt="...">
      <div class="card-body">
        <a href="dhani.php"><h5 class="card-title">Ahmad Dhani</h5></a>
        <p class="card-text">Kelahrian 26 Mei 1972
tinggi :172cm
Agama : Islam
50 Tahun
Penghargaan :
CLEAR TOP TEN AWARDS
-Nominator MTV Icon</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
</body>
</html>