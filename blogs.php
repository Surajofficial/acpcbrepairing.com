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
    'keywords'      => $key,
    'description' => $dec,
);
$page = $title;
$title = explode('|', $title)[0];
include('common/header.inc.php');
?>
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
<?php include("common/enroll.inc.php"); ?>
<?php include("common/bottom_content.inc.php"); ?>
<?php include("common/footer.inc.php"); ?>