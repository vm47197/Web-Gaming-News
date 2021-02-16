<?php  
include('connection.php'); 
if(!isset($_SESSION['username']))
{
	header("location: pages/login.php");
}
else{
	if($_SESSION['role'] == "user"){
	}
	else if($_SESSION['role'] == "admin"){
		header("location: pages/admin-dashboard.php");
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<!-- <title>GameHub</title> -->
	<title>GameHub</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="shortcut icon" href="images/titlelogo.png" type="image/x-icon">
</head>
<body>
<?php if(isset($_SESSION['username'])){ ?>

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
		<div>
			<h2 class="text-center">Latest Gaming news</h2>
		</div>
		<!-- Banner -->
		<section class="main items">
			<article class="item first-items" >
				<header style="border:none">
					<a href="#"><img src="images/COD.webp" alt="" /></a>
				</header>
				<ul class="actions">
					<p style="margin-bottom:4%"><b>Call of Duty</b>: Cold War pros are placing in the lowest bracket of
						the new ranked mode</p>
					<li><a class="button" onclick="CheckScroll('#Cod')">Read More</a></li>
				</ul>
			</article>
			<article class="item first-items">
				<header style="border:none">
					<a href="#"><img src="images/BloodBorne.jpg" alt="" /></a>
				</header>
				<ul class="actions">
					<p style="margin-bottom:4%"><b>Bloodborne</b> 60fps Patch Released By Hacker named Lance McDonald
					</p>
					<li><a class="button" onclick="CheckScroll('#Bloodborne')">Read More</a></li>
				</ul>
			</article>
			<article class="item first-items">
				<header style="border:none">
					<a href="#"><img src="images/CyberPunk.jpg" alt="" /></a>
				</header>
				<ul class="actions">
					<p style="margin-bottom:4%"><b>Cyberpunk 2077</b> Dev CD Projekt Red Hacked, Perpetrator Demands
						Ransom</p>
					<li><a class="button" onclick="CheckScroll('#Cyberpunk')">Read More</a></li>
				</ul>
			</article>
		</section>
		<hr>
		<section class="main items">
			<article class="item" id="Cod">
				<header>
					<a href="#"><img src="images/COD.webp" alt="" /></a>
					<h1>Call of Duty<h1>
				</header>
				<p>
					Following the first day of Call of Duty: Black Ops – Cold War's new ranked mode, League Play,
					players are starting to suspect that its ranking system isn't hitting the mark. Several Cold War
					pros report that they've been placed in the bottom-tier Competitor ranking following their five
					placement matches.
					Normally, I wouldn't lend much credence to your average player proclaiming that they've been given a
					lower rank than they deserve, but I raise an eyebrow at any system in which I can outrank a pro. As
					spotted by the Twitter account CDL Intel, a few pro players are expressing disbelief at their
					official ranking following an impressive performance.
					Here's Joseph "Owakening" Conley of the Flordia Mutineers and Adam "Assault" Garcia of the Los
					Angeles Guerillas reacting to their new Competitor designations.
				</p>
			</article>
			<article class="item" id="Bloodborne">
				<header>
					<a href="#"><img src="images/BloodBorne.jpg" alt="" /></a>
					<h1>Bloodborne</h1>
				</header>
				<p>Many can agree that Bloodborne is one of the best games of the previous console generation--perhaps even the best--but playing it at sub-30 frames per second can be a major adjustment if you're used to dodging your way through Sekiro at 60fps. Now, the well-known hacker Lance McDonald has released his 60 FPS patch for Bloodborne on his Patreon, but you'll need a jailbroken PS4 to try it out.
					We've known about McDonald's 60fps patch for a while now, since he first showed it last year, but this is the first time that it's been publicly available. McDonald teamed up with Eurogamer's Digital Foundry to do a technical breakdown of the 60fps patch, and the results are fascinating. McDonald's YouTube channel is a treasure trove of behind-the-scenes materials for From Software's games, including Bloodborne and the Souls series. The patch also gives you the option of lowering the rendering resolution of the game to 720p to get a more consistent frame rate.
				</p>
			</article>
			<article class="item" id="Cyberpunk">
				<header>
					<a href="#"><img src="images/CyberPunk.jpg" alt="" /></a>
					<h1>CyberPunk 2077</h1>
				</header>
				<p>CD Projekt Red has revealed it has been the victim of a cyberattack. The Cyberpunk 2077 and Witcher developer shared a ransom note, which threatened to release sensitive information, including source code for CDPR's games, if the hackers' demands aren't met.
					In a statement, CDPR confirmed that an "unidentified actor" gained access to the company's servers and has obtained sensitive information. To the extent that CDPR is aware, no personal data was exposed, but the developer's own properties, information, and data has reportedly been accessed by the hackers.CDPR is working with law enforcement and other parties to get to the bottom of the attack. The developer also released the ransom note, which states, "Your have been EPICALLY pwned ! !"</p>
			</article>
			<article class="item">
				<header>
					<a href="#"><img src="images/pic04.jpg" alt="" /></a>
				</header>
				<p>Fusce malesuada efficitur venenatis. Pellentesque tempor leo sed massa hendrerit hendrerit. In sed
					feugiat est, eu congue elit. Ut porta magna vel felis sodales vulputate. Donec faucibus dapibus
					lacus non ornare.</p>
			</article>
		</section>
		<hr>
		<section class="main">
			<div class="outer-wrapper">
				<h1>Gaming TESTTTTT</h1>
				<div class="s-wrap s-type-1" role="slider">
					<input type="radio" id="s-1" name="slider-control" checked="checked">
					<input type="radio" id="s-2" name="slider-control">
					<input type="radio" id="s-3" name="slider-control">
					<input type="radio" id="s-4" name="slider-control">
					<input type="radio" id="s-5" name="slider-control">
					<ul class="s-content">
						<li class="s-item s-item-1"></li>
						<span class="button big"></span>
						<li class="s-item s-item-2"></li>
						<li class="s-item s-item-3"></li>
						<li class="s-item s-item-4"></li>
						<li class="s-item s-item-5"></li>
					</ul>
					<div class="s-control">
						<label class="s-c-1" for="s-1"></label>
						<label class="s-c-2" for="s-2"></label>
						<label class="s-c-3" for="s-3"></label>
						<label class="s-c-4" for="s-4"></label>
						<label class="s-c-5" for="s-5"></label>
					</div>
					<div class="s-nav">
						<label class="s-nav-1 right" for="s-2"></label>
						<label class="s-nav-2 left" for="s-1"></label>
						<label class="s-nav-2 right" for="s-3"></label>
						<label class="s-nav-3 left" for="s-2"></label>
						<label class="s-nav-3 right" for="s-4"></label>
						<label class="s-nav-4 left" for="s-3"></label>
						<label class="s-nav-4 right" for="s-5"></label>
						<label class="s-nav-5 left" for="s-4"></label>
					</div>
				</div>
			</div>
		</section>
		<section id="cta" class="main special">
			<h2>/////////////////</h2>
			<p>////////////////////</p>
			<ul class="actions">
				<li><a href="#" class="button big">/////////////////</a></li>
			</ul>
		</section>
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
	<?php } ?>
</body>

</html>
<?php include 'assets/includeFiles/navbar.php'?>
<?php include 'assets/includeFiles/footer.php'?>