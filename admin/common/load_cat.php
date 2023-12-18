
<?php
include 'secure.php';
$query = "SELECT * from category  ORDER BY `id` DESC";

$result = mysqli_query($conn, $query);

$id = 1;
if (mysqli_num_rows($result) > 0) {


    while ($row = mysqli_fetch_assoc($result)) {

        echo ' <tr>
<td data-id="' . $row['id'] . '">' . $id . '</td>
<td>
' . $row['cat_name'] . '
</td>
<td>
' . $row['id'] . '
</td>
<td>
<a href="javascript:void(0)" id="delet"  data-id ="' . $row['id'] . '" class="btn btn-danger btn-sm">Delete</a>

</td>
</tr>
';
        $id = $id + 1;
    }
} else {
    echo 0;
}

?>