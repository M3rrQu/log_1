<?php

if(isset($_POST['submit'])){
    $to = "kacper.ecdl1@gmail.com";
    //$to = "maria_linder@hotmail.com"; // this is your Email address
    $from = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $subject = "LJUSKRISTALLEN - meddelande: ". date("Y/m/d");
    $message = "Name: " . $name . "\n Email: " . $email . "\nPhone number: " . $phone . "Message: \n\n". $message;

    $headers = "From: " . $from;
    mail($to,$subject,$message,$headers);
    header('Location: index.html');
    echo '<script>alert("Message sent correctly!")</script>';
    }
?>