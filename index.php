<!DOCTYPE HTML>
<!--
	Epilogue by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>GameHub</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="shortcut icon" href="images/titlelogo.png" type="image/x-icon">
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="inner">
					<h1>Welcome to GameHub</h1>
					<p>Explore the latest news from the gaming industry</p>
				</div>
				<a onclick="CheckScroll('#wrapper')" style="cursor:pointer;">
					<div class="box">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</a>
			</header>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Banner -->
					<section id="intro" class="main" style="background-color:transparent;">
						<span class="icon"><img href=""/></span>
						<h2  style="color:#fff;">Latest Gaming Events of 2020/2021</h2>
						<section class="main items">
						<article class="item intro-items" style="">
							<header>
								<a href="#"><img src="images/COD.webp" alt="" /></a>
							</header>
							<ul class="actions">
								<p style="margin-bottom:4%"><b>Call of Duty</b>: Cold War pros are placing in the lowest bracket of the new ranked mode</p>
								<li><a class="button" onclick="CheckScroll('#Cod')">Read More</a></li>
							</ul>
						</article>
						<article class="item intro-items" style="">
							<header>
								<a href="#"><img src="images/BloodBorne.jpg" alt="" /></a>
							</header>
							<ul class="actions">
								<p style="margin-bottom:4%"><b>Bloodborne</b> 60fps Patch Released By Hacker named Lance McDonald</p>
								<li><a class="button" onclick="CheckScroll('#Bloodborne')">Read More</a></li>
							</ul>
						</article>
						<article class="item intro-items" style="">
							<header>
								<a href="#"><img src="images/CyberPunk.jpg" alt="" /></a>
							</header>
							<ul class="actions">
								<p style="margin-bottom:4%"><b>Cyberpunk 2077</b> Dev CD Projekt Red Hacked, Perpetrator Demands Ransom</p>
								<li><a class="button" onclick="CheckScroll('#Cyberpunk')">Read More</a></li>
							</ul>
						</article>
					</section>
					</section>

				<!-- Items -->
					<section class="main items">
						<article class="item" id="Cod">
							<header>
							<a href="#"><img src="images/COD.webp" alt="" /></a>
							<h1>Call of Duty<h1>
							</header>
								<p>
									Following the first day of Call of Duty: Black Ops – Cold War's new ranked mode, League Play, players are starting to suspect that its ranking system isn't hitting the mark. Several Cold War pros report that they've been placed in the bottom-tier Competitor ranking following their five placement matches.
									Normally, I wouldn't lend much credence to your average player proclaiming that they've been given a lower rank than they deserve, but I raise an eyebrow at any system in which I can outrank a pro. As spotted by the Twitter account CDL Intel, a few pro players are expressing disbelief at their official ranking following an impressive performance.
									Here's Joseph "Owakening" Conley of the Flordia Mutineers and Adam "Assault" Garcia of the Los Angeles Guerillas reacting to their new Competitor designations.
								</p>
							</article>
						<article class="item" id="Bloodborne">
							<header>
							<a href="#"><img src="images/BloodBorne.jpg" alt="" /></a>
							<h1>Bloodborne</h1>
							</header>
							<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
						</article>
						<article class="item" id="Cyberpunk">
							<header>
								<a href="#"><img src="images/CyberPunk.jpg" alt="" /></a>
								<h1>CyberPunk 2077</h1>
							</header>
							<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
						</article>
						<article class="item">
							<header>
								<a href="#"><img src="images/pic04.jpg" alt="" /></a>
							</header>
							<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus lacus non ornare.</p>
						</article>
					</section>

					<section id="cta" class="main special">
						<h2>/////////////////</h2>
						<p>////////////////////</p>
						<ul class="actions">
							<li><a href="#" class="button big">/////////////////</a></li>
						</ul>
					</section>

				<!-- Footer
					<footer id="footer">
						<ul class="icons">
							<li><a class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Gamehub Copyrighted</p>
					</footer> -->
			</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
				function CheckScroll(data) {
					var position = $(data).position();
					var top = position.top;
					var left = position.left;
					$("html").animate({
						scrollTop: top
					}, 800)
				}
			</script>
			<!-- <script src="assets/js/snow.js"></script> -->
	</body>
</html>
<?php include 'assets/includeFiles/navbar.php'?>
<?php include 'assets/includeFiles/footer.php'?>