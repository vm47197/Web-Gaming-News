<?php 
include("../connection.php")
?>
<!DOCTYPE HTML>
<html>
<head>
    <!-- <title>GameHub Login</title> -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<?php
if(!empty($_SESSION['error'])){
echo $_SESSION['error'];
}
?>

<body>
<div class="container">
  <div class="left">
    <div class="header">
      <h2 class="animation a1">Welcome</h2>
      <h4 class="animation a2">Log In</h4>
    </div>
    <form method="post" action="login.php" id="loginform">
    <div class="form">
      <input type="text" class="form-field animation a3" placeholder="Email" name="email">
      <input type="password" class="form-field animation a4" placeholder="Password" name="password">
      <p class="animation a5"><a href="#">Forgot Password</a></p>
      <p class="animation a5" style="margin: 0"><a href="register.php">Sign Up</a></p>
      <button class="animation a6"  type="submit" name="login">Log In</button>
    </div>
    </form>
  </div>
  <div class="right"></div>
</div>

</body>
<script src="../assets/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script>
    $("#loginform").validate({
        rules:{
            password:{
                required:true,
                minlength:8
            },
            email:{
                required:true,
                email:true,
            },
        }
    });
</script>
<style>
    @import url("https://fonts.googleapis.com/css?family=Rubik:400,500&display=swap");
    .error{
      color:red !important;
    }
* {
  box-sizing: border-box;
}

body {
  font-family: "Rubik", sans-serif;
}

.container {
  display: flex;
  height: 100vh;
}

.left {
  overflow: hidden;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  -webkit-animation-name: left;
          animation-name: left;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-delay: 1s;
          animation-delay: 1s;
}

.right {
  flex: 1;
  background-color: black;
  transition: 1s;
  background-image: url(https://images.unsplash.com/photo-1550745165-9bc0b252726f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

.header > h2 {
  margin: 0;
  color: #4f46a5;
}

.header > h4 {
  margin-top: 10px;
  font-weight: normal;
  font-size: 15px;
  color: rgba(0, 0, 0, 0.4);
}

.form {
  max-width: 80%;
  display: flex;
  flex-direction: column;
}

.form > p {
  text-align: right;
}

.form > p > a {
  color: #000;
  font-size: 14px;
}

.form-field {
  height: 46px;
  padding: 0 16px;
  border: 2px solid #ddd;
  border-radius: 4px;
  font-family: "Rubik", sans-serif;
  outline: 0;
  transition: 0.2s;
  margin-top: 20px;
}

.form-field:focus {
  border-color: #0f7ef1;
}

.form > button {
  padding: 12px 10px;
  border: 0;
  background: linear-gradient(to right, #de48b5 0%, #0097ff 100%);
  border-radius: 3px;
  margin-top: 10px;
  color: #fff;
  letter-spacing: 1px;
  font-family: "Rubik", sans-serif;
}

.animation {
  -webkit-animation-name: move;
          animation-name: move;
  -webkit-animation-duration: 0.4s;
          animation-duration: 0.4s;
  -webkit-animation-fill-mode: both;
          animation-fill-mode: both;
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
}

.a1 {
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
}

.a2 {
  -webkit-animation-delay: 2.1s;
          animation-delay: 2.1s;
}

.a3 {
  -webkit-animation-delay: 2.2s;
          animation-delay: 2.2s;
}

.a4 {
  -webkit-animation-delay: 2.3s;
          animation-delay: 2.3s;
}

.a5 {
  -webkit-animation-delay: 2.4s;
          animation-delay: 2.4s;
}

.a6 {
  -webkit-animation-delay: 2.5s;
          animation-delay: 2.5s;
}

@-webkit-keyframes move {
  0% {
    opacity: 0;
    visibility: hidden;
    transform: translateY(-40px);
  }
  100% {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }
}

@keyframes move {
  0% {
    opacity: 0;
    visibility: hidden;
    transform: translateY(-40px);
  }
  100% {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }
}
@-webkit-keyframes left {
  0% {
    opacity: 0;
    width: 0;
  }
  100% {
    opacity: 1;
    padding: 20px 40px;
    width: 440px;
  }
}
@keyframes left {
  0% {
    opacity: 0;
    width: 0;
  }
  100% {
    opacity: 1;
    padding: 20px 40px;
    width: 440px;
  }
}
</style>
</html> 