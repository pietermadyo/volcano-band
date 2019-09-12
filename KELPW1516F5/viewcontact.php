<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Volcano</title>

<link rel="stylesheet" type="text/css" media="all" href="reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="text.css" />
<link rel="stylesheet" type="text/css" media="all" href="960.css" />
<link rel="stylesheet" type="text/css" media="all" href="style.css" />


<script src='loading.js' type='text/javascript'> </script>	<!--gambar loading-->

</head>

<!--animasi loading-->
<body onload='waitPreloadPage();'>
		
		<!--end animasi loading-->
		<div id="container" class="container_12">
		
		
				<div id="header_right">
        
					<ul id="social_box">
						<li><a href="#"><img src="images/facebook.png" alt="facebook" /></a></li>
						<li><a href="#"><img src="images/twitter.png" alt="twitter" /></a></li>
						<li><a href="#"><img src="images/linkedin.png" alt="linkin" /></a></li>
						<li><a href="#"><img src="images/technorati.png" alt="technorati" /></a></li>
						<li><a href="#"><img src="images/myspace.png" alt="myspace" /></a></li>                
					</ul>
					
				</div>
		
				<!-- Header  -->
					<div id="header" class="grid_12">
						<div id="logo" class="grid_12" >
							<img src="images/head1.png" alt="header"/>
						</div>
					</div>
				<!-- End Header  -->	
				
				
				
				<!-- Navigasi -->
					<div id="navigasi" class="grid_12">
						<div id="menu" class="grid_12 alpha">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="discography.html">Discography</a></li>
								<li><a href="photogallery.html">Photo gallery</a></li>
								<li><a href="event.html">Event</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="fans.html">Fans</a></li>
								<li><a href="merch.html">Merchandise</a></li>

							</ul>
						</div>
					</div>	
				
				<!-- content  -->
				<div id="page" class="grid_12" >
					<div id="page-bg">
						<div id="content" class="grid_9">
							<div id="post" class="grid_9 alpha">

								<div id="contact">
								<table width="400" border="0" align="center" cellpadding="3" cellspacing="0">
									
									</table>
									<br>

									<?php

									$host="localhost"; // Host name
									$username="root"; // Mysql username
									$password=""; // Mysql password
									$db_name="volcano"; // Database name
									$tbl_name="contact"; // Table name

									// Connect to server and select database.
									mysql_connect("$host", "$username", "$password")or die("cannot connect server ");
									mysql_select_db("$db_name")or die("cannot select DB");

									$sql="SELECT * FROM $tbl_name";
									$result=mysql_query($sql);

									while($rows=mysql_fetch_array($result)){
									?>
									
									<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
										<tr>
											<td>
												<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
													<tr>
														<td>Name</td>
														<td>:</td>
														<td><? echo $rows['name']; ?></td>
													</tr>
													<tr>
														<td>Email</td>
														<td>:</td>
														<td><? echo $rows['email']; ?></td>
													</tr>
													<tr>
														<td>Message</td>
														<td>:</td>
														<td><? echo $rows['message']; ?></td>
													</tr>
													<tr>
														<td valign="top">Date/Time </td>
														<td valign="top">:</td>
														<td><? echo $rows['datetime']; ?></td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
									<BR>
									<?
									}
									mysql_close(); //close database
									?>
									<tr>
									<td><strong><a href="contact.html">back to contact</a> </strong></td>
									</tr>
								
								</div>
							</div>		
						</div>	
						
						<div id="sidebar" class="grid_3 alpha">
							
							
							<div id="gambar1" class="grid_3">
								<a href="http://www.co.cc/" target="_blank"><img src="http://lh6.ggpht.com/_tkH9VXrZhE4/TLXqnZhDq1I/AAAAAAAAAjk/bf0G89ovoXU/cocc90_40g.gif" alt="CO.CC:Free Domain" border="0" height="" width="125"></a>

								<br/>

								<a href="http://nic.cz.cc/"><img src="http://lh4.ggpht.com/_tkH9VXrZhE4/TLXqnwdzuuI/AAAAAAAAAjw/cj_BHTnGy9I/cz.cc%20125x125_animated_black_eng.gif" alt="cz.cc free domain"></a>

								<br/>

								<img src="http://lh4.ggpht.com/_tkH9VXrZhE4/TLXrQiDEZpI/AAAAAAAAAj4/7TtByvqxG0M/cw.cm%20125.jpg" alt="cw.cm free domain">
								<img src="images/guitar.gif" alt="gitar banner"/>
				
								
							</div>
						
							<div id="gambar2" class="grid_3">
								 <img border="0" src="images/ban.gif" alt="banner"/>
							</div>
						</div>
					</div>
				</div>
			
				
				<!-- End content  -->
				
				
				<div id="yourIP" class="grid_12 alpha">
					<div id="yourIP1" class="grid_12">
						<a href="http://www.danasoft.com"><img src="http://www.danasoft.com/sig/peeqee242484.jpg" alt="gambarIP" /></a><div style="font-family:arial,sans-serif;font-size:11px;"></div>
					</div>
				</div>
				
				
				<div id="upfooter" class="grid_12 alpha">   
					<div id="player" class="grid_3 alpha">   
						<img style="visibility:hidden;width:0px;height:0px;" border=0 width=0 height=0 src="http://c.gigcount.com/wildfire/IMP/CXNID=2000002.0NXC/bT*xJmx*PTEyOTE4MTE2Nzc2MDImcHQ9MTI5MTgxMTY4MDQ1NyZwPTE4MDMxJmQ9Jmc9MSZvPWMwZjU5OWE3MDE4ZDRhMmY5Mjdi/NzdmMzVjODUxYzU*.gif" /><embed src="http://assets.mixpod.com/swf/mp3/mff-mpodmin.swf?myid=73234387&path=2010/12/08" quality="high" wmode="transparent" flashvars="mycolor=7BCF4A&mycolor2=508531&mycolor3=ffffff&autoplay=true&rand=1&f=4&vol=100&pat=0&grad=false" width="158" height="208" name="myflashfetish" salign="TL" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" border="0" style="visibility:visible;width:158px;height:208px;" /><br><a href="http://www.mixpod.com/playlist/73234387" target="_blank"><img src="http://assets.myflashfetish.com/images/get-tracks.gif" title="Get Music Tracks!" style="border-style:none;" alt="Music"></a><a href="http://www.mixpod.com" target="_blank"><img src="http://assets.mixpod.com/images/make-own.gif" title="Create A Playlist!" style="border-style:none;" alt="Playlist"></a><br />
					</div> 
					
					
					<div id="footer_banner" class="grid_3">
        
						<ul>
							<li><a href="#"><img src="images/ads.jpg" alt="ads1"/></a></li>
							<li><a href="#"><img src="images/ads.jpg" alt="ads2"/></a></li>
							<li><a href="#"><img src="images/ads.jpg" alt="ads3"/></a></li>
							<li><a href="#"><img src="images/ads.jpg" alt="ads4"/></a></li>              
						</ul>
					
					</div>
					
					<div id="globe" class="grid_3">   <!--harus connect internet -->
								<!--globe-->
								<script type="text/javascript" src="http://jd.revolvermaps.com/t.js"></script><script type="text/javascript">rmt_ki101('8',178,'3uqigzoi447','ff007e');</script>
								<!--end globe-->
					</div>
					
					
					<div id="validasi" class="grid_3"> 
					<div class="titlevalidasi">validasi</div>
					<p>
								<a href="http://jigsaw.w3.org/css-validator/check/referer">
									<img style="border:0;width:88px;height:31px"
										src="http://jigsaw.w3.org/css-validator/images/vcss"
										alt="Valid CSS!" />
								</a>
					</p>

					<p>
							<a href="http://validator.w3.org/check?uri=referer"><img
								src="http://www.w3.org/Icons/valid-xhtml10"
								alt="Valid XHTML 1.0 Strict" height="31" width="88" />
							</a>
					</p>

		
					</div>
					
					
				</div>
				 
				
				
				<!-- Footer -->
				<div id="footer" class="grid_12">				
						<p>Copyright &copy; 2010 Volcano. All rights reserved.</p>
				</div>
				<!-- End Footer -->
				
				
		</div>
</body>
</html>