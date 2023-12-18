<?php
include './secure.php';
$cat_name = trim($_POST['cat_name']);
$query = "SELECT * FROM category WHERE cat_name = '$cat_name'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    echo 0;
} else {
    echo '1';
}
