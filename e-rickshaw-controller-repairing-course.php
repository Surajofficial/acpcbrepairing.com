<?php
define('FILE_NAME', 'AC PCB Repairing syllabus.pdf');
$title = "E Rickshaw  Repairing Course";
$page = 'E Rickshaw  Repairing Course';
$metaData = array(
    'title' => 'E Rickshaw  Repairing Course | E Rickshaw  Repairing Course Delhi,India',
    'description' => 'Call us today to Join professional short term training of E Rickshaw  Repairing Course in Delhi with the best E Rickshaw  Repairing Training in Delhi,India.',
    'keywords' => 'E Rickshaw  repairing course, E Rickshaw  repairing institute,e rickshaw repairing course, e bike repairing course, e car repairing course,E Rickshaw  repair Course near me, E Rickshaw  repairing Course, E Rickshaw  repairing Course fees, E Rickshaw  technician Course near me, E Rickshaw  repairing Course in delhi, E Rickshaw  repairing Course online, E Rickshaw  repair training centers near me, E Rickshaw  repairing Course near me, E Rickshaw  mechanic Course fees, E Rickshaw  mechanic Course, E Rickshaw  technician Course fees, E Rickshaw  technician Course, E Rickshaw  repairing Course',
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