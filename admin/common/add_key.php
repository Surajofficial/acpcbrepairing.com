<?php
include 'secure.php';
$cat_name = $_POST['cat_name'];
$dec = $_POST['dec'];
$query = "INSERT INTO `category` (`cat_name`) VALUE('$cat_name')";
$output = true;
if (!mysqli_query($conn, $query)) {
    echo 0;
    $output = false;
    exit();
}
$query = "SELECT * FROM `category` WHERE `cat_name` = '$cat_name'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
if (!mysqli_num_rows($result) > 0) {
    echo 0;
    $output = false;
    exit();
}
$cat_id = $row['id'];
$query = "INSERT INTO `meta` (`dec`,`cat_id`) 
VALUES('$dec',$cat_id)";
if (!mysqli_query($conn, $query)) {
    echo $query;
    $output = false;
    exit();
}
if ($output) {
    echo "Success";
}
