<?php
include ("koneksi.php");

if (isset ($_POST["simpan"])){

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$nama=$_POST['nama'];
$jkel=$_POST['jkel'];
$email=$_POST['email'];
$telp=$_POST['telp'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$prov=$_POST['prov'];
$skl=$_POST['sekolah'];
$lulus=$_POST['lulus'];
$ortu=$_POST['ortu'];
$pekerjaan=$_POST['pekerjaan'];
$telportu=$_POST['telportu'];

$sql="insert into db_siswa.pendaftaran set nama='$nama',
                        jkel='$jkel', 
                        email='$email',
                        telp='$telp',  
                        alamat='$alamat', 
                        kota='$kota', 
                        prov='$prov',
                        sekolah='$skl',
                        lulus='$lulus',
                        ortu='$ortu',
                        pekerjaan='$pekerjaan',
                        telportu='$telportu' ";

$simpan = mysqli_query($koneksi,$sql); 

header("location:reportpendaftaran.php");

}
?>
