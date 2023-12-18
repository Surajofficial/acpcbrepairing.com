<!doctype html>
<html lang="en" dir="ltr">

<?php include './common/head.php';
include './common/secure.php';
?>
<title>Blogs Number</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include './common/header1.php';

            include './common/check_cat.php';
            ?>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Blogs Number
                        </h1>
                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center" data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-6 ml-5 ">
                            <form id="form" action="create_blog_titles.php" method="POST">
                                <div class="mb-3">
                                    <label class="form-label required">Blog Number</label>
                                    <input type="number" id="blog_title" name="num" placeholder="Enter Blog Title" class="form-control" autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <p id="priview" class="text-danger"></p>
                                    <input type="submit" class="form-control btn-green" id="submitbtn" style="cursor: pointer;" value="Create url" autocomplete="off">
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>