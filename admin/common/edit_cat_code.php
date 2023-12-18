<?php
include 'secure.php';
$id = $_POST['id'];
$cat = $_POST['cat_name'];
$query = "UPDATE `category` SET `cat_name`='$cat' WHERE id = $id";
if (mysqli_query($conn, $query)) {
    echo 1;
} else {
    echo 0;
}
