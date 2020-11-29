


<?php
$to = 'privatecitadel@gmail.com';
$subject = '123';
$message = 'ggggg'; 
$from = 'grandtagma@gmail.com';
 
// Sending email
if(mail($to, $subject, $message)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>