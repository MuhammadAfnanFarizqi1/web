<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$type = $_POST['type'];
$buy = $_POST['buy'];

 
// update data ke database
mysqli_query($koneksi,"update beli set type='$type', buy='$buy' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:clientorder.php");
 
?>