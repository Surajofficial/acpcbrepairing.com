<!doctype html>
<html lang="en" dir="ltr">

<?php include './common/head.php';
include './common/secure.php';
?>

<title>Add Category</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include './common/header1.php';

            ?>
            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Add Category
                        </h1>
                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-12 ml-5 ">
                            <form id="form" action="./add_keyword.php" method="POST">
                                <div class="mb-3">
                                    <label class="form-label required">Category Name <span class="text-danger">*</span></label>
                                    <input name="cat_name" class="form-control" required>
                                    <p id="error" class="text-danger ml-2"></p>
                                </div>

                                <div class="mb-3">
                                    <button class="form-control btn-green" style="cursor: pointer;">Next >></button>
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
            e.preventDefault();
            data = $('#form').serialize();
            $.ajax({
                url: './common/verifycat.php',
                type: 'post',
                data: data,
                success: function(response) {
                    if (response == 0) {
                        $('#error').html('Already Exist');
                    } else {
                        $('form').unbind('submit').submit();
                    }
                }

            })
        })
    </script>
</body>

</html>