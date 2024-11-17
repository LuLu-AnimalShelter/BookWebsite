<?php

if $SERVER["REQUESTMETHOD"]=="POST" {

email= _POST′email′;

$to = "sweetlu02@gmail.com"; // Change this to the recipient's email address

headers="From:name <$email>";

body="Subject:subject\n\nMessage: $message";


if mail($to,$subject,$body,$headers) {

echo "Email sent successfully";} 

else {

echo "Email sending failed";

}

}

?>