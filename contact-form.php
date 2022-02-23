<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'asliddinamir3@fmail.com' ;

    $email_subject = 'New Email Wooo' ;

    $email_body = 'User Name: $name.\n'.
                    'User Name: $name.\n'.
                      'User Name: $name.\n';


    $to =  'asliddinamir2@gmail.com' ;
    
    $headers =  'From : $email_from \r\n'; 
    $headers .=  'Reply to : $visitor_email \r\n';
    
    mail($to, $email_subject, $email_body, $headers);           

    header('Location: contact.html');

    
    ?>