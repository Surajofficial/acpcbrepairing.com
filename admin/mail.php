<?php
$to = "suraj12gonda@gmail.com";
$subject = "Testing";
$message = "Hello How are You";
$from = "surajofficial694@gmail.com";
$headers = "From :$from";
if (mail($to, $subject, $message, $headers)) {
    echo "msg sent";
}
