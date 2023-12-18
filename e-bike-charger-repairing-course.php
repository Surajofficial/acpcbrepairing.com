<?php
define('FILE_NAME', 'AC PCB Repairing syllabus.pdf');
$title = "E Bike  Repairing Course";
$page = 'E Bike  Repairing Course';
$metaData = array(
    'title' => 'E Bike  Repairing Course | E Bike  Repairing Course Delhi,India',
    'description' => 'Call us today to Join professional short term training of E Bike  Repairing Course in Delhi with the best E Bike  Repairing Training in Delhi,India.',
    'keywords' => 'E Bike  repairing course, E Bike  repairing institute,e Bike repairing course, e bike repairing course, e car repairing course,E Bike  repair Course near me, E Bike  repairing Course, E Bike  repairing Course fees, E Bike  technician Course near me, E Bike  repairing Course in delhi, E Bike  repairing Course online, E Bike  repair training centers near me, E Bike  repairing Course near me, E Bike  mechanic Course fees, E Bike  mechanic Course, E Bike  technician Course fees, E Bike  technician Course, E Bike  repairing Course',
);
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
                    <?php include './demo.php' ?>
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