<?php
if (isset($_POST['name'],$_POST['email'],$_POST['message'])){

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$from = 'From: ' . $_POST['email']; 
$to  = 'dattausc@gmail.com'; 
$subject = 'subject';


$body = "From: $name\n E-Mail: $email\nMessage:\n $message";
if ($name != '' && $email != '' && $message != '') {

        if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Success</p>';
    } else { 
        echo '<p>Error sending message</p>'; 
    } 


} else {
    echo '<p>fill the form</p>';
}
}
?>
