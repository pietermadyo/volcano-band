<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Volcano</title>

<link rel="stylesheet" type="text/css" media="all" href="reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="text.css" />
<link rel="stylesheet" type="text/css" media="all" href="960.css" />
<link rel="stylesheet" type="text/css" media="all" href="style.css" />
<link rel="stylesheet" type="text/css" media="all" href="photogallery_style.css" />


<script src='loading.js' type='text/javascript'> </script><!--gambar loading-->

<script type="text/javascript" src="jquery/jquery-1.4.2.js"></script> 		
<script type="text/javascript"> 
$(document).ready(function(){

//Larger thumbnail preview 

$("ul.thumb li").hover(function() {
	$(this).css({'z-index' : '10'}); 				 /* menambah nilai z-index yang lebih tinggi sehingga gambar tetap di atas */
	$(this).find('img').addClass("hover").stop() 	 /* Membuat class "hover", lalu menghentikan animasi agar animasi tidak menumpuk*/
		.animate({
			marginTop: '-110px',
			marginLeft: '-110px',
			top: '50%',
			left: '50%',
			width: '150px', 						 /* Set lebar baru */
			height: '150px', 						 /* Set tinggi baru */
			padding: '20px'
		}, 200); 									 /* nilai 200p adalah seberapa cepat animasi hover */

	} , function() {
	$(this).css({'z-index' : '0'}); 				 /* Set z-index kembali ke 0 */
	$(this).find('img').removeClass("hover").stop()  /* Menghilangkan class "hover" , agar animasi tidak menumpuk*/
		.animate({
			marginTop: '0', 						 /* Set alignment kembali default */
			marginLeft: '0',
			top: '0',
			left: '0',
			width: '50px', 						 /* Set lebar kembali ke awal */
			height: '50px', 						 /* Set lebar kembali ke awal */
			padding: '5px'
		}, 400);
});

// Perubahan image (image kiri yang besar) ketika di klik
	$("ul.thumb li a").click(function() {
		
		var mainImage = $(this).attr("href"); 			// untuk mencari nama image
		$("#main_view img").attr({ src: mainImage });
		return false;		
	});
 
});
</script>

</head>
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
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="discography.php">Discography</a></li>
								<li><a href="photogallery.php">Photo gallery</a></li>
								<li><a href="event.php">Event</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="fanslogin.php">Fans</a></li>
								<li><a href="merch.php">Merchandise</a></li>
							</ul>
						</div>
					</div>
				<!-- End Navigasi -->
				
				<!-- content  -->
				<div id="page" class="grid_12" >
					<div id="page-bg">
						<div id="content" class="grid_9">
							<div id="post" class="grid_9 alpha">

								<div id="main_view">
									<img src="images/volcano_2.jpg" alt="" />
								</div>
							
								<ul class="thumb">
									<li><a href="images/volcano_2.jpg"><img src="images/volcano_2.jpg" alt="" /></a></li>
									<li><a href="images/1.jpg"><img src="images/1.jpg" alt="" /></a></li>
									<li><a href="images/2.jpg"><img src="images/2.jpg" alt="" /></a></li>
									<li><a href="images/3.jpg"><img src="images/3.jpg" alt="" /></a></li>
									<li><a href="images/4.jpg"><img src="images/4.jpg" alt="" /></a></li>
									<li><a href="images/5.jpg"><img src="images/5.jpg" alt="" /></a></li>
									<li><a href="images/6.jpg"><img src="images/6.jpg" alt="" /></a></li>
									<li><a href="images/7.jpg"><img src="images/7.jpg" alt="" /></a></li>
								</ul>
								
							</div>		
						</div>	
						
						<div id="sidebar" class="grid_3 alpha">
							
							
							<div id="gambar1" class="grid_3">
								<a href="http://www.co.cc/" target="_blank"><img src="http://lh6.ggpht.com/_tkH9VXrZhE4/TLXqnZhDq1I/AAAAAAAAAjk/bf0G89ovoXU/cocc90_40g.gif" alt="CO.CC:Free Domain" border="0" height="" width="125"></a>

								</br>

								<a href="http://nic.cz.cc/"><img src="http://lh4.ggpht.com/_tkH9VXrZhE4/TLXqnwdzuuI/AAAAAAAAAjw/cj_BHTnGy9I/cz.cc%20125x125_animated_black_eng.gif" alt="cz.cc free domain"></a>

								</br>

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
						<p>Copyright &copy; 2015 Volcano. All rights reserved.</p>
				</div>
				<!-- End Footer -->

		</div>
</body>
</html>


