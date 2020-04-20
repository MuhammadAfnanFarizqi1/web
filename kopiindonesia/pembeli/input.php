<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$type = $_POST['type'];
$buy = $_POST['buy'];

 
// menginput data ke database
mysqli_query($koneksi,"insert into beli values('','$type','$buy')");
 
// mengalihkan halaman kembali ke index.php
header("location:order.php");
 
?>