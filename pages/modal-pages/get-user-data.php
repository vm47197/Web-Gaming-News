<?php
include "../connection.php";

$id = mysqli_real_escape_string($con,$_GET['id']);

$query="SELECT * FROM users WHERE id=$id";
$result = mysqli_query($con,$query);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $data['id'] = $row['id'];
    $data['full_name'] = $row['full_name'];
    $data['username'] = $row['username'];
    $data['password'] = $row['password'];
    $data['email'] = $row['email'];
    $data['role'] = $row['role'];
    $_SESSION['user-edit-id'] = $data['id'];
    echo json_encode($data);
}


