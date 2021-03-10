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
    <link rel="stylesheet" href="/Web-Gaming-News/assets/css/loading.css" />
    <link rel="shortcut icon" href="/Web-Gaming-News/images/titlelogo.png" type="image/x-icon">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="/Web-Gaming-News/assets/js/skel.min.js"></script>
    <script src="/Web-Gaming-News/assets/js/util.js"></script>
    <script src="/Web-Gaming-News/assets/js/main.js"></script>
    <script src="/Web-Gaming-News/assets/js/snow.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <?php if(isset($_SESSION["pass_error"])): ?>
    <script type="text/javascript">
    toastr.success("<?php echo $_SESSION["pass_error"];?>");
    </script>
    <?php endif; unset($_SESSION["pass_error"]);?>
    <script>
    $(document).ready(function() {
        $("#loader-wrapper").fadeOut(800);
        $(".next").trigger('click');
    });

    function CheckScroll(data) {
        var position = $(data).position();
        var top = position.top;
        var left = position.left;
        $("html").animate({
            scrollTop: top
        }, 800)
    }
    </script>
    <style>
    li {
        list-style: none
    }
    </style>
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
            <article class="item first-items">
                <header style="border:none">
                    <a href="#"><img src="/Web-Gaming-News/images/<?php echo $item['image'];?>" /> </a>
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
                    <h1><?php echo $item['title']; ?><h1>
                </header>
                <p style="word-break:break-word">
                    <?php echo $item['content']; ?>
                </p>
            </article>
            <?php endforeach ?>
        </section>
        <hr>
        <section>
            <?php 
                $slider_img = $conn->query("SELECT * FROM slider_doc");
            ?>
            <div class="slideshow-container">
                <?php foreach($slider_img as $item): ?>
                <div class="mySlides fade">
                    <img class="img" src="images/SliderImg/<?php echo $item['path_name']; ?>" style="width:100%">
                    <div class="text" style="backdrop-filter: blur(10px);"><h3><?php echo $item['content'];?></h3></div>
                </div>
                <?php endforeach;?>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </section>
    </div>
    <!--#region Preloader-->
    <div id="loader-wrapper" style="display: block;">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!--#endregion-->
</body>
<script>

</script>

</html>
<?php include 'assets/includeFiles/navbar.php'?>
<?php include 'assets/includeFiles/footer.php'?>