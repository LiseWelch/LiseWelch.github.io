<?php

$name = $_POST['from_name'];
$email = $_POST['from_email'];
$message = $_POST['email_message'];

$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $subject = "Website Email From " + $name;
    $headers = 'MIME-Version: 1.0' . "rn";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "rn";
    $headers .= 'From:' . $email. "rn"; 
    $template = '<div style="padding:50px; color:white;">New email from website: <br/>'
    . 'From:' . $name . '<br/>'
    . 'Sender\'s Email:' . $email . '<br/>'
    . 'Message:' . $message . '<br/><br/></div>';
    $send_message = '<div style="background-color:#7E7E7E; color:white;">' . $template . "</div>";
    $send_message = wordwrap($send_message, 70);
    mail("lise.welch@outlook.com", $subject, $send_message, $headers);
    echo "<p>true<p/>";
} else {
        echo "<p>false<p/>";
    }
?>