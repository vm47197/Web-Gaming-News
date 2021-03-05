<?php include "connection.php"?>
<!DOCTYPE html>
<html>

<head>
<link rel="shortcut icon" href="/Web-Gaming-News/images/titlelogo.png" type="image/x-icon">

</head>

<body>
    <div class="container">
        <div class="form">
            <form method="post" action="change-password.php">
                <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
                <input type="hidden" name="role" value="<?php echo $_SESSION['role'];?>">
                <div class="input-field">
                    <label for="email">Email</label>
                    <input type="email" id="email" value="<?php echo $_SESSION['email']; ?>" name="email">
                </div>
                <div class="input-field">
                    <label for="password">Current Password</label>
                    <input type="password" id="password" name="lastPass">
                </div>
                <div class="input-field">
                    <label for="password">New Password</label>
                    <input type="password" id="password" name="newPass">
                </div>
                <?php if(isset($_SESSION['pass_error'])):?>
                  <?php if($_SESSION['pass_error'] == "Password Successfully Changed"):?>
                    <p style="color:green"><?php echo $_SESSION['pass_error']; ?></p>
                  <?php endif;?>
                  <?php if($_SESSION['pass_error'] == "Last Password does not match the records!!"):?>
                    <p style="color:red"><?php echo $_SESSION['pass_error']; ?></p>
                  <?php endif;?>
                <?php endif;?>
                <div class="action">
                <button type="submit" name="change_pass" value="<?php echo $_SESSION["id"]; ?>" class="btn">Modify</button>
                </div>
            </form>
        </div>
    </div>
</body>

<script></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap');

*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family: 'Nunito', sans-serif;
  font-size:100%;
}
body{
  min-height:100vh;
  display:flex;
  justify-content:center;
  align-items:center;
  background:hsl(210, 38%, 95%);
}

.form{
  background:#fff;
  padding:30px 34px;
  margin:24px 0 0;
  min-width:400px;
  min-height:273px;
  border-radius:5px;
  line-height: 24px;
  box-shadow:3px 1px 8px rgba(255,255,255,.5),3px 2px 8px rgba(0,0,0,.1)
}
.input-field{
  display:flex;
  flex-direction:column;
  gap:5px;
  width:100%;
  margin-bottom:15px;
}
.error{
  border: 1px solid red;
}
input[type="email"],input[type="password"]{
  padding:15px;
  border-radius:5px;
  border:1px solid transparent;
  background:hsl(210, 38%, 95%);
  line-height: 24px;
  outline:none;
}
input[type="email"]:focus,input[type="password"]:focus{
  border-bottom:1px solid orange;
/*   border-radius:5px; */
}
input[type="checkbox"]{
  margin-right:10px;
}

.action {
  align-items:center;
  border-color: hsl(214, 32%, 91%);
  color: hsl(220, 26%, 14%);
  display:flex;
  gap: normal;
  justify-content: flex-end;
  line-height: 24px;
  margin: 16px 0px 0px;
}
.action a{
  border-color:hsl(214, 32%, 91%);
  color:hsl(220, 26%, 14%);
  font-family:Nunito;
  font-size:14px;
  gap:normal;
  line-height:21px;
  text-transform:capitalize;
}

.btn{
  padding:10px 20px;
  align-items: flex-start;
  background-color: hsl(218, 17%, 35%);
  border-color: hsla(0, 0%, 0%, 0);
  border-color: hsla(0, 0%, 0%, 0);
  border-radius: 4px;
  border-style: solid;
  border-width: 1px;
  box-shadow: hsla(0, 0%, 0%, 0.1) 0px 4px 6px -1px;
  font-size:14px;
  font-weight:600;
  gap: normal;
  letter-spacing: 1.4px;
  line-height: 21px;
  margin: 0px 0px 0px 16px;
  padding: 8px 16px;
  text-align: center;
  text-transform: uppercase;
  color:hsl(0, 0%, 100%);
  font-family:Nunito;
  cursor:pointer;
  transition:.2s ease-in-out;
}
.btn:hover{
  background:hsl(218, 17%, 24%);
}
a{
  text-decoration:none;
}
</style>

</html>