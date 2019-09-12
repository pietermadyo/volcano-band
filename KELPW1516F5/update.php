<?php

	include('koneksi.php');
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
  
	$iduser = $_POST['id'];
	$username = $_POST['username']; 
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	$email = $_POST['email'];
	$name = $_POST['name'];
	
	

	if($password1 == $password2)
	{
		$query = mysql_query("UPDATE `USER` SET `USERNAME`='$username',`PASSWORD`='$password1',`EMAIL`='$email',`NAME`='$name' WHERE id_user = $iduser ") or die(mysql_error());
		if ($query) {
				echo "<script>
				alert (' User berhasil diedit !!!!');
				eval(\"parent.location='index.php '\");
				</script>";
		}
		else
		{
				echo "<script>
				alert (' Gagal mengedit user !!!!');
				</script>";
		}
		mysql_close($query);
	}
	else
	{
		echo "<script>	
		alert (' Password tidak valid!!');
		eval(\"parent.location='edit.php '\");
		</script>";
	}
?>