<?php 
include("connection.php")
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>GameHub Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="/Web-Gaming-News/images/titlelogo.png" type="image/x-icon">
</head>

<body>
    <?php  ?>
<div class="container">
  <div class="left">
    <div class="header">
      <h2 class="animation a1">Welcome</h2>
      <h4 class="animation a2">Sign Up to Experience the latest gaming news</h4>
    </div>
    <form method="post" action="register.php" id="registerform">
    <div class="form">
      <input type="text" class="form-field animation a3" placeholder="Username" name="username">
      <input type="text" class="form-field animation a3" placeholder="Full Name" name="full_name">
      <input type="email" class="form-field animation a3" placeholder="Email Address" name="email">
      <input type="password" class="form-field animation a4" placeholder="Password" name="password">
      <div class="animation a4" style="margin-top:2%;">
        <input id="r1" type="radio" name="role"  value="1">
        <label for="r1">User</label>
        <input id="r2" type="radio" name="role" value="2" checked>
        <label for="r2">Admin</label>
      </div>
      <p class="animation a5"><a href="#">Forgot Password</a></p>
      <p class="animation a5" style="margin: 0"><a href="login.php">Log In</a></p>
      <button class="animation a6" type="submit" name="register">Sign Up</button>
    </div>
    </form>
  </div>
  <div class="right"></div>
</div>

</body>
<script src="/Web-Gaming-News/assets/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
<script>
    $("#registerform").validate({
        rules: {
            username: {
                required: true,
                minlength: 5
            },
            password:{
                required:true,
                minlength:5
            },
            email:{
                required:true,
                email:true,
            },
            full_name:{
              required:true,
              minlength:2
            }
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
@supports (-webkit-appearance: none) or (-moz-appearance: none) {
input[type=radio] {
    --active: #275EFE;
    --active-inner: #fff;
    --focus: 2px rgba(39, 94, 254, .3);
    --border: #BBC1E1;
    --border-hover: #275EFE;
    --background: #fff;
    --disabled: #F6F8FF;
    --disabled-inner: #E1E6F9;
    -webkit-appearance: none;
    -moz-appearance: none;
    height: 21px;
    outline: none;
    display: inline-block;
    vertical-align: top;
    position: relative;
    margin: 0;
    cursor: pointer;
    border: 1px solid var(--bc, var(--border));
    background: var(--b, var(--background));
    transition: background 0.3s, border-color 0.3s, box-shadow 0.2s;
  }
input[type=radio]:after {
    content: "";
    display: block;
    left: 0;
    top: 0;
    position: absolute;
    transition: transform var(--d-t, 0.3s) var(--d-t-e, ease), opacity var(--d-o, 0.2s);
  }
input[type=radio]:checked {
    --b: var(--active);
    --bc: var(--active);
    --d-o: .3s;
    --d-t: .6s;
    --d-t-e: cubic-bezier(.2, .85, .32, 1.2);
  }
input[type=radio]:disabled {
    --b: var(--disabled);
    cursor: not-allowed;
    opacity: 0.9;
  }
input[type=radio]:disabled:checked {
    --b: var(--disabled-inner);
    --bc: var(--border);
  }
input[type=radio]:disabled + label {
    cursor: not-allowed;
  }
input[type=radio]:hover:not(:checked):not(:disabled) {
    --bc: var(--border-hover);
  }
input[type=radio]:focus {
    box-shadow: 0 0 0 var(--focus);
  }
input[type=radio]:not(.switch) {
    width: 21px;
  }
input[type=radio]:not(.switch):after {
    opacity: var(--o, 0);
  }
input[type=radio]:not(.switch):checked {
    --o: 1;
  }
input[type=radio] + label {
    font-size: 14px;
    line-height: 21px;
    display: inline-block;
    vertical-align: top;
    cursor: pointer;
    margin-left: 4px;
  }

  input[type=radio] {
    border-radius: 50%;
  }
  input[type=radio]:after {
    width: 19px;
    height: 19px;
    border-radius: 50%;
    background: var(--active-inner);
    opacity: 0;
    transform: scale(var(--s, 0.7));
  }
  input[type=radio]:checked {
    --s: .5;
  }
}
ul {
  margin: 12px;
  padding: 0;
  list-style: none;
  width: 100%;
  max-width: 320px;
}
ul li {
  margin: 16px 0;
  position: relative;
}
</style>
</html> 