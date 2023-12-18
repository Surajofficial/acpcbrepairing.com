<?php
include 'conn.php';
if (isset($_COOKIE["utk"]) > 0) {
    $utk = $_COOKIE["utk"];
    $query = "SELECT * FROM `user` WHERE utk = '$utk'";
    $query2 = "SELECT * FROM `blog`";
    $query3 = "SELECT * FROM `category`";
    $result = $conn->query($query);
    $result2 = $conn->query($query2);
    $result3 = $conn->query($query3);
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0) {
        $u_tk = $row['utk'];
        $u_id = $row['id'];
        $u_name = $row['name'];
        $u_mail = $row['email'];
        $u_pass = $row['pass'];
        $total_blog = $result2->num_rows;
        $total_cat = $result3->num_rows;
    }
} else {
    echo "<script> window.location='login.php'; </script>";
}
