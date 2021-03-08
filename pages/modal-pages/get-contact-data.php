<?php
include "../connection.php";

$id = mysqli_real_escape_string($con,$_GET['id']);

$query="SELECT * FROM contact_request WHERE id=$id";
$result = mysqli_query($con,$query);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $data['id'] = $row['id'];
    $data['checked'] = $row['checked'];
    $data['message'] = $row['message'];
    echo json_encode($data);
}
