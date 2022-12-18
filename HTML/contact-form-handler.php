<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    
    
    $email_form = 'PRO_WEBSITE_DEVELOPER@ishant.com';
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "user Message: $message.\n".;

    $to="aishant46@gmail.com";
    $headers = "Form: $email_from \r\n";
    $headers .="Reply-To: $visitor_email \r\n";
?>
