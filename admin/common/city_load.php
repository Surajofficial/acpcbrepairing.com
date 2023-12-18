<?php
include 'secure.php';
// $page = $_POST['sno'];
// $limit = 20;
// if ($page == 0) {
//     $page = "c.id >= '$page'";
// } else {
//     $page = $_POST['sno'];
//     $page = "c.id > '$page'";
// }
if (isset($_POST['state']) && $_POST['state'] != "all") {
    $state = $_POST['state'];
    $query2 = "SELECT s.id as id,s.state as state,c.id as city_id,c.city as city, c.state_id as state_id FROM state as s inner join city as c on s.id = c.state_id where s.id = '$state'  order by c.state_id";
    $query = "SELECT s.id as id,s.state as state,c.id as city_id,c.city as city, c.state_id as state_id FROM state as s inner join city as c on s.id = c.state_id where s.id = '$state'  order by c.state_id";
    // $query = "SELECT s.id as id,s.state as state,c.id as city_id,c.city as city, c.state_id as state_id FROM state as s inner join city as c on s.id = c.state_id where s.id = '$state' && $page order by state limit $limit";
} else {
    $query2 = "SELECT  s.id as id,s.state as state,c.id as city_id,c.city as city, c.state_id as state_id FROM state as s inner join city as c on s.id = c.state_id order by c.state_id";
    $query = "SELECT  s.id as id,s.state as state,c.id as city_id,c.city as city, c.state_id as state_id FROM state as s inner join city as c on s.id = c.state_id order by c.state_id";
    // $query = "SELECT  s.id as id,s.state as state,c.id as city_id,c.city as city, c.state_id as state_id FROM state as s inner join city as c on s.id = c.state_id where  $page order by state limit $limit";
}
$id = 0;
// echo $query;
// return "hello";
$result2 = mysqli_query($conn, $query2);
$total = mysqli_num_rows($result2);
$result = mysqli_query($conn, $query);
$data = '';
if ($total > 0) {
    $i = 0;
    $sno = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $i = $i + 1;
        $sno = $row['city_id'];
        $data .= '
        <tr id="data_' . $row['city_id'] . '">
            <td>' . $i . '</td>
            <td>' . $row['state'] . '</td>
            <td>' . $row['city'] . '</td>
            <td>
             <a class="btn btn-green btn-sm" href="edit_city.php?id=' . $row['city_id'] . '">Edit</a> 
             <a class="delete btn btn-danger btn-sm" data-id="' . $row['city_id'] . '">Delete</a> 
            </td>
        </tr>
        ';
    }
    $data2 = [
        'sno' => $sno,
        'data' => $data,
        'total' => $total
    ];
    echo json_encode($data2);
    // exit();
}
