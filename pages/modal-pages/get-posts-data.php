<?php
include "../connection.php";

$id = mysqli_real_escape_string($con,$_GET['id']);

$query="SELECT * FROM posts WHERE id=$id";
$result = mysqli_query($con,$query);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $data['id'] = $row['id'];
    $data['title'] = $row['title'];
    $data['author'] = $row['author'];
    $data['content'] = $row['content'];
    $data['created_by'] = $row['created_by'];
    $_SESSION["post_edit_created_by"] = $data['created_by'];
    echo json_encode($data);
}


