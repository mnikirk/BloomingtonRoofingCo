<?php

$fname = $mname = $lname = $phone = $email = $addr = $city = $state = $zip = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = test_input($_POST["emp-f-name"]);
    $mname = test_input($_POST["emp-m-name"]);
    $lname = test_input($_POST["emp-l-name"]);
    $phone = test_input($_POST["emp-phone"]);
    $email = test_input($_POST["emp-email"]);
    $addr = test_input($_POST["emp-addr"]);
    $city = test_input($_POST["emp-city"]);
    $state = test_input($_POST["emp-state"]);
    $zip = test_input($_POST["emp-zip"]);
    
    $message = "Employment Application\n" .
    "First Name: " . $fname . "\n" .
    "Middle Name: ". $mname . "\n" .
    "Last Name: ". $lname . "\n" .
    "Phone: " . $phone . "\n" .
    "Email: " . $email . "\n" .
    "Address: " . $addr . "\n" .
    "City: " . $city . "\n" .
    "State: " . $state . "\n" .
    "Zip: " . $zip . "\n";

    $to = "bloomingtonroofingcompany@gmail.com";
    $subject = "Employment Application - ". $fname . " " . $lname;

    mail($to,$subject,$message);

}

header("Location: ./employment.html");
exit();

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>