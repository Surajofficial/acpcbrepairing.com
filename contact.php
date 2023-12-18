<?php
$title = "Contact Us";
$page = 'contact';
$metaData = array(
  'title'      => 'Contact Us',
  'description' => 'Join Best Inverter Ac Pcb Repairing Course Institute In India For Ev Repairing Course Include Motor Repairing Course Charger Repairing Course And Controller Repairing Course',
  'keywords'    => 'Inverter Ac Pcb Repairing Course, Ev Repairing Institute, Ac Pcb Repairing Course, Inverter Repairing Course, E Bike Repairing Course, E Rickshaw Repairing Course, Ev Motor Repairing Course, EV Charger Repairing Course, Ev Controller Repairing Course, Inverter Ac Pcb Repairing Institute, Ev Repairing Institute, Ac Pcb Repairing Institute, Inverter Repairing Institute, E Bike Repairing Institute, E Rickshaw Repairing Institute, Ev Motor Repairing Institute, EV Charger Repairing Institute, Ev Controller Repairing Institute',
);
include('common/header.inc.php');
?>

<?php //include("common/breadcrumb.inc.php");
?>


<section id="about">

  <div class="header_inner">
    <div class="container-fluid pb-4">
      <h1>Contact Us</h1>
    </div>
  </div>
</section>

<?php include("common/homebreadcrumb.inc.php"); ?>
<style>
  .mkicons {
    background: red;
    color: #fff;
    height: 27px;
    width: 30px !important;
    padding: 5px 7px;
    /* border-radius: 50%; */
    margin-right: 9px;
    margin-top: 1px;
  }

  .mks {
    position: realtive;
    font-weight: normal;
  }

  .mkform {
    border: 0px;
    border-bottom: 1px solid #ccc;
    border-radius: 0px;
  }

  .adbox {
    background: #f7f7f7;
    padding: 23px;
    border-radius: 6px;

  }
</style>

<section class="contactus-one mt-5" id="contactus"><!-- Section id-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <div class="map">

          <div class="col-md-12 col-sm-12">
            <p class="addre adbox"><i class="fas fa-map-marker mkicons"></i>&nbsp;&nbsp;&nbsp;<strong class="mks" style="width:50%;">29/4 A, 2ND FLOOR, ASHOK NAGAR, DOUBLE STORY BEHIND TILAK NAGAR METRO GATE NUMBER 3, New Delhi, Delhi 110018</strong></p>
          </div>
          <div class="col-md-12 col-sm-12">
            <p class="phone-call adbox" style=" margin-top:5px;"><i class="fas fa-phone mkicons"></i>&nbsp;&nbsp;<strong class="mks" style="margin-top: 5px;
    margin-bottom: -9px;"><a href="tel:8929250332" style="color:#333;text-decoration:none;">+91-9599704405</a></strong></p>
          </div>
          <div class="col-md-12 col-sm-12">
            <p class="mail-id adbox"><i class="fas fa-envelope mkicons"></i>&nbsp;&nbsp;<strong class="mks"><a href="mailto:contact@multitechinstitute.in" style="color:#333;text-decoration:none;">contact@acpcbrepairing.com</a></strong></p>
          </div>

        </div>
      </div>
      <div class=" col-md-8 col-sm-8 pl-2">
        <div class="" style="    background: #f7f7f7;
    padding: 28px;">

          <div class=""><!-- contact form -->
            <!-- action="thankyou/contact.php" -->
            <form class="row" action="thankyou/contact.php" class="contact" method="post">
              <input type="hidden" name="mail_from" value="Contact Page" />
              <input type="hidden" name="page" value="contact.php" />
              <div class="form-group col-md-6">
                <input type="text" class="form-control mkform" name="name" id="InputName" placeholder="Your Name" required>
              </div>
              <div class="form-group col-md-6">
                <input type="text" class="form-control mkform" name="email" id="InputEmail" placeholder="Your City" required>
              </div>
              <div class="form-group col-md-12">
                <input type="number" min="6555555555" max="9999999999" class="form-control mkform" name="phone" id="InputWeb" placeholder="Contact Number" required />
                <div class="form-group col-md-12">
                  <textarea class="form-control mkform" name="message" id="InputMessage" rows="4" placeholder="Message"></textarea>
                </div>
                <div class="col-md-12">
                  <button name="submit" type="submit" class="btn  btn-default ">SEND MESSAGE</button>
                </div>
            </form>
          </div>

          <div class="mb-2">&nbsp;</div>

        </div>
      </div>
      <div class=" row contact-info mb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14007.050653170996!2d77.09740149206543!3d28.636874488352063!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf88c8342bce2aa36!2sMultitech%20Institute!5e0!3m2!1sen!2sin!4v1629078961097!5m2!1sen!2sin" width="100%" height="350" style="border:0; margin-top:35px; margin-bottom:30px;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</section>




<?php
$title = 'Laptop & Mobile Repairing course'; ?>
<?php include("common/subscribe.inc.php"); ?>
<?php include("common/footer.inc.php"); ?>