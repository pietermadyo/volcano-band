<?php
	include('koneksi.php');
	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$id_user = $_GET['ID'];
	$query = mysql_query("DELETE FROM USER WHERE id_user = $id_user ") or die(mysql_error());

	if ($query) {
		header('location:dashboard.php?message=success');
	}
	mysqli_close($query);
?> 