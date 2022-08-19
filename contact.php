<?php

$name = $msg = $phone = $email = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["contact-name"]);
    $email = test_input($_POST["contact-email"]);
    $phone = test_input($_POST["contact-phone"]);
    $msg = test_input($_POST["contact-msg"]);

    $message = "Name: " . $name . "\n" . 
        "Email: " . $email . "\n" . 
        "Phone: " . $phone . "\n" . 
        "Message: " . $msg . "\n";

    $to = "mnikirk@outlook.com";
    //$to = "bloomingtonroofingcompany@gmail.com";
    $subject = "Website Contact Form - ". $name;

    mail($to,$subject,$message);

}

header("Location: ./contact.html");
exit();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>