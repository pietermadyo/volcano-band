
								<?php
										include "koneksi.php";
										$tbl_name="user"; // Table name

										$datetime=date("d-m-y h:i:s"); //date time

										$sql="INSERT INTO $tbl_name(username, password, role, name, email, telepon, kota, joindate)VALUES('$_POST[username]', '$_POST[password]','user', '$_POST[name]', '$_POST[email]', '$_POST[telepon]', '$_POST[kota]','$datetime')";
										$result=mysql_query($sql);

										//check if query successful
										if($result){
										header('Location: fanslogin.php');
										}

										else {
										header('Location: fansregister.php');
										}

										mysql_close();
								?>
								
							