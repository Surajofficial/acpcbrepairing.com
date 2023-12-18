 <style>
   @media(max-width: 650px) {
     #menu .dropdown-menu li {
       background: #081f4f !important;

     }

     #menu {
       height: 84vh !important;
       background: #d02e1e !important;
     }

   }

   .mobile_enquiry {
     text-decoration: none;
     color: #fff !important;
     position: relative;
     top: -3px;
     background: linear-gradient(180deg, transparent, #640202eb 56%, transparent);
     right: 13px;
     /* border: 1px solid white; */
     border-radius: 7px;
     width: 111px;
     text-align: center;
     font-size: 12px;
     float: right;
     padding: 6px 8px
   }

   .sidenav {
     height: 100%;
     width: 100%;
     position: fixed;
     z-index: 1;
     top: 0;
     left: 0;
     background-color: #0c2324 !important;
     overflow-x: hidden;
     transition: 0.5s;
     padding-top: 60px;
     overflow-x: hidden;
   }

   .sidenav a {
     padding: 15px;
     text-decoration: none;
     font-size: 16px !important;
     color: #ffffff;
     display: block;
     transition: 0.3s;
   }

   .sidenav a:hover {
     color: #f1f1f1;
   }

   .sidenav .closebtn {
     position: absolute;
     margin-left: 76%;
     color: #002063 !important;
     font-size: 36px !important;
     margin-top: 2px;
     top: 0;
   }

   /* Style the sidenav links and the dropdown button */
   .sidenav a,
   .dropdown-btn {
     padding: 6px 8px 6px 16px;
     text-decoration: none;
     font-size: 16px !important;
     color: #ffffff;
     display: block;
     border: none;
     background: none;
     width: 100%;
     text-align: left;
     transition: .5s !important;
     cursor: pointer;
     outline: none;
   }

   .sidenav a,
   .dropdown-btn {
     color: #ffffff;
   }

   .open-button {
     width: 100%;
     background-color: #0c2324 !important;
     height: 50px;
     padding: 8px;
     color: white;
   }

   /* On mouse-over */
   .sidenav a:hover,
   .dropdown-btn:hover {
     color: #f1f1f1;
     background-color: #002063 !important;
   }

   .closebtn:hover {
     background-color: transparent !important;
   }


   /* Add an active class to the active dropdown button */
   .active {
     background-color: #002063 #002063;
     /*color: white;*/
   }

   /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
   .dropdown-container {
     display: none;
     background-color: #002063;
     padding-left: 0px;
   }

   .dropdown-container a {
     border-bottom: .5px solid white;
     width: 100%;
   }

   .dropdown-container a:nth-last-child(1) {
     border-bottom: 0px white;
     width: 100%;
   }

   /* Optional: Style the caret down icon */
   .fa-caret-down {
     float: right;
     font-size: 28px !important;
     padding-right: 8px !important;

   }

   .mobile-nav {
     background-color: white;
     padding: 10px;
     position: relative;
   }

   .mobile-nav img {
     width: 120px;
   }

   /* Some media queries for responsiveness */


   @media screen and (max-height: 450px) {
     .sidenav {
       padding: 0;
       width: 0;
       transition: .5s;
     }

     .mobile-nav {
       transition: .5s;
     }

     .slide {
       top: 0px !important;
     }

     .sidenav .closebtn {
       margin-left: 76%;
       color: black !important;
       margin-top: 9px;
       transition: .5s;
     }

     .sidenav a {
       font-size: 18px;
       padding-top: 10px;
       transition: .5s;
     }
   }

   @media only screen and (max-width: 800px) {
     .sidenav {
       padding: 0;
       width: 0;
       transition: .5s;
     }

     .mobile-nav {
       transition: .5s;
     }

     .slide {
       top: 0px !important;
     }

     .sidenav .closebtn {
       position: absolute;
       margin-left: 76%;
       color: black;
       margin-top: 9px;
       transition: .5s;
     }

     .open-button {
       width: 100%;
       background-color: #b50c23;
       height: 50px;
       padding: 8px;
       color: white;
     }
   }
 </style>


 <div id="mySidenav" class="sidenav d-block d-md-none">
   <div class="mobile-nav">
     <img src="assets/media/logo.png">
     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   </div>
   <a href="<?= URL; ?>"></i> Home</a>
   <a class="nav-link" href="<?= URL; ?>about.php">ABOUT US</a>
   <button class="dropdown-btn">COURSES
     <i class="fa fa-caret-down"></i>
   </button>
   <div class="dropdown-container">
     <a class="dropdown-item" href="<?= URL; ?>acpcb-repairing-course.php">AC PCB Repairing Course</a>
     <a class="dropdown-item" href="<?= URL; ?>ac-mechanical-course.php">Ac Mechanical Repairing</a>
     <a class="dropdown-item" href="<?= URL; ?>vrv-ac-repairing-course.php">VRV AC Repairing Course</a>
     <a class="dropdown-item" href="<?= URL; ?>e-rickshaw-repairing-course.php">Electric Rickshaw Repairing Course</a>
     <a class="dropdown-item" href="<?= URL; ?>e-bike-repairing-course.php">Electric Bike Repairing Course</a>
     <a class="dropdown-item" href="<?= URL; ?>inverter-repairing-course.php">Inverter Repairing</a>
   </div>

   <button class="dropdown-btn">ONLINE COURSES
     <i class="fa fa-caret-down"></i>
   </button>
   <div class="dropdown-container">
     <a class="dropdown-item" href="<?= URL; ?>online-acpcb-repairing-course.php">Online AC PCB Repairing</a>
     <a class="dropdown-item" href="<?= URL; ?>online-ac-mechnical-course.php">Online Ac Mechnical Repairing</a>
     <a class="dropdown-item" href="<?= URL; ?>online-electric-vehicle-repairing-course.php">Online Electric Vehicle Repairing</a>
   </div>
   <a class="nav-link" href="<?= URL; ?>gallery.php">Gallery</a>
   <a class="nav-link" href="<?= URL; ?>blog/">Blog</a>
   <a class="nav-link" href="<?= URL; ?>contact.php">Contact Us</a>



 </div>
 <div class="open-button d-block d-md-none">
   <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
   <a href="<?= URL; ?>contact.php" class="enquiry mobile_enquiry"><i class="fas fa-phone-volume" aria-hidden="true"></i> ENQUIRY NOW</a>
 </div>

 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

 <script>
   function openNav() {
     $('#mySidenav').removeClass('d-md-none')
     document.getElementById("mySidenav").style.width = "305px";
   }

   function closeNav() {
     document.getElementById("mySidenav").style.width = "0";
     document.getElementById("mySidenav").style.display = "none";
   }
 </script>

 <script>
   $(document).ready(function() {
     $(".dropdown-btn").click(function() {
       if ($(this).hasClass('active')) {
         $(this).removeClass('active');
         $(this).next('div.dropdown-container').css('display', 'none');
       } else {
         $(".dropdown-btn").removeClass('active');
         $("button.dropdown-btn").next('div.dropdown-container').css('display', 'none');
         $(this).addClass('active');
         $(this).next('div.dropdown-container').css('display', 'block');
       }

     });
   });
 </script>