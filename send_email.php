<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST")
$name = $_POST['name'];
$email = $_POST['emai'];
$phone = $_POST['phone'];
$message = $_POST['message'];

//Set up the email parameters
$to ='ramkelgabriel1996@gmail.com';
$subject ='New Conact Form Submission';
$body ="Name: $name\nEmail: $email\nPhone Number: $phone\nMessage: $message";
$headers ="From: $email";

//send email
if (mail($to, $subject, $body, $headers)){
    echo "<p>Thanks you for contacting us. We will get back to you soon!</p>";
}
else{
    echo "<p>Oops! Something went wrong. please try later.</p>";
}
?>

