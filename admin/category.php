<!doctype html>
<html lang="en" dir="ltr">

<?php include './common/head.php' ?>
<title>Category</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include './common/header1.php';
            include './common/check_cat.php' ?>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Category
                        </h1>

                        <div class="page-options d-flex">
                            <a href="./add_cat.php" class="btn btn-green btn-sm">Add Category</a>
                        </div>
                    </div>

                    <div class="row row-cards spotlight-group" data-fit="contain" data-autohide="all">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Category Name</th>
                                            <th>Cat Id</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="load_cat">


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        #catbox {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            z-index: 999;
            overflow: hidden;
            display: none;
            justify-content: center;
            align-items: center;
            background-color: rgba(97, 95, 93, 0.281);

        }

        #catbox h1 {
            position: absolute;
            float: right;
            top: 2%;
            cursor: pointer;
            color: red;
            right: 5%;
        }

        .main {
            background-color: rgba(12, 11, 11, 0.925);
            position: relative;

        }

        .main label {
            font-size: 20px;
            color: rgb(233, 233, 217);
            font-weight: 400;

        }

        .page {
            overflow-y: hidden;
            z-index: 1;
        }
    </style>
    <style>
        #btn_load_more a {
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 200px;
            font-size: 20px;
            background-color: blueviolet;
            padding: 10px;
            vertical-align: middle;
            text-decoration: none;


        }

        #btn_load_more a:hover {
            background-color: #8a2be278;
        }
    </style>
    <script>
        $(document).ready(function() {

            $('#add').click(function(e) {
                $('#catbox').css('display', 'flex');
            })
            $('#cls').click(function(e) {
                $('#catbox').css('display', 'none');
            })

            function load2(ids) {
                $.ajax({
                    url: './common/load_cat.php',
                    type: 'POST',
                    data: {
                        id: ids
                    },
                    success: function(data) {
                        $('#btn_load_more').remove();
                        $('#load_cat').html(data);
                    }
                })
            }
            load2();

            $(document).on("click", "#delet", function() {
                var id = $(this).data("id");
                var conf = confirm('Do You Want to delet this Category');
                if (conf) {
                    $.ajax({
                        url: './common/cat_delet.php',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function(data) {
                            if (data == '0') {
                                confirm('Can\'t Delete This Category First Delete All Blog and Services Exiting under this category');
                            } else {
                                load2();
                            }
                        }
                    })
                }
            })


            // jQuery END BRACEC 
        });
    </script>
</body>

</html>