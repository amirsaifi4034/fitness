<?php 

if(isset($_POST['submit'])){
    $mailto = "amir@edutra.io";
    $name=$_POST['name'];
    $email= $_POST['email'];
    $phoneno= $_POST['phoneno'];
    $subject= $_POST['message']; 
    $subject2= "Confirmation: Message was submitted successfully.";

    //Email that I will Received
    $message = "Client Name: " . $name . "\n" 
    . "Email No:" . $email . "\n\n"
    . "Phone No:" . $phoneno . "\n"
    . "Message:" . $message . "\n";

    // Email that client Received confirmation
    $message2 = "Dear" . $name . "\n"
    ."Thank you for contacting us. we will get back to you shortly!" . "\n\n"
    ."Regards," . "\n" . "Fitness mantra" ;

    //Email Headers 
    $headers = "From: " . $email; //client email
    $headers2 = "From: " . $mailto;  //client confirmation

    //php mailer function

    mail($mailto, $subject, $message, $headers); //mail received me
    mail($fromEmail, $subject2, $message2, $headers2); //mail send client
    
}
?>