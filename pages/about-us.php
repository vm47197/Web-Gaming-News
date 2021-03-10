<?php  
include('connection.php'); 
if(empty($_SESSION['username']))
{
	header("location: login.php");
}
else{
	if($_SESSION['role'] == "User"){
	}
	else if($_SESSION['role'] == "Admin"){
		header("location: admin-dashboard.php");
	}
}
?>
<!DOCTYPE HTML>
<!--
	Epilogue by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>

<head>
	<title>GameHub | About Us</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="/Web-Gaming-News/assets/css/style.css" />
	<link rel="shortcut icon" href="/Web-Gaming-News/images/titlelogo.png" type="image/x-icon">
</head>

<body>

	<!-- Header -->
	<header id="header" class="alt">
		<div class="inner">
			<h1>Check out our team of yound professionals</h1>
		</div>
	</header>
		
	<!-- Wrapper -->
	<?php 
		$conn = mysqli_connect('localhost', 'frida_root', ')qoyn++@N0g$', 'frida_gamehubdb');
		$website = $conn->query("SELECT * FROM website_data"); 
	?>
	<div id="wrapper" style="width: 90em ;padding: 0em 0em 2em 0em">
		<header id="header" class="alt scnd-header"
			style="background-color: #0F0F0F !important;background-image:none !important">
			<?php  foreach($website as $item):?>

			<h1><?php echo $item['name']?></h1>
			<p><?php echo $item['content']?></p>
			<?php endforeach;?>
		</header>
		<hr>
		<section class="main items">
		<?php 
			$members = $conn->query("SELECT * FROM web_members"); 
		?>
		<?php  foreach($members as $item):?>
			<article class="item first-items">
				<header>
					<a href="#"><img src="/Web-Gaming-News/images/AboutUs/<?php echo $item['img'];?>" alt="" /></a>
					<h3><?php echo $item['name'];?></h3>
				</header>
				<ul class="actions">
					<p style="margin-bottom:4%"><b><?php echo $item['company_role'];?>: <?php echo $item['name'];?> </b>
					<?php echo $item['about_content'];?>
				</ul>
			</article>
		<?php endforeach;?>
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
	<script src="../assets/js/snow.js"></script>
</body>

</html>
<style>
	#header {
		background-image: url(../images/team.png) !important;
	}

	.scnd-header:before {
		background-color: transparent !important;
	}

	#header.alt {
		height: 10%;
	}

	#header.alt h1 {
		border-bottom: none;
	}

	.second-header.alt {
		height: 10em !important;
		min-height: 10vh !important;
	}

	#hr1 {
		width: 100%;
		margin-right: auto;
		margin-left: auto;
	}
</style>

</html>
<?php include '../assets/includeFiles/footer.php'?>
<?php include '../assets/includeFiles/navbar.php'?>