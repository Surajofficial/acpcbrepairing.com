<?php
include 'secure.php';
$query = "SELECT * FROM blog where status='hide' order by sno desc ";
$id = 0;
$result = mysqli_query($conn, $query);
$total = mysqli_num_rows($result);
if ($total > 0) {
    $data = "
     <tr> 
     <th>sno</th>
     <th>Link</th>
     <th>Title</th>
     <th>Keyword</th>
     <th>Description</th>
    </tr>
    ";

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $id + 1;
        if ($row['status'] == "hide") {
            $status = '<a  data-status ="live" data-url ="' . $row['url'] . '"  class="status btn btn-warning text-white btn-sm">Live</a>';
        } else {
            $status = '<a  data-status ="hide" data-url ="' . $row['url'] . '"  class="status btn btn-danger text-white btn-sm">Hide</a>';
        }
        $data = $data . '
        <tr>
            <td>' . $id . '</td>
            <td>' . $row['title'] . '</td>
            <td>https://www.multitechinstitute.in/blog/' . $row['url'] . '</td>
             <td>' . $row['key'] . '</td>
             <td>' . $row['dec'] . '</td>
             <td>
                                     <a href="##" data-id ="blog' . $id . '" data-url="' . $row['url'] . '" class="delete btn btn-danger btn-sm">Delete</a>
        <a href="../blog/' . $row['url'] . '" target="_blank"  class="btn btn-blue btn-sm">View</a>
        <a href="edit_blog.php?url=' . "'" . $row['url'] . "'" . '" id="add" class="btn btn-green btn-sm">Edit</a>
        ' . $status . '
             </td>
            </tr>
';
    }
}

echo $data;
