<?php
if (!isset($_GET['url'])) {
    echo "404";
    exit();
}

?>
<?php
define('FILE_NAME', 'AC PCB Repairing syllabus.pdf');


$metaData = array(
    'title'          => $title,
    'keywords'      => NULL,
    'description' => $dec,
);
$page = $title;
$title = explode('||', $title)[0];
include('common/header.inc.php');
?>
<style>
    .accordion .collapsible {
        background-color: #198185;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
    }

    .accordion .active,
    .collapsible:hover {
        background-color: #144c4e;
    }

    .accordion .collapsible:after {
        content: '\002B';
        color: blue;
        padding: 2px 10px;
        font-weight: bold;
        float: right;
        margin-left: 5px;
        background-color: white;
    }

    .accordion .active:after {
        content: "\2212";
    }

    .accordion .content {
        padding: 0 18px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        background-color: #f1f1f1;
    }
</style>
<style>
    .accordion2 .collapsible {
        color: white;
        cursor: pointer;
        padding: 5px;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
    }

    .accordion2 .collapsible:hover {
        background-color: #fff0 !important;
    }

    .accordion2 .collapsible:after {
        content: '\002B';
        color: white;
        padding: 0px 1px;
        font-weight: bold;
        float: right;
        margin-left: 5px;
    }

    .accordion2 .active:after {
        content: "\2212";
    }

    .accordion2 .content {
        margin-left: 5px;
        max-height: 0;
        width: 400px !important;
        overflow-y: hidden;
        transition: max-height 0.2s ease-out;
    }

    .accordion2 .content a {
        text-decoration: none;
        color: white;
        font-size: 15px;
        z-index: 999999999999999;
    }

    .accordion2 .content li {
        list-style: none;
        z-index: 999999999999999;
    }
</style>
<div class="header_inner">
    <div class="container-fluid pb-4">
        <h1>

            <?= $title; ?>
        </h1>
    </div>
</div>
<?php include("common/breadcrumb.inc.php"); ?>
<section class="page-wrapper">
    <div class="container-fluid">
        <div class="row  mt-5">
            <div class="col-lg-8">
                <div class="single-course-details">
                    <?= $data ?>
                    <?php include('common/enq_popup.php'); ?>
                </div>
            </div>
            <div class="col-lg-4 ">
                <?php include("common/related_courses.inc.php"); ?>
                <?php include("common/enquiry.inc.php"); ?>
            </div>
        </div>
    </div>
</section>

<h1 class="text-center">FAQ</h1>
<div class="container m-2 mb-3">
    <div class="row">
        <div class="col-lg-6">

            <div class="accordion res-991-pb-30">

                <?php
                $faq_right = json_decode($faq_right);
                foreach ($faq_right as $k => $v) {
                ?>
                    <div class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                        <div class="collapsible"><?= $v->title ?></div>
                        <div class="content">
                            <p><?= $v->dec ?></p>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="accordion res-991-pb-30">
                <?php
                $faq_left = json_decode($faq_left);
                foreach ($faq_left as $k => $v) {
                ?>
                    <div class="toggle ttm-style-classic ttm-toggle-title-style-border ttm-control-right-true">
                        <div class="collapsible"><?= $v->title ?></div>
                        <div class="content">
                            <p><?= $v->dec ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php include("common/enroll.inc.php"); ?>
<?php include("common/bottom_content.inc.php"); ?>
<?php include("common/courses.footer.inc.php"); ?>
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            $(this).slideUp;
            data = $(document).find('.accordion2 .active').not($(this))
            if (data[0]) {
                data[0].nextElementSibling.style.maxHeight = null;
                $(document).find('.state2').not($(this)).removeClass("active");
            }
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }


        });
    }
</script>