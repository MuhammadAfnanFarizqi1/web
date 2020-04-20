<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$type = $_POST['type'];
$price = $_POST['price'];

 
// update data ke database
mysqli_query($koneksi,"update kopi set type='$type', price='$price' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:coffee.php");
 
?>