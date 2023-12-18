<?php
include 'conn.php';
$id = $_POST['id'];
$query = "SELECT * FROM `blog` where `cat_id` = $id";
$query2 = "SELECT * FROM `courses` where `cat_id` = $id";
$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query2);
if (!(mysqli_num_rows($result) > 0 || mysqli_num_rows($result2) > 0)) {
    $query2 = "DELETE FROM `category` WHERE id = '$id'";
    $query3 = "DELETE FROM `meta` WHERE cat_id = '$id'";
    $result = mysqli_query($conn, $query2);
    $result = mysqli_query($conn, $query3);
} else {
    echo 0;
}
