<?php
include 'secure.php';
$id = $_POST['id'];
$dec = $_POST['dec'];
$query = "UPDATE `meta` set `dec`='$dec' where `id` = $id";
// echo mysqli_query($conn, $query);
if (!mysqli_query($conn, $query)) {
    echo 0;
    $output = false;
} else {
    echo "Success";
}
