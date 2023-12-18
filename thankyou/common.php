<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/mainurl.php' ?>
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['name']) && $_POST['name'] != '') {
    $name = $_POST['name'];
}
$from = "acpcbrepairing.com";
if (isset($_POST['mail_from']) && $_POST['mail_from'] != '') {
    $from = $_POST['mail_from'];
}
if (isset($_POST['phone']) && $_POST['phone'] != '') {
    $phone = $_POST['phone'];
}
if (isset($_POST['email']) && $_POST['email'] != '') {
    $email = $_POST['email'];
}
if (isset($_POST['message']) && $_POST['message'] != '') {
    $msg = $_POST['message'];
}
if (isset($_POST['city']) && $_POST['city'] != '') {
    $city = $_POST['city'];
}
if (isset($_POST['course']) && $_POST['course'] != '') {
    $course = $_POST['course'];
}
if (isset($_POST['page']) && $_POST['page'] != '') {
    $page = '/' . $_POST['page'];
} else {
    $page = '';
}
if (isset($_POST['mail_from']) && $_POST['mail_from'] != '') {
    $mail_from = $_POST['mail_from'];
} else {
    $mail_from = '';
}
//Load Composer's autoloader
require '../vendor/autoload.php';
require '../secure.php';
require '../message.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.acpcbrepairing.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = EMAIL;                     //SMTP username
    $mail->Password   = PASS;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom(EMAIL, 'Multitech.com');
    $mail->addAddress('contact@acpcbrepairing.com', 'AC PCB User');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo(EMAIL, 'Information');
    $mail->addCC('acpcbdelhi@gmail.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $mail_from;
    $mail->Body    = $message;
    // $mail->AltBody = 

    $mail->send();
    echo "<html><head>";
    echo "<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P2TWFGX');</script>
<!-- End Google Tag Manager --></head><body>";
echo '<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P2TWFGX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->';
    echo '<div style="margin-top:15%;">';
    echo "<center><h1 style='color:green;font-size: 45px; margin-bottom: 10px;'>Thank You!</h1></center>";
    echo "<center><p>Your enquiry has been successful submited</p></center>";
    echo "<center><p style='margin-bottom:30px;'>We will connect with you as soon as posible</p></center>";
    echo "<center><p><a href='" . URL  . $page . "' class='btn btn-primary'>Go Back</a></p></center>";
    echo '<style>p{margin-bottom:0px;margin-top:0px;font-size: 20px;line-height: 32px;}.btn{padding: 8px 15px;background-color: #08477d; color: #fff; text-decoration: none;}</style>';
    echo '</div>';

    echo "<script>
     gtag('event', 'conversion', {'send_to': 'AW-393094461/BWQqCPqMq_ECEL3KuLsB'});
    </script></body></html>
    ";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
