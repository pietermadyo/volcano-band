<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>Volcano</title>

<link rel="stylesheet" type="text/css" media="all" href="reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="text.css" />
<link rel="stylesheet" type="text/css" media="all" href="960.css" />
<link rel="stylesheet" type="text/css" media="all" href="style.css" />

<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.slidertron-0.1.js"></script>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
@import "slidertron.css";
</style>

</head>

<body>
<!-- Song Player http://playlist.me --><script type="text/javascript" src="http://playlist.me/w/script.js" data-config="{'skin':'skins/black/skin.css','volume':50,'autoplay':true,'shuffle':true,'repeat':1,'placement':'bottom','showplaylist':false,'playlist':[{'title':'All I Want For Christmas - MINOR KEY! ft. Chase Holfelder','url':'https://www.youtube.com/watch?v=SDACj0tkD-s'},{'title':'Like I%27m Gonna Lose You - Chris Collins, Madilyn Bailey, KHS Cover','url':'https://www.youtube.com/watch?v=_lbsPtTX9gk'},{'title':'Infinity - One Direction - KHS & The Overtunes Cover','url':'https://youtu.be/48ruHXPswks'}]}" ></script><noscript><a href="http://playlist.me/songs/">player playlist</a></noscript><!-- playlist.me script end -->	
		<div id="container" class="container_12">
				<!-- Header  -->		
				<div id="header_right">       
					<ul id="social_box">
						<li><a href="#"><img src="images/facebook.png" alt="facebook" /></a></li>
						<li><a href="#"><img src="images/twitter.png" alt="twitter" /></a></li>
						<li><a href="#"><img src="images/linkedin.png" alt="linkin" /></a></li>
						<li><a href="#"><img src="images/technorati.png" alt="technorati" /></a></li>
						<li><a href="#"><img src="images/myspace.png" alt="myspace" /></a></li>                
					</ul>
				</div>
		
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
				
				<!-- Slideshow -->
				<div id="slideshow" class="grid_12">		
					<div id="foobar" class="grid_12">
						<div id="col1"><a href="#" class="previous">&nbsp;</a></div>
						<div id="col2">
							<div class="viewer">
								<div class="reel">
									<div class="slide"><img src="images/volcano.jpg" width="726" height="335" alt="" /> <span>Volcano Band</span> </div>
									<div class="slide"><img src="images/1.jpg" width="726" height="335" alt="" /> <span>pieter (Lead Guitar & Vocal)</span> </div>
									<div class="slide"><img src="images/2.jpg" width="726" height="335" alt="" /> <span>steven (Bassis & Vocal)</span> </div>
									<div class="slide"><img src="images/3.jpg" width="726" height="335" alt="" /> <span>wahyu (Drummer) </span> </div>
									<div class="slide"><img src="images/4.jpg" width="726" height="335" alt="" /> <span>tian (Guitar)</span> </div>
								</div>
							</div>
						</div>
						<div id="col3"><a href="#" class="next">&nbsp;</a></div>
					</div>
					<script type="text/javascript">

										$('#foobar').slidertron({
											viewerSelector:			'.viewer',
											reelSelector:			'.viewer .reel',
											slidesSelector:			'.viewer .reel .slide',
											navPreviousSelector:	'.previous',
											navNextSelector:		'.next',
											navFirstSelector:		'.first',
											navLastSelector:		'.last'
										});
										
					</script>	
				</div>
				<!-- End Slideshow -->
						
				
				
				<!-- Footer -->
				<div id="footer" class="grid_12">				
						<p>Copyright &copy; 2015 Volcano. All rights reserved.</p>
				</div>
				<!-- End Footer -->
				
		</div>
</body>
</html>