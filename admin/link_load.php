<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/mainurl.php' ?>
<?php
include './common/secure.php';

$query = "SELECT * FROM blog as b INNER JOIN meta as m on b.meta_id = m.id ";
if (isset($_POST['cat']) && $_POST['cat'] != "all" && isset($_POST['state']) && $_POST['state'] != "all") {
    $cat = $_POST['cat'];
    $state = $_POST['state'];
    $query .= "where b.cat_id = '$cat' && b.state_id = '$state' ";
} else if (isset($_POST['cat']) && $_POST['cat'] != "all") {
    $cat = $_POST['cat'];
    $state = $_POST['state'];
    $query .=  " where b.cat_id = '$cat' ";
} else if (isset($_POST['state']) && $_POST['state'] != "all") {
    $cat = $_POST['cat'];
    $state = $_POST['state'];
    $query .= " where b.state_id = '$state'";
}
$query .= " order by b.id desc";

// echo $query;
$result = mysqli_query($conn, $query);
// $total = ;
// echo $total;
// print_r(mysqli_fetch_assoc($result));
// exit();
if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $i = 0;
        echo '<table id="customers">
        <tr>
        <th>sno</th>
        <th>Title</th>
        <th>Link</th>
        <th>Description</th>
        </tr>
        
        ';
        while ($row = mysqli_fetch_assoc($result)) {
            $i = $i + 1;
            echo " <tr>
    <td>" . $i . "</td>
    <td>" . ucfirst(str_replace('-', ' ', $row['url'])) . "</td>
    <td>" . URL . $row['url'] . "</td>
     <td>" . $row['dec'] . "</td>
    </tr>";
        };
    };
}
