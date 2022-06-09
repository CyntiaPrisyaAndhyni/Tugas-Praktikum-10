<?php
include ("koneksi.php");

if (isset ($_POST["simpan"])){

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis

$name=$_POST['name'];
$add=$_POST['address'];
$email=$_POST['email'];
$jrs=$_POST['jurusan'];
$agt=$_POST['angkatan'];
$user=$_POST['username'];
$psw=$_POST['password'];


$sql="insert into webalumni.alumni set 
                        name='$name',
                        address='$add',
                        email='$email',
                        jurusan='$jrs',
                        angkatan='$agt',
                        username='$user', 
                        password='$psw'";

$simpan=mysqli_query($conn,$sql); 

header("location:login.php");
}
?>