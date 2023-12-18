<div class="image-column mkform-bg text">
  <div class="sec-title style-two">
    <h3 align="center" style="color:#FFFFFF;"><i class="fas fa-envelope"></i> Enquiry Now</h3>
    <div class="sep_mks" style="width:90%; border-bottom:3px solid #fff;"></div>
  </div>
  <div class="contact-form " align="right">
    <!--Comment Form-->
    <form method="post" action="thankyou/enquiry.php" class="contact-form" onSubmit="return validate();">
      <input type="hidden" name="mail_from" value="Sidebar Enquiry Now" />
      <div class="row clearfix my-2" style="padding-left:15px; padding-right:15px;">
        <div class="col-md-12 col-sm-6 col-xs-12 my-2 form-group">
          <input type="text" name="name" placeholder="Your Full Name" required class="form-control">
        </div>
        <div class="col-md-12 col-sm-6 col-xs-12 my-2 form-group">
          <input type="number" name="phone" min="6555555555" max="9999999999" placeholder="Mobile No." required class="form-control">
        </div>
        <div class="col-md-12 col-sm-6 col-xs-12 my-2 form-group">
          <input type="text" name="city" placeholder="City" required class="form-control">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 my-2 col-xs-12 form-group">
          <select name="course" class="form-control text-uppercase" required>
            <option>-----Select Course---</option>
            <option value="Ac Pcb Repairing Course"> Ac Pcb Repairing Course</option>
            <option value="Ac Mechanical Course"> Ac Mechanical Course</option>
            <option value="VRV AC Repairing Course">VRV AC Repairing Course</option>
            <option value="EV Controller Repairing">EV Controller Repairing Course</option>
            <option value="EV Motor Repairing">EV Motor Repairing Course</option>
            <option value="EV Charger Repairing">EV Charger Repairing Course</option>

          </select>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group my-2" align="center">
            <input name="submit" type="submit" value="SEND" class="btn btn-default w-100" style="background: #e21416;
    color: #fff; border-radius:7px; margin-top:15px;" />
          </div>
        </div>
      </div>

    </form>
  </div>
</div>