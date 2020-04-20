
<?php
   require_once("koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];
   $sql = "SELECT * FROM admin WHERE username = '$username'";
   $query = $koneksi->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Username Already Registered! <a href='formregisteradmin.php'>Back</a></div>";
   } else {
     if(!$username || !$password) {
       echo "<div align='center'>There is still empty data!<a href='formregisteradmin.php'>Back</a>";
     } else {
       $data = "INSERT INTO user VALUES ('$username', '$password')";
       $simpan = $koneksi->query($data);
       if($simpan) {
         echo "<div align='center'>Registration Success, Please Login <a href='formloginadmin.php'>Login</a></div>";
       } else {
         echo "<div align='center'>Failed Process! <a href='formregisteradmin.php'>Please Re-Register</div>";
       }
     }
   }
?>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
-->