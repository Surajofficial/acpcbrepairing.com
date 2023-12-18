<!doctype html>
<html lang="en" dir="ltr">
<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/mainurl.php' ?>
<?php include './common/head.php';
include './common/secure.php';
?>

<title>Get Link</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include './common/header1.php';
            ?>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Get Link
                        </h1>


                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-12 ml-5 ">
                            <?php
                            $num = (int)$_POST['num'];
                            $query = "SELECT * FROM blog order by id desc LIMIT $num";

                            $result = mysqli_query($conn, $query);
                            $total = mysqli_num_rows($result);
                            if ($total > 0) {
                                $i = 0;
                                echo ' <textarea name="blog_data" class="p-3" id="editor" cols="140"
                                        rows="10">';
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $i = $i + 1;
                                    echo URL.'blog/' . $row['url'] . "<br>";
                                };
                                echo ' </textarea>';
                            };
                            ?>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="./assets/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
</body>

</html>