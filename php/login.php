<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../styles/login.css" />
  <title>Sign in & Sign up Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="#" class="sign-in-form" id="signup">
          <h2 class="title">Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name" name="Name" autocomplete="off"/>
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Surname" name="Surname" autocomplete="off"/>
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email" name="Email" autocomplete="off"/>
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="password" placeholder="Password" name="Password" autocomplete="off"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="Confirm_Password" autocomplete="off"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="text" placeholder="Phone Number" name="Phone_Number" autocomplete="off"/>
          </div>
          <input type="submit" value="Login" class="btn solid" />
        </form>

        <form action="#" class="sign-up-form" id="signup" autocomplete="off">
          <h2 class="title">Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="signupusername" autocomplete="off"/>
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="signupemail" autocomplete="off"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="signuppass" autocomplete="off" />
          </div>
          <input type="submit" class="btn" value="Sign up" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>
            <hr>
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="../Images/Login/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            <hr>
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="../Images/Login/log.svg" class="image" alt="" />
      </div>
    </div>
  </div>
<!--#region Preloader-->
<link rel="stylesheet" href="../styles/loading.css" />
<div id="loader-wrapper" style="display: block;">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!--#endregion-->
  <script src="../scripts/login.js"></script>
  <script src="../scripts/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
  <script>
    $(document).ready(function () {
        $(".item-4side").hide();
        $("#loader-wrapper").fadeOut(900);
    });
    var $register = $(".sign-up-form");
    var $login = $(".sign-up-form");
    if ($register.length) {
      $(".sign-up-form").validate({
        rules: {
          signupusername: {
            required: true
          },
          signupemail: {
            required: true,
            email: true
          },
          signuppass: {
            required: true
          }
        },
        messages: {
          signupusername: {
            required: "Field is Required"
          },
          signupemail: {
            required: "Field is Required"
          },
          signuppass: {
            required: "Field is Required"
          }
        }
      })
    }
    if ($login.length) {
      $(".sign-in-form").validate({
        rules: {
          signinusername: {
            required: true
          },
          signinpass: {
            required: true,
          }
        },
        messages: {
          signinusername: {
            required: "Field is Required"
          },
          signinpass: {
            required: "Field is Required"
          }
        }
      })
    }
  </script>
</body>
<link rel="stylesheet" href="../styles/navbar-style.css">
<!--Next Stage-->
<!-- <div class="loading" style="opacity:0.95;background-size:150px 150px">
    <h3 style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, 300%);">
        The Request is being Processed!
    </h3>
</div> -->
<div style="position: absolute;left: 1%;top: 0 ;z-index: 100;">
    <a href="../index.html" class="logo"><img src="../Images/MainLogo.png" id="MainLogo" width="200" height="100" ></a>
</div>
<div class="button_container" id="toggle">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
</div>
<div class="overlay" id="overlay">
    <nav class="overlay-menu">
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../pages/about.html">About</a></li>
            <li><a href="../pages/games.html">Try our Newest Games</a></li>
            <li><a href="../pages/contact.html">Contact</a></li>
            <li><a href="../pages/login.html" class="fa fa-user">Login</a></li>
        </ul>
    </nav>
</div>

</html>
<script>
  $('#toggle').click(function () {
     $(this).toggleClass('active');
     $('#overlay').toggleClass('open');
     if ($(this).hasClass('active')) {
         //$("#overlay").css("backdrop-filter","blur(5px)",2000);
         $("#overlay").css("backdrop-filter", "blur(5px)");
     }
     else {
         //$("#overlay").css("backdrop-filter","blur(0px)",2000);
         $("#overlay").css("backdrop-filter", "blur(0px)");
     }
 });
</script>


<?php
$servername="localhost";
$username="root";
$password="";
$database_name="web_gaming_db";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['save'])){

    $Name = $_POST['Name']; 
    $Surname = $_POST['Surname']; 
    $Email = $_POST['Email']; 
    $Password = $_POST['Password']; 
    $Confirm_Password = $_POST['Confirm_Password']; 
    $Phone_Number = $_POST['Phone_Number']; 

    $sql_query = "INSERT INTO register_details (Name,Surname,Email,Password,Confirm_Password,Phone_Number)
    VALUES ('$Name','$Surname','$Email','$Password','$Confirm_Password','Phone_Number')";

    if(mysqli_query($conn,$sql_query)){
        echo "New register added succesfuly!";
    }
    else{
        echo "Error:".$sql."".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>