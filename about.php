<?php
$title = "About Us";
$page = 'about';
$metaData = array(
  'title'      => 'About Us | Multitech Institute',
  'description' => 'Multitech Institute is the best Laptop repairing institute in Delhi. We give practical based classes for LED TV repairing course and Mobile repairing course also.',
  'keywords'    => 'laptop repairing course, Laptop repairing institute, best laptop repairing course in india, Mobile repairing institute, Mobile repairing course, led tv repairing course, led tv repairing institute, best lcd led training institute, led tv training institute, led repairing institute in delhi, led repairing course, laptop repairing institute in tilak nagar, laptop repairing institute in uttam nagar,laptop repairing course in delhi,laptop repairing institute in delhi,mobile repairing course in delhi,moblie repairing institute in delhi',
  'canonical'  => 'https://www.multitechinstitute.in',
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
<?php include("common/homebreadcrumb.inc.php"); ?>
<section id="about" class="mt-4 pt-4">
  <div class="container-fluid aos-init aos-animate" data-aos="fade-up">

    <header class="section-header">
      <h3>About Us</h3>
      <div class="text-center p-4" style="color:#ccc;"><i class="fas fa-home"></i> Home / About</div>
    </header>

    <div class="row about-container-fluid mb-3">
      <p style="text-align:justify;">Hello, Dear friends, Welcome to AC PCB REPAIRING also, we are happy you want to know something more about our site

        So, basically, nowadays people are more dependent on online products and services that's why we also, take forward a step to help you.

        Our first wish is to provide you with a better solution to solve your problem. So, kindly if you don't get any solution then mention it in the comment section.

        Also, we are trying to provide fresh & latest content that provides you ideas about all updated information that's happening in the world.

        In the below section you can get more ideas about our site like our website category and content category.

        If you have additional questions or require more information about our About Us Page, do not hesitate to contact us through email at info@acpcbrepairing.com</p>
      <div class="col-lg-6 content order-lg-1 order-2">


        <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          <div class="icon"><i class="fas fa-user-tie fa-2x color-red"></i></div>
          <h4 class="title">Experienced and Top Class Trainer</h4>
          <p class="description">We have skilled and expert trainer which helps you to learn with advance technologies</p>
        </div>

        <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
          <div class="icon"><i class="fas fa-chalkboard-teacher fa-2x color-red"></i></div>
          <h4 class="title">Advance Class & Lab Room</h4>
          <p class="description">We have high-tech tools and labs which will enhance your learning experience. </p>
        </div>

        <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="icon"><i class="fas fa-headset fa-2x color-red"></i></div>
          <h4 class="title">Lifetime backup Technical Support</h4>
          <p class="description">Once you will enrolled with Multitech, you are eligible for lifetime technical support</p>
        </div>

        <div class="icon-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <div class="icon"><i class="far fa-handshake fa-2x color-red"></i></div>
          <h4 class="title">Placement and Job Support</h4>
          <p class="description">We do provide job placement support after course completion. </p>
        </div>

      </div>

      <div class="col-lg-6 background order-lg-2 aos-init aos-animate" data-aos="zoom-in">
        <img src="<?= URL . 'assets/media/about-img.png' ?>" class="img-fluid" alt="">
      </div>
    </div>





  </div>
</section>
<?php
$title = 'Laptop & Mobile Repairing course'; ?>
<?php include("common/enroll.inc.php"); ?>
<?php include("common/testimonial.inc.php"); ?>
<?php include("common/footer.inc.php"); ?>