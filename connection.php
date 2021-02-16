<?php 
$con = mysqli_connect('localhost', 'root', '', 'login_db');
session_start();

if(isset($_POST['register'])){
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
            $sql = "INSERT INTO users (username,email,password)
                                VALUES ('$username','$email','$password')";
            mysqli_query($con,$sql);
            session_destroy();
            header('location: ../index.php');
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
            header("location: ../index.php");
         } else {
            print("no user exists");
         }
        // if(isset($result)){
        //     $_SESSION['username'];
        //     print($_SESSION['username']);

        //     $_SESSION['success'] == "LoggedIn";
        //     header("location: ../index.php");
        // }
        // else{
        //     $_SESSION['error'] = "user does not exist";
        // }
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: pages/login.php');
    }

?>