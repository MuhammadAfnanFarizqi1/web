<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
-->
<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];   
   $sql = "SELECT * FROM admin WHERE username = '$username'";
   $query = $koneksi->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div align='center' href='formregisteradmin.php'>Username Dont Register! <a href='formregisteradmin.php'>Back</a></div>";
   } else {
     if($password <> $hasil['password']) {
       echo "<div align='center'>Password is wrong! <a href='formloginadmin.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:admin/index.php');
     }
   }
?>