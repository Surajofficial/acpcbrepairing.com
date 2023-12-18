<!doctype html>
<html lang="en" dir="ltr">

<?php include 'head.php';
include './secure.php';
?>

<title>All Link</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include 'header1.php';
            ?>
            <style>
                #customers {
                    font-family: Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                }

                #customers td,
                #customers th {
                    border: 1px solid #ddd;
                    padding: 8px;
                }

                #customers tr:nth-child(even) {
                    background-color: #f2f2f2;
                }

                #customers tr:hover {
                    background-color: #ddd;
                }

                #customers th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #04AA6D;
                    color: white;
                }
            </style>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            All Link
                        </h1>

                        <div class="page-options d-flex">
                            <a href="download.php" id="add" class="btn btn-green btn-sm">Download</a>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-2">
                            <div class="col-md-12 mb-3">
                                <label for="catagry">
                                    <h6>Catagry</h6>
                                </label>
                                <select class="custom-select" id="select">
                                    <option value="all" selected>All</option>
                                    <?php
                                    $query = "SELECT * FROM category";

                                    if ($result = mysqli_query($conn, $query)) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $row['cat_name'] . '" >' . $row['cat_name'] . '</option>';
                                        }
                                    }

                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-2 ml-auto">
                            <div class="col-12 mb-3">
                                <label for="state">
                                    <h6>State</h6>
                                </label>
                                <select class="custom-select" id="select2">
                                    <option value="all" selected>All</option>
                                    <?php
                                    $query = "SELECT DISTINCT(state) FROM blog";

                                    if ($result = mysqli_query($conn, $query)) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . $row['state'] . '" >' . $row['state'] . '</option>';
                                        }
                                    }

                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset id="loading" class="form-fieldset col-12 ml-5 ">
                            <?php
                            $num = (int)$_POST['num'];
                            $query = "SELECT * FROM blog where state = 'Madhya Pradesh'";

                            $result = mysqli_query($conn, $query);
                            $total = mysqli_num_rows($result);
                            if ($total > 0) {
                                $i = 0;
                                echo '<table id="customers">
    <tr>
    <th>sno</th>
    <th>Title</th>
    <th>Link</th>
    <th>Keyword</th>
    <th>Description</th>
    </tr>
    
    ';
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
                                };
                            };
                            ?>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>