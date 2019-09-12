<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('Location: index.php');
	}
?>
<html>
<head>
<title>Incuqu</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="Felix Wisnu">
<meta name="description" content="Incuqu Website">
<meta name="keywords" content="Incuqu Website">
<meta name="author" content="Felix Wisnu">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="mos-css/mos-style.css"> <!--pemanggilan file css-->
</head>

<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		<?php
			//session_start();
			if(!isset($_SESSION['username']))
			{
				echo "<a href='login.php'>Login </a>| <a href='formUser.php'>Sign Up</a>";
			}
			else
			{
				echo "Hallo, "; echo $_SESSION['username'];
				echo "<br>";
				echo "<a href='logout.php'>Keluar</a>";
			}
		?>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="index.php">Home</a></li>
		<?php
			if(isset($_SESSION['username']))
			{
				echo "<li><a href='edit.php'>Edit Profile</a></li>";
			}
		?>
		<li><a href="showscore.php">HighScore</a></li>
		<li><a href="#">Download</a></li>
		<li><a href="contact.php">Contact Us</a></li>
	</ul>
	</div>
	<div id="rightContent">
	<h3>Edit Profile</h3>
	
		<?php

			// koneksi ke mysql

			include('connection.php');
			// Check connection
			if (mysqli_connect_errno())
			{
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			// membaca data id data yang akan diedit 
			//$id = $_GET['ID'];
			$user = $_SESSION['username'];

			// membaca data dalam database sesuai id datanya
			$query = "SELECT * FROM USERS WHERE username = '$user'";
			$hasil = mysql_query($query);
			$data  = mysql_fetch_array($hasil);
		?>
		
		<form name="input_data" action="update.php" method="post">
			<table width="95%">
				<tr><td><b>Id User</b></td><td><input type="text" disabled="disable" id="iduser" name="iduser" class="pendek" value="<?php echo $data['ID_USER'];?>"></td></tr>
				<tr><td width="125px"><b>Username</b></td><td><input id="username" type="text" name="username" class="sedang" required="required"  value="<?php echo $data['USERNAME'];?>"></td></tr>
				<tr><td><b>Password</b></td><td><input type="password" name="password1" class="sedang" required="required" ></td></tr>
				<tr><td><b>Reenter Password</b></td><td><input type="password" name="password2" class="sedang" required="required" ></td></tr>
				<tr><td><b>Email</b></td><td><input type="text" id="email"name="email" class="sedang" required="required"  value="<?php echo $data['EMAIL'];?>"></td></tr>
				<tr><td><b>Name</b></td><td><input type="text" id="name" name="name" class="sedang" required="required" value="<?php echo $data['NAME'];?>"></input></td></tr>
				<tr><td></td><td>
				</td></tr>
				<tr><td></td><td>
				<input type="hidden" id="id" name="id" value="<?php echo $data['ID_USER']; ?>">
				<input type="submit" class="button" value="Submit">
				
				</td></tr>
			</table>
		</form>		
	</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2013 Incuqu | <a href="http://www.incuqu.zz.mu">www.incuqu.zz.mu</a> 
</div>
</div>
</body>
</html>