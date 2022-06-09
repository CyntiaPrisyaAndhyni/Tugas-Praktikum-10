<!DOCTYPE html>
<html lang=""en">
<head>
   <meta charset="UTF-8"> 
   <meta http-equiv=""X-UA-Compatible" content=""IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <title> MENU </title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
   integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
   
<style>
    .container{ width: 50%; margin-top:1px;}
    body {background-image: url("img.jpg");
        padding-top: 10%;
        padding-left: 20%;
     text-align: center;}
</style>

</head>
<body>
    
    <div class="card col-md-9">
    <div class="card-header text-center">
    <div class="container">
    
    <?php

    echo ("Selamat Datang Pada ");
    echo date("l, m-d-Y");
    ?>
    
    <a href="menu.php" class="btn btn-secondary btn-lg active btn-block" role="button" aria-pressed="true"><H1>Menu</H1></a>
    <br><br>
    <a href="pesanalumni.php" class="btn btn-secondary btn-lg active btn-block" role="button" aria-pressed="true">Form Pesan Alumni</a>
    <br>
    <a href="daftarpesan.php" class="btn btn-secondary btn-lg active btn-block" role="button" aria-pressed="true">Daftar Pesan Alumni</a>
    <br>
    <a href="login.php" class="btn btn-secondary btn-lg active btn-block" role="button" aria-pressed="true">Log Out</a>
    </div></div></div>
</body>
    
</html>