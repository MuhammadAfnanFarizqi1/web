<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Login Page Admin</title>
</head>
<body>
<div class="kotak_login">
	<p class="tulisan_login">Silahkan login</p>
 
	<form action="loginadmin.php" method="post">
		<label>Username</label>
		<input type="text" name="username" class="form_login" placeholder="Username atau email ..">
 
		<label>Password</label>
		<input type="password" name="password" class="form_login" placeholder="Password ..">
 
		<input type="submit" class="tombol_login" value="LOGIN">
 
		<br/>
		<br/>
		<center>
			<a class="link" href="index.php">Back</a>
		</center>
	</form>
	
</div>
</body>
</html>