<?php
include './secure.php';
$id = $_POST['id'];
$query = "delete from city where `id` = '$id'";
if (mysqli_query($conn, $query)) {
    echo 1;
} else {
    echo $query;
}
