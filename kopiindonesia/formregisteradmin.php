<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Form Register</title>
<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:admin/index.php'); }
?>
<div class="kotak_login">
	<p class="tulisan_login">Register</p>
 
	<form action="registeradmin.php" method="post">
		<label>username</label>
		<input type="text" name="username" class="form_login" placeholder=" Insert username ..">
 
		<label>Password</label>
		<input type="password" name="password" class="form_login" placeholder="insert Password ..">
		
		<input type="submit" class="tombol_login" value="Register">
 
		<br/>
		<br/>
		<center>
			<a class="link" href="index.php">Back</a>
		</center>
	</form>
	
</div>