<?php ob_start();


        if(isset($_POST['submit'])) {
        
                $to = 'bob@example.com';

                $subject = 'Website Change Reqest';
                
                $headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
                $headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
                $headers .= "CC: susan@example.com\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                
                $message = '<p><strong>This is strong text</strong> while this is not.</p>';
                
                
                mail($to, $subject, $message, $headers);

        }


?>