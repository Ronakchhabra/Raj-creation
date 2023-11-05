<?php
if(isset($_POST['submit'])){
    $to = "ronakruro3@gmail.com";

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email= $_POST['email'];
    $venue = $_POST['venue'];
    $date = $_POST['date'];
    $event= $_POST['event'];
    $other= $_POST['other'];
    $headers = 'From: '.$email . "\r\n";

    $body = "fname : ".$fname. "\r\n" .
    "lname : ".$lname. "\r\n" .
    "phone : ".$phone. "\r\n" .
    		"Venue : ".$venue. "\r\n" .
        "Date : ".$date. "\r\n" .
        "event : ".$event. "\r\n" .
    		"other : " . $other;
    if(mail($to, $subject, $body , $headers)){
        echo "Mail Sent!";
    }else{
         echo "Failed To Send Mail";
    }
}

?>