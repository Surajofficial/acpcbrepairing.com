<?php
include './secure.php';
$cat = $_POST['cat_name'];
$query = "INSERT INTO category (cat_name) VALUES ('$cat')";
if (mysqli_query($conn, $query)) {
    echo 1;
} else {
    echo "Somthing Went wrong";
}
