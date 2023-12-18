<!doctype html>
<html lang="en" dir="ltr">

<?php include './common/head.php';
include './common/secure.php';
?>
<title>Showcase</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include './common/header1.php';
            $id = $_GET['id'];
            $query = "SELECT * FROM category WHERE id = $id";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);

            ?>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Edit Category
                        </h1>


                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-6 ml-5 ">
                            <form id="form" method="POST">
                                <div class="mb-3">
                                    <label class="form-label required">Category name</label>
                                    <input type="text" name="cat_name" value="<?php echo $row['cat_name'] ?>" class="form-control" autocomplete="off">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control" autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <input type="submit" class="form-control btn-green" style="cursor: pointer;" value="Update" autocomplete="off">
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#form').submit(function(e) {
            e.preventDefault()
            formData = $(this).serialize()
            $.ajax({
                type: 'POST',
                url: './common/edit_cat_code.php',
                data: formData,
                success: function(data) {
                    if (data != 0) {
                        location.reload()
                    }
                }
            })
        })
    </script>

</body>

</html>