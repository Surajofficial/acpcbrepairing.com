<!doctype html>
<html lang="en" dir="ltr">

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
                        <fieldset class="form-fieldset col-12 ml-5 d-flex justify-content-center ">
                            <form action="getlinkcode.php" method="POST">


                                <div class="mb-3 col-6">
                                    <label class="form-label required">Number of Blog Link</label>
                                    <input name="num" type="text" placeholder="Enter Number OF Link">
                                </div>
                                <div class="mb-3 col-3">
                                    <input type="submit" class="form-control btn-green" id="submitbtn" style="cursor: pointer;" value="Get Link" autocomplete="off">
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