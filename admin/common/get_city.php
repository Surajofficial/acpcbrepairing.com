<?php
include './secure.php';
$state_id = $_POST['state'];
$query = "SELECT s.id as id,s.state as state,c.id as city_id,c.city as city, c.state_id as state_id FROM state as s inner join city as c on s.id = c.state_id where s.state = '$state_id'  order by c.state_id";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data .= '<option value="' . $row['city_id'] . '">' . $row['city'] . '</option>';
    }
    echo $data;
} else {
    echo 1;
}
