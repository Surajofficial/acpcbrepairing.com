 <?php
  if (isset($_COOKIE["utk"]) > 0) {
    echo "<script> window.location='index.php'; </script>";
  }
  ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">

 <head>
   <meta charset="utf-8">
   <title>LogIn</title>
   <?php include "./common/header.php";
    ?>


 </head>

 <body class="">
   <div class="page">
     <div class="page-single">
       <div class="container">
         <div class="row">
           <div class="col col-login mx-auto">
             <div class="text-center mb-6">
               <img src="./assets/brand/tabler.svg" class="h-6" alt="">
             </div>
             <form class="card" action="index.php" method="post">
               <div class="card-body p-6">
                 <p style="color:green;" id="suc"></p>
                 <?php
                  if (isset($_GET['success'])) {
                    $msg = $_GET['success'];
                    echo "<script>$('#suc').html('" . $msg . "')</script>";
                  }
                  ?>
                 <div class="card-title">Login to your account</div>
                 <p id="mail" style="color:red;line-height:0;font-size:14px;display:none">*Wrong Email Id or Password</p>
                 <div class="form-group">
                   <label class="form-label">Email address</label>
                   <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                 </div>
                 <div class="form-group">
                   <label class="form-label">
                     Password
                   </label>
                   <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                 </div>
                 <div class="form-footer">
                   <button type="submit" id="btn" class="btn btn-primary btn-block">Sign in</button>
                 </div>
               </div>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
   <script>
     $(document).ready(function() {
       $("#btn").on("click", function(e) {
         e.preventDefault();
         var email = $("#exampleInputEmail1").val();
         var pass = $("#exampleInputPassword1").val();
         // alert(pass);
         $.ajax({
           url: "login_code.php",
           type: "POST",
           data: {
             email: email,
             pass: pass,
           },
           success: function(data) {

             if (data == 1) {
               window.location = "index.php";
             }
             if (data == 2) {
               $("#mail").fadeIn();
             } else {
               // alert(data);
               //   $("#exampleInputEmail1").val(data);
             }

           }
         });
       })
     })
   </script>
 </body>

 </html>