<?php
include 'secure.php';
$city = $_POST['city'];
$city_id = $_POST['city_id'];
$state_id = $_POST['state_id'];
$query = "UPDATE `city` SET `city`='$city',`state_id`=$state_id where `id` = '$city_id'";
if (!mysqli_query($conn, $query)) {
    echo 1;
}
