<?php 
define('URL','https://www.multitechinstitute.in/');
include 'mailtemplate.php';
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer;
$to = "multitechtilaknagar@gmail.com";	
$subject = "Mail From ".$_POST['fname'];
$message = uploadresume($_POST);


$mail->SMTPDebug = 0;	

$mail->isSMTP();                                      // Set mailer to use SMTP

$mail->Host = 'mail.multitechinstitute.in';  // Specify main and backup SMTP servers

$mail->SMTPAuth = true;                               // Enable SMTP authentication

$mail->Username = 'sendmail@multitechinstitute.in';                 // SMTP username

$mail->Password = 'Ganeshji!@#123';                           // SMTP password

$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted

$mail->Port = 465;  

$mail->From = 'sendmail@multitechinstitute.in';



$mail->FromName = 'Multitech Institute';

// Add a recipient

//$mail->addAddress('ellen@example.com');              // Name is optional

$mail->addReplyTo('sendmail@multitechinstitute.in', 'Multitech Institute');

//$mail->addCC('cc@example.com');

//$mail->addBCC('bcc@example.com');



//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
if($_FILES['filee']['tmp_name']!=''){
$mail->addAttachment($_FILES['filee']['tmp_name'], $_FILES['filee']['name']);    // Optional name
}

$mail->addAddress($to);

$mail->Subject = $subject;

$mail->isHTML(true);    

$mail->Body    = $message;

if($mail->send()){
echo '<div style="margin-top:15%;">';
echo "<center><h1 style='color:green;font-size: 45px; margin-bottom: 10px;'>Thank You!</h1></center>";
echo "<center><p>Your enquiry has been successful submited</p></center>";
echo "<center><p style='margin-bottom:30px;'>We will connect with you as soon as posible</p></center>";
echo "<center><p><a href='".URL."' class='btn btn-primary'>Back to home</a></p></center>";
echo '<style>p{margin-bottom:0px;margin-top:0px;font-size: 20px;line-height: 32px;}.btn{padding: 8px 15px;background-color: #08477d; color: #fff; text-decoration: none;}</style>';
echo '</div>';

echo "<script>
  gtag('event', 'conversion', {'send_to': 'AW-393094461/BWQqCPqMq_ECEL3KuLsB'});
</script>
";
}
 ?>
 