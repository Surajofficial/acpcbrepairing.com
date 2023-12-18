<!doctype html>
<html lang="en" dir="ltr">

<?php include './common/head.php';
include './common/secure.php';
?>

<title>Add Keyword</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include './common/header1.php';
            $cat_name = $_POST['cat_name'];
            ?>
            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Add Description
                        </h1>
                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-12 ml-5 ">
                            <form id="form" action="./common/add_key.php" method="POST">
                                <div class="mb-3">
                                    <label class="form-label required">Description</label>
                                    <input type="hidden" name="cat_name" value="<?= $cat_name ?>">
                                    <textarea name="dec" class="p-3 form-control" cols="140" rows="10" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <p id="error" class="text-danger ml-2"></p>
                                    <input type="submit" class="form-control btn-green" id="submitbtn" style="cursor: pointer;" value="Save" autocomplete="off">
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $('#form').submit(function(e) {
        e.preventDefault();
        data = $('#form').serialize();
        $.ajax({
            url: './common/add_key.php',
            type: 'post',
            data: data,
            success: function(response) {
                if (response == 0) {
                    $('#error').html('Smothing Went Wrong');
                } else {
                    window.location.href = 'category.php';
                }
            }

        })
    })
</script>

</html>