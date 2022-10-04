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
            include "artispop.css";
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
        <h1>Artis Pop</h1>
        <a href="artis.php" style="position: absolute; width: 62px; height: 22px;left: 188px;top: 165px;font-family: 'Montserrat'; font-style: normal; font-weight: 700; font-size: 20px; line-height: 24px; color: #FFFFFF; text-decoration: none; font-family: 'Monserrat'", sans-serif;>Artist</a>
        <a href="#" style="position: absolute; width: 62px; height: 22px;left: 49px;top: 165px;font-family: 'Montserrat'; font-style: normal; font-weight: 700; font-size: 20px; line-height: 24px; color: #FFFFFF; text-decoration: none;">Overview</a>
    </div>

    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="hah.png" alt="...">
      <div class="card-body">
        <h5 class="card-title">Rizky Febian</h5>
        <p class="card-text">Kelahiran 25 Februari 1998
tinggi : 175cm
Agama : Islam
32 Tahun
Penghargaan :
Indonesian Choice Award untuk Song of the Year
Asian Music Award untuk Artis Asia Terbaik
AMI Award  Terbaik </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="judika.png" alt="...">
      <div class="card-body">
        <h5 class="card-title">Judika</h5>
        <p class="card-text">Kelahiran  31 agustus 1978
Tinggi : 173cm
Agama : Islam
44 Tahun
Penghargaan :
Artis Solo Pria Pop
Kolaborasi Pop Terbaik
Indonesia Choice Award Male Singer</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="tulus.png" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tulus</h5>
        <p class="card-text">Kelahrian 20 Agustus 1987
tinggi :186cm
Agama : Islam
35 Tahun
Penghargaan :
Album Pop Terbaik
Pencipta Lagu Pop Terbaik
AMI Award  Album Terbaik </p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
  </div>
</div>
</body>
</html>