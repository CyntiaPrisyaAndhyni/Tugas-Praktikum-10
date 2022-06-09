<!DOCTYPE html>
<html lang=""en">
<head>
   <meta charset="UTF-8"> 
   <meta http-equiv=""X-UA-Compatible" content=""IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <title> SIGN UP </title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
    .container{ width:100%; text-align: left;}
    body {
     
        padding-left: 40%;
        background-image: url("img.jpg");
        }
</style>
</head>
<body>
    <div class="card col-md-6">
    <div class="card-header text-center">
    <div class="container">
        <div class="from-group">
            <h2 class="alert alert-warning text-center">
                SIGN UP
            </h2>
            <center> ~~ Buat Akun Disini ~~ <center>
        </div> 
        <form action="simpan_signup.php" method="post">
            <div class="form-group mt-3">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group mt-3">
                <label for="address">Alamat</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Alamat">
            </div>
            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group mt-3">
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" class="form-control" placeholder="Jurusan">
            </div>
            <div class="form-group mt-3">
                <label for="angkatan">Angkatan</label>
                <input type="text" name="angkatan" id="angkatan" class="form-control" placeholder="Angkatan">
            </div>
            <div class="form-group mt-3">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username"
            </div>
            <div class="form-group mt-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password"
            </div>
            <br>
            
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            <button type="reset" class="btn btn-danger" name="reset">Reset</button>
        </div>
        </form>
    </div></div></div>
</body>
</html>
