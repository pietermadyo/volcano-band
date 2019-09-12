
<?php
	include "koneksi.php";
	$tbl_name="contact"; // Table name			

	$datetime=date("d-m-y h:i:s"); //date time

	$sql="INSERT INTO $tbl_name(name, email, message, date)VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]', '$datetime')";
	$result=mysql_query($sql);

	//check if query successful
	if($result){
	header('Location: contact.php');
	echo "<script type='text/javascript'>
			alert('Gagal...')
			</script>";
	}

	else {
		echo "<script type='text/javascript'>
				alert('Gagal...')
				</script>";
	}

	mysql_close();
?>
								