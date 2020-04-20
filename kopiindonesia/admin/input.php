<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$type = $_POST['type'];
$price = $_POST['price'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into kopi values('','$type','$price')");
 
// mengalihkan halaman kembali ke index.php
header("location:coffee.php");
 
?>