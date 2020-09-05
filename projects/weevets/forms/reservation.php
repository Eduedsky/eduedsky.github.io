<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $number = $_POST['number'];
    $service = $_POST['service'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $mailTo = "teamcyber540@gmail.com";
    $headers = "From: ".$email;

    // $email_from = 'Weevets Reservation';
    // $email_subject = 'New Reservation';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Phone Number: $phone.\n".
                  "NUmber of Guests: $number.\n".
                  "Services to be offered: $service.\n".
                  "Date of the Event: $date.\n".
                  "Message: $message.\n";
    
    mail($mailTo, $email_body);
}
?>