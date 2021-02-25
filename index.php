<?php  
include('pages/connection.php'); 

if(!isset($_SESSION['username']))
{
	header("location: pages/login.php");
}
else{
	if($_SESSION['role'] == "User"){
		$conn = mysqli_connect('localhost', 'frida_root', ')qoyn++@N0g$', 'frida_gamehubdb');
		$posts = $conn-> query("SELECT * FROM posts WHERE active = 1");
	}
	else if($_SESSION['role'] == "Admin"){
	header("location:pages/admin-dashboard.php");
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
	<link rel="stylesheet" href="/Web-Gaming-News/assets/css/main.css" />
	<link rel="stylesheet" href="/Web-Gaming-News/assets/css/style.css" />
	<link rel="shortcut icon" href="/Web-Gaming-News/images/titlelogo.png" type="image/x-icon">
</head>
<body>
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
		<?php foreach($posts as $item): ?>
			<article class="item first-items" >
				<header style="border:none">
					<a href="#"><img src="/Web-Gaming-News/images/<?php echo $item['image'];?>"/> </a>
				</header>
				<ul class="actions">
					<p style="margin-bottom:4%"><?php echo $item['title'];?></p>
					<li><a class="button" onclick="CheckScroll('#<?php echo $item['id']?>')">Read More</a></li>
				</ul>
			</article>
			<?php endforeach ?>
		</section>
		<hr>
		<section class="main items">
		<?php foreach($posts as $item): ?>
			<article class="item" id="<?php echo $item['id']?>">
				<header>
					<a href="#"><img src="/Web-Gaming-News/images/<?php echo $item['image'];?>" alt="" /></a>
					<h1><h1>
				</header>
				<p>
					<?php echo $item['content']; ?>
				</p>
			</article>
			<?php endforeach ?>
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
	<script src="/Web-Gaming-News/assets/js/jquery.min.js"></script>
	<script src="/Web-Gaming-News/assets/js/skel.min.js"></script>
	<script src="/Web-Gaming-News/assets/js/util.js"></script>
	<script src="/Web-Gaming-News/assets/js/main.js"></script>
	
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
</body>

</html>
<?php include 'assets/includeFiles/navbar.php'?>
<?php include 'assets/includeFiles/footer.php'?>