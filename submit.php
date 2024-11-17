<?php 
if(isset($_POST['submit'])){
    $to = "sweetlu02@gmail.com"; // this is your Email address
    $email = $_POST['email'];
    $subject = "Email submission for the novella";
    $message = " An email has been submitted from the website for a copy of the novella:" . "\n\n" . $_POST['email'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Email Sent. Thank you. " "We will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>