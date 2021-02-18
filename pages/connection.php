<?php 
$con = mysqli_connect('localhost', 'frida_root', ')qoyn++@N0g$', 'frida_gamehubdb');
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $role = mysqli_real_escape_string($con,$_POST['role']);
    if($role == 1){
        $mainrole = "user";
    }
    else if($role == 2){
        $mainrole = "admin";
    }
        $sql = "INSERT INTO users (username,email,password,role) VALUES ('$username','$email','$password','$mainrole')";
        mysqli_query($con,$sql);
        session_destroy();
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        header('location: index.php');
} 

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $query="SELECT * FROM users WHERE email='$email' AND password = '$password'";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        header("location: index.php");
        } else {
        print("no user exists");
        }
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

?>