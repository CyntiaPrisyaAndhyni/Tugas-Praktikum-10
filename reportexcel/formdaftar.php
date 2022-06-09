<!DOCTYPE html>
<html lang=""en">
<head>
   <meta charset="UTF-8"> 
   <meta http-equiv=""X-UA-Compatible" content=""IE=edge">
   <meta name="viewport" content="width=device-width,initial-scale=1.0">
   <title> FORM PENDAFTARAN </title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
   integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
    .container{ width: 100%; margin-top: 100px;}
</style>
</head>
<body>
    <div class="container">
        <div class="from-group">
            <h2 class="alert alert-info text-center">
                FORM PENDAFTARAN SISWA BARU
            </h2>
        </div>
        <form action="simpan_form.php" method="post">
            <div class="form-group mt-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap"
            </div>
            <div class="form-group mt-3">
                <label for="jkel">Jenis Kelamin</label>
                <div class="row">
                    <div class="col">
                        <div class="form-check"></div>
                            <input type="radio" name="jkel" id="jkel" class="form-check-input" value="Perempuan">
                            <label for="">Perempuan</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input type="radio" name="jkel" id="jkel" class="form-check-input" value="Laki-laki">
                            <label for="">Laki-laki</label>   
                        </div>
                    </div>
                </div> 
            </div>
            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group mt-3">
                <label for="telp">Nomor Telepon</label>
                <input type="text" name="telp" id="telp" class="form-control" placeholder="Nomor Telepon "
            </div>
            <div class="form-group mt-3">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat"
            </div>
            <div class="form-group mt-3">
                <label for="kota">Kota</label>
                <input type="text" name="kota" id="kota" class="form-control" placeholder="Kota"
            </div>
            <div class="form-group mt-3">
                <label for="prov">Provinsi</label>
                <input type="text" name="prov" id="prov" class="form-control" placeholder="Provinsi"
            </div>
            <div class="form-group mt-3">
                <label for="sekolah">Asal Sekolah</label>
                <input type="text" name="sekolah" id="sekolah" class="form-control" placeholder="Asal Sekolah"
            </div>
            <div class="form-group mt-3">
                <label for="lulus">Tahun Lulus</label>
                <input type="text" name="lulus" id="lulus" class="form-control" placeholder="Tahun Lulus"
            </div>
            <div class="form-group mt-3">
                <label for="ortu">Nama Orangtua</label>
                <input type="text" name="ortu" id="ortu" class="form-control" placeholder="Nama Orang Tua"
            </div>
            <div class="form-group mt-3">
                <label for="pekerjaan">Pekerjaan Orang Tua</label>
                <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Pekerjaan Orang Tua"
            </div>
            <div class="form-group mt-3">
                <label for="telportu">Nomor Telepon Orang Tua</label>
                <input type="text" name="telportu" id="telportu" class="form-control" placeholder="Nomor Telepon Orang Tua"
            </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            <button type="reset" class="btn btn-danger" name="reset">Reset</button>
        </div>
        </form>
    </div>
</body>
</html>
