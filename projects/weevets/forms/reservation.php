<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $number = $_POST['number'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $email_from = 'Weevets Reservation';
    $email_subject = 'New Reservation';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Phone Number: $phone.\n".
                  "NUmber of Guests: $number.\n".
                  "Services to be offered: $service.\n".
                  "Date of the Event: $date.\n".
                  "Message: $message.\n";
    
    $to = "edsky120@gmail.com";

?>