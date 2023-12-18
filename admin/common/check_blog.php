<?php
$query = "SELECT * FROM blog";
$result = mysqli_query($conn, $query);
if (!mysqli_num_rows($result) > 0) {
    echo "<p class='text-center mt-5 pt-5 text-danger' style='font-size:15px'>Please Create Blog First <a class='text-green' href='./add_blog.php'>Click Here</a></p>";
    exit();
}
