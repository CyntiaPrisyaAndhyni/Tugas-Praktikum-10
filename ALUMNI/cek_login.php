<?php 
session_start();

// untuk menghubungkan dengan database
include "koneksi.php";

if (isset ($_POST["masuk"])){

// menampung data dari form login
$user = $_POST['username'];
$psw = $_POST['password'];

// menyeleksi username dan password yang sesuai
$masuk = mysqli_query($conn,"SELECT * FROM alumni WHERE username='$user' AND password='$psw'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($masuk);

if($cek > 0){
	$_SESSION['username'] = $user;
	$_SESSION['status'] = "login";
	header("location:menu.php");
}else{
	header("location:login.php?pesan=gagal");
}}
?>  