<?php
include "connection.php";

$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['password']);

if ($email != "" && $password != ""){
    $query="SELECT * FROM users WHERE email='$email' AND password = '$password'";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];
        $_SESSION['full_name'] = $row['full_name'];
        $_SESSION['admin-active'] = $row['active'];
        $_SESSION['email'] = $row['email'];
        if($_SESSION['role'] == "Admin"){
            header('Location: admin-dashboard.php');
        }else if($_SESSION['role'] == "User"){
            header('Location: ../index.php');
        }
    }
    else{
        echo 0;
    }
}