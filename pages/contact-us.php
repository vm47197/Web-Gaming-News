<?php  
include('connection.php'); 
if(!isset($_SESSION['username']))
{
	header("location: login.php");
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
    <title>Contact Us</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="/Web-Gaming-News/assets/css/contact.css" />
    <link rel="stylesheet" href="/Web-Gaming-News/assets/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="/Web-Gaming-News/images/titlelogo.png" type="image/x-icon">
</head>
<body>
    <div id="wrapper">
            <article id="contact">
                <h2 class="major">Contact</h2>
                <form method="post" action="#">
                    <div class="fields">
                        <div class="field half">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" />
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" />
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="4"></textarea>
                        </div>
                    </div>
                    <ul class="actions">
                        <li><input type="submit" value="Send Message" class="primary" /></li>
                        <li><input type="reset" value="Reset" /></li>
                    </ul>
                </form>
                <ul class="icons">
                    <li><a class="fa fa-facebook-f"><span class="label"></span></a></li>
                    <li><a class="fa fa-instagram"><span class="label"></span></a></li>
                    <li><a class="fa fa-twitter"><span class="label"></span></a></li>
                    <li><a class="fa fa-github"><span class="label"></span></a></li>
                </ul>
            </article>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4149.492748747235!2d21.165427514788096!3d42.65850592773608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2s!4v1612946270262!5m2!1sen!2s" 
                width="970" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" id="map-Iframe"></iframe>
            </div>
    </div>
</body>
<!-- <script src="../assets/js/snow.js"></script> -->
</html>
<?php include '../assets/includeFiles/navbar.php'?>