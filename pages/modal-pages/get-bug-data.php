<?php
include "../connection.php";

$id = mysqli_real_escape_string($con,$_GET['id']);

$query="SELECT * FROM bug_type";
$result = mysqli_query($con,$query);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $data['id'] = $row['type_id'];
    $data['title'] = $row['description'];
    echo json_encode($data);
}


