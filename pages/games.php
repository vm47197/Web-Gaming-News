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
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../assets/css/style.css" />
		<link rel="shortcut icon" href="../images/titlelogo.png" type="image/x-icon">
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="inner">
					<h1>Check Out the new Games made from our Devs</h1>
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
			<div id="wrapper" style="width: 90em;">
				<section class="main items">
					<article class="item first-items" >
						<header style="border:none">
							<a href="#"><img src="../images/Shooter.jpg" alt="" /></a>
						</header>
						<ul class="actions">
							<p style="margin-bottom:4%"><b>Shooter</b>: Shoot to kill foreign objects that are trying to destroy you</p>
							<li><a class="button" href="">Play</a></li>
						</ul>
					</article>
					<article class="item first-items">
						<header style="border:none">
							<a href="#"><img src="../images/Snake.PNG" alt="" /></a>
						</header>
						<ul class="actions">
							<p style="margin-bottom:4%"><b>Snake</b>: Based on the old Snake game.</p>
							<li><a class="button" href="">Play</a></li>
						</ul>
					</article>
					<article class="item first-items">
						<header style="border:none">
							<a href="#"><img src="../images/PingPong.png" alt="" /></a>
						</header>
						<ul class="actions">
							<p style="margin-bottom:4%"><b>Ping Pong</b></p>
							<li><a class="button" href="">Play</a></li>
						</ul>
					</article>
					<article class="item first-items">
						<header style="border:none">
							<a href="#"><img src="../images/tictactoe.PNG" alt="" /></a>
						</header>
						<ul class="actions">
							<p style="margin-bottom:4%"><b>Tic Tac Toe</b></p>
							<li><a class="button" href="">Play</a></li>
						</ul>
					</article>
				</section>
			</div>
		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
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
<style>
	#header {
		background-image: url(../images/games.png) !important;
	}

	#header.alt {
		height: 52em;
		min-height: 75vh;
	}

	#header.alt h1 {
		border-bottom: none;
	}


</style>

</html>
<?php include '../assets/includeFiles/footer.php'?>
<?php include '../assets/includeFiles/navbar.php'?>