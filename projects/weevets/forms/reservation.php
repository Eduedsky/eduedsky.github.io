<?php
echo "<pre>";
    print_r($_POST);
echo '</pre>';
    if (isset($_POST['submit'])){
        if
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
        $email_body = "Email: $email.\n".
        $email_body = "Phone Number: $phone.\n".
        $email_body = "NUmber of Guests: $number.\n".
        $email_body = "Services to be offered: $service.\n".
        $email_body = "Date of the Event: $date.\n".
        $email_body = "Message: $message.\n";
        
        mail($mailTo, $email_body);
        header("Location: reservation.php?mailsent");

}
?>