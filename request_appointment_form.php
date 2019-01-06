<?php
$firstname = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
//$comments = $_POST["comments"];

if($firstname == "" || $email == "" || $phone == ""){
    header("Location: contact.html");
    die();
}

mail("teller1128@yahoo.com", "Weddings With Terry Appointment Request",

//mail("chrisharlow366@gmail.com", "Weddings With Terry Appointment Request",

"FROM: $firstname
EMAIL: $email
PHONE: $phone",
     
"From: Weddings With Terry");

header('Location: index.html');
?>