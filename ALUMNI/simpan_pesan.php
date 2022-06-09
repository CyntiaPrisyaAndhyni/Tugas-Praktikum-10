<?php
include ("koneksi.php");

if (isset ($_POST["simpan"])){


//memindahkan nilai data form ke variabel sederhana agar mudah ditulis

$name=$_POST['name'];
$email=$_POST['email'];
$add=$_POST['address'];
$ls=$_POST['lulus'];
$pkj=$_POST['pkj'];
$msg=$_POST['msg'];



$sql="insert into webalumni.pesanalumni set 
                        name='$name',
                        email='$email',
                        address='$add',
                        tahunlulus='$ls',
                        pekerjaan='$pkj',
                        message='$msg'";

$simpan=mysqli_query($conn,$sql); 

header("location:pesanalumni.php");

}
?>