<?php
if (isset($_COOKIE["utk"]) > 0) {
    setcookie("utk", '', time() - (3600 * 24));
    echo "<script> window.location='login.php'; </script>";
}
