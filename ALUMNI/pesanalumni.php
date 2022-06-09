<!DOCTYPE html>
<html lang=""en">
<head>
   <meta charset="UTF-8"> 
   <meta http-equiv=""X-UA-Compatible" content=""IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <title> ALUMNI </title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
    .container{ width: 100%; text-align: left;}
    body {
      
        padding-left: 20%;
        background-image: url("img.jpg");
        }
</style>
</head>
<body>
<div class="card col-md-9">
    <div class="card-header text-center">
        <div class="container">
        <div class="from-group">
            <h2 class="alert alert-warning text-center">
                FORM PESAN ALUMNI
            </h2>
        </div>
        <form action="simpan_pesan.php" method="post">
            <div class="form-group mt-3">
                <label for="name">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap"
            </div>
            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group mt-3">
                <label for="address">Alamat</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Alamat"
            </div>
            <div class="form-group mt-3">
                <label for="lulus">Tahun Lulus</label>
                <input type="text" name="lulus" id="lulus" class="form-control" placeholder="Tahun lulus"
            </div>
            <div class="form-group mt-3">
                <label for="pekerjaan">Pekerjaan</label>
                <input type="text" name="pkj" id="pkj" class="form-control" placeholder="Pekerjaan"
            </div>
            <div class="form-group mt-3">
                <label for="msg">Pesan</label>
                <textarea name="msg" id="msg" rows="2" placeholder="pesan" class="form-control">
                </textarea>
            </div>
        <div class="form-group mt-3">
            <span><a href="menu.php" class="btn btn-danger">kembali</a></span>
            <button type="submit" class="btn btn-warning" name="simpan">Simpan</button>
            <button type="reset" class="btn btn-secondary" name="reset">Reset</button>
        </div>
        </form>
    </div></div></div>
</body>
</html>
