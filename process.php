<?php ob_start();


        if(isset($_POST['submit'])) {
        
        $to = "privatecitadel@gmail.com";
        $email = $_POST['email'];
        $txt  = $_POST['message'];
        $headers = "From: " .$email . "\r\n" .
        "CC: guwanch.ru.tm@mail.ru";

        mail($to, $subject, $txt, $headers);

        header("Location: contact.html");

        }


?>