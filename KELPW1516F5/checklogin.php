<?php
session_start();
include "koneksi.php";

$query = mysql_query("select * from user where username = '".$_POST["username"]."' AND password = '".$_POST["password"]."' ");

$hasil = mysql_fetch_array($query);

if ($hasil[3]!="")
{
	if($hasil[3]=="administrator")
	{
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['role'] = $hasil[3];
		header('Location: dashboard.php?message=success');
	}
	else
	{
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['role'] = $hasil[3];
		//$_SESSION['error']=" ";
		header('Location: viewfans.php?message=success');
	}
	
}
else
{
	if($hasil[3]=="administrator")
	{
		$_SESSION['error']="Username atau password anda salah!";
		header('Location: admin.php?message=failed');
	}
	else
	{
		$_SESSION['error']="Username atau password anda salah!";
		header('Location: fanslogin.php?message=failed');
	}
	
}

?>

